<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class AuthTest extends TestCase
{
	use RefreshDatabase;

	private User $user;

	protected function setUp(): void
	{
		parent::setUp();
		$this->user = User::factory()->create();
	}

	public function test_login_page_is_accessible()
	{
		$response = $this->get('/login');

		$response->assertSuccessful();
		$response->assertSee('Welcome back');
		$response->assertViewIs('auth.login');
	}

	public function test_auth_show_errors_if_input_is_not_provided()
	{
		$response = $this->post('/dashboard');
		$response->assertSessionHasErrors(
			[
				'login',
				'password',
			]
		);
	}

	public function test_auth_show_error_if_username_input_is_not_provided()
	{
		$data = ([
			'password' => $this->user['password'],
		]);

		$response = $this->post('/dashboard', $data);
		$response->assertSessionHasErrors(
			[
				'login',
			]
		);

		$response->assertSessionDoesntHaveErrors(['password']);
	}

	public function test_auth_show_error_if_username_input_is_less_than_three_characters()
	{
		$response = $this->post('/dashboard', [
			'password' => 'password',
			'login'    => 'be',
		]);

		$response->assertSessionHasErrors(
			[
				'login',
			]
		);

		$response->assertSessionDoesntHaveErrors(['password']);
	}

	public function test_auth_show_error_if_password_input_is_not_provided()
	{
		$data = ([
			'login' => $this->user['username'],
		]);

		$response = $this->post('/dashboard', $data);
		$response->assertSessionHasErrors(
			[
				'password',
			]
		);

		$response->assertSessionDoesntHaveErrors(['login']);
	}

	public function test_auth_user_cannot_login_with_incorrect_credentials()
	{
		$response = $this->post('/dashboard', [
			'login'    => 'user',
			'password' => 'password',
		]);

		$response->assertSessionHasErrors(
			[
				'login',
			]
		);
	}

	public function test_auth_user_redirect_to_worldwide_page_if_login_is_successful()
	{
		$username = 'user';
		$password = 'password';

		$user = User::factory()->create(
			[
				'username' => $username,
				'password' => $password,
			]
		);
		$response = $this->post('/dashboard', [
			'login'    => $username,
			'password' => $password,
		]);

		$response->assertRedirect(route('dashboard.worldwide'));
	}

	public function test_auth_user_cannot_login_if_not_verified()
	{
		$username = 'user';
		$password = 'password';
		$verified = null;

		$user = User::factory()->create(
			[
				'username'          => $username,
				'password'          => $password,
				'email_verified_at' => null,
			]
		);
		$response = $this->post('/dashboard', [
			'login'    => $username,
			'password' => $password,
		]);

		$this->assertSame(null, $user->email_verified_at);
		$response->assertStatus(403);
		$response->assertSee('Your email address is not verified.');
	}

	public function test_user_can_logout_successfully()
	{
		$this->get('/logout')->assertRedirect('login');
	}

	public function test_user_can_not_log_out_if_he_is_not_logged_in()
	{
		$this->actingAs($this->user)->get('/logout')->assertRedirect('login');
	}
}
