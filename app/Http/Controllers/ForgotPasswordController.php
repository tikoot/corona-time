<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;

class ForgotPasswordController extends Controller
{
	public function sendResetLink(Request $request): View|RedirectResponse
	{
		$request->validate(['email' => 'required|email']);

		$status = Password::sendResetLink(
			$request->only('email')
		);

		return $status === Password::RESET_LINK_SENT
		? view('auth.email.verify-email')
		: back()->withErrors(['email' => __($status)]);
	}

	public function passwordReset($token): View
	{
		return view('auth.password.reset-password', [
			'token' => $token,
		]);
	}
}
