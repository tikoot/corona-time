<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Tests\TestCase;

class ResetPasswordTest extends TestCase
{
	use RefreshDatabase;

	public function test_if_password_reset_link_is_sent()
	{
		$response = $this->post('/forgot-password', [
			'email' => 'email@gmail.com',
		]);

		$response->assertRedirect('/email/verify');
	}

	public function test_show_errors_if_email_input_is_not_in_email_format()
	{
		$response = $this->post('/forgot-password', [
			'email' => 'emailgmail.com',
		]);

		$response->assertSessionHasErrors(
			[
				'email',
			]
		);
	}

	public function test_show_errors_if_email_input_is_not_provided()
	{
		$response = $this->post('/forgot-password');
		$response->assertSessionHasErrors(
			[
				'email',
			]
		);
	}

	public function test_show_password_reset_page()
	{
		$token = bin2hex(random_bytes(32));
		$response = $this->get('/reset-password/{token}', [
			'token' => $token,
		]);

		$response->assertViewIs('auth.password.reset-password');
	}

	public function test_show_error_if_password_input_is_not_provided()
	{
		$response = $this->post('/reset-password', [
			'password_confirmation' => 'goat',
		]);

		$response->assertSessionHasErrors(
			[
				'password',
			]
		);
	}

	public function test_show_error_if_password_confirmation_input_is_not_provided()
	{
		$response = $this->post('/reset-password', [
			'password' => 'goat',
		]);

		$response->assertSessionHasErrors(
			[
				'password_confirmation',
			]
		);
	}

	public function test_show_error_if_password_input_is_less_than_three_characters()
	{
		$response = $this->post('/reset-password', [
			'password' => 'be',
		]);

		$response->assertSessionHasErrors(
			[
				'password',
			]
		);
	}

	public function test_show_error_if_password_confirmation_input_is_less_than_three_characters()
	{
		$response = $this->post('/reset-password', [
			'password_confirmation' => 'be',
		]);
		$response->assertSessionHasErrors(
			[
				'password_confirmation',
			]
		);
	}

	public function test_show_error_if_password_confirmation_input_is_not_same_as_password()
	{
		$response = $this->post('/reset-password', [
			'password'              => 'goat',
			'password_confirmation' => 'goa',
		]);
		$response->assertSessionHasErrors(
			[
				'password_confirmation',
			]
		);
	}

	public function test_if_password_update_successfully()
	{
		User::factory()->create([
			'email'    => 'user@domain.com',
			'password' => Hash::make('oldpassword'),
		]);

		$token = Password::createToken(User::first());

		$response = $this->post(route('password.update'), [
			'email'                 => 'user@domain.com',
			'password'              => 'newpassword',
			'password_confirmation' => 'newpassword',
			'token'                 => $token,
		]);

		$response->assertRedirect(route('confirm.password'));

		$this->assertTrue(Hash::check('newpassword', User::first()->password));
	}
}
