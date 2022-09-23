<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePasswordReset;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Str;

class ForgotPasswordController extends Controller
{
	public function sendResetLink(Request $request): View|RedirectResponse
	{
		$request->validate(['email' => 'required|email']);

		Password::sendResetLink(
			$request->only('email')
		);

		return redirect()->route('verification.notice');
	}

	public function passwordReset($token, Request $request): View
	{
		return view('auth.password.reset-password', [
			'token'  => $token,
			'email'  => $request->email,
		]);
	}

	public function passwordUpdate(StorePasswordReset $request): RedirectResponse
	{
		$status = Password::reset(
			$request->only('email', 'password', 'password_confirmation', 'token'),
			function ($user, $password) {
				$user->forceFill([
					'password' => $password,
				])->setRememberToken(Str::random(60));

				$user->save();

				event(new PasswordReset($user));
			}
		);

		return redirect()->route('confirm.password');
	}
}
