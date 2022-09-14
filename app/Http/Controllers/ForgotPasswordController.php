<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePasswordReset;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;

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

	public function passwordReset($token): View
	{
		return view('auth.password.reset-password', [
			'token' => $token,
		]);
	}

	public function passwordUpdate(StorePasswordReset $request): RedirectResponse
	{
		$request->user()->update([
			'password'                         => $request->password,
			'remember_token'                   => $request->token,
		]);

		return redirect()->route('confirm.password');
	}
}
