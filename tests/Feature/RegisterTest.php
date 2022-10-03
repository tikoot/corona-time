<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Mail\Mailable;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\URL;
use Tests\TestCase;

class RegisterTest extends TestCase
{
	/**
	 * @expectedException InvalidArgumentException
	 */
	use RefreshDatabase;

	private User $user;

	protected function setUp(): void
	{
		parent::setUp();
		$this->user = User::factory()->create();
	}

	public function test_register_page_is_accessible()
	{
		$response = $this->get('/');

		$response->assertSuccessful();
		$response->assertSee('Welcome to Coronatime');
		$response->assertViewIs('auth.register');
	}

	public function test_register_show_errors_if_input_is_not_provided()
	{
		$response = $this->post('/register');
		$response->assertSessionHasErrors(
			[
				'username',
				'email',
				'password_confirmation',
				'password',
			]
		);
	}

	public function test_register_show_errors_if_email_input_is_not_in_email_format()
	{
		$data = [
			'email'    => 'emailgmail.com',
		];

		$response = $this->post('/register', $data);
		$response->assertSessionHasErrors(
			[
				'email',
			]
		);
	}

	public function test_register_show_errors_if_input_is_provided_partial()
	{
		$data = [
			'username' => 'username',
			'email'    => 'email@gmail.com',
		];

		$response = $this->actingAs($this->user)->post('/register', $data);
		$response->assertSessionHasErrors(
			[
				'password_confirmation',
				'password',
			]
		);
	}

	public function test_register_show_error_if_username_input_is_less_than_three_characters()
	{
		$response = $this->post('/register', [
			'username' => 'be',
		]);

		$response->assertSessionHasErrors(
			[
				'username',
			]
		);
	}

	public function test_register_show_error_if_user_already_exists()
	{
		$response = $this->post('register', [
			'username' => $this->user->username,
		]);
		$response->assertSessionHasErrors(
			[
				'username',
			]
		);
	}

	public function test_register_show_error_if_email_already_exists()
	{
		$response = $this->post('register', [
			'email' => $this->user->email,
		]);
		$response->assertSessionHasErrors(
			[
				'email',
			]
		);
	}

	public function test_register_show_error_if_password_input_is_less_than_three_characters()
	{
		$response = $this->post('/register', [
			'password' => 'be',
		]);

		$response->assertSessionHasErrors(
			[
				'password',
			]
		);
	}

	public function test_register_show_error_if_password_confirmation_input_is_less_than_three_characters()
	{
		$response = $this->post('/register', [
			'password_confirmation' => 'be',
		]);
		$response->assertSessionHasErrors(
			[
				'password_confirmation',
			]
		);
	}

	public function test_register_show_error_if_password_confirmation_input_is_not_same_as_password()
	{
		$response = $this->post('/register', [
			'password'              => 'goat',
			'password_confirmation' => 'goa',
		]);
		$response->assertSessionHasErrors(
			[
				'password_confirmation',
			]
		);
	}

	public function test_user_can_register_successfully()
	{
		$response = $this->actingAs($this->user)->post('/register', [
			'username'              => 'username',
			'email'                 => 'email@gmail.com',
			'password'              => 'pomegranate',
			'password_confirmation' => 'pomegranate',
		]);

		$response->assertRedirect('/email/verify');
	}

	public function test_if_verify_message_is_sent_to_user()
	{
		$mail = fake()->email();
		$user = [
			'username'              => 'username',
			'email'                 => $mail,
			'password'              => 'pomegranate',
			'password_confirmation' => 'pomegranate',
		];

		$response = $this->actingAs($this->user)->post('/register', $user);

		Mail::fake();
		Mail::to($user['email'])->send(new Mailable($user));
		$response->assertRedirect('/email/verify');
	}

	public function test_if_user_can_verify()
	{
		$user = User::factory()->create(['email_verified_at' => null]);

		$verificationUrl = URL::temporarySignedRoute(
			'verification.verify',
			now()->addMinutes(60),
			['id' => $user->id, 'hash' => sha1($user->email)]
		);

		$response = $this->get($verificationUrl);

		$response->assertRedirect('/email/confirm');
	}

	public function test_if_show_authorization_exception_when_user_doesnot_exist()
	{
		$user = User::factory()->create(['email_verified_at' => null]);
		$mail = fake()->email();
		$verificationUrl = URL::temporarySignedRoute(
			'verification.verify',
			now()->addMinutes(60),
			['id' => $user->id, 'hash' => sha1($mail)]
		);

		$response = $this->get($verificationUrl);
		$response->assertStatus(403);
	}
}
