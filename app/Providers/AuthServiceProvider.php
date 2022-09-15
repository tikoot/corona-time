<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;

use Illuminate\Auth\Notifications\ResetPassword;
use Illuminate\Auth\Notifications\VerifyEmail;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Notifications\Messages\MailMessage;

class AuthServiceProvider extends ServiceProvider
{
	/**
	 * The model to policy mappings for the application.
	 *
	 * @var array<class-string, class-string>
	 */
	protected $policies = [
		// 'App\Models\Model' => 'App\Policies\ModelPolicy',
	];

	/**
	 * Register any authentication / authorization services.
	 *
	 * @return void
	 */
	public function boot()
	{
		$this->registerPolicies();

		VerifyEmail::toMailUsing(function ($notifiable, $url) {
			return (new MailMessage)->view('auth.email.verification-verify', ['url' => $url]);
		});

		ResetPassword::toMailUsing(function ($notifiable, $token) {
			$url = url(route('password.reset', [
				'token' => $token,
				'email' => $notifiable->getEmailForPasswordReset(),
			], false));

			return (new MailMessage)
			->subject('Reset Password')
			->view('auth.password.reset-email', [
				'url'   => $url,
			]);
		});
	}
}
