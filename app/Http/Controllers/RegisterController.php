<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterUserRequset;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\RedirectResponse;

class RegisterController extends Controller
{
	public function store(RegisterUserRequset $request): RedirectResponse
	{
		$user = User::create([
			'username' => $request->username,
			'email'    => $request->email,
			'password' => $request->password,
		]);

		event(new Registered($user));

		return  redirect()->route('verification.notice');
	}

	public function verify(EmailVerificationRequest $request): RedirectResponse
	{
		$request->fulfill();

		return redirect()->route('confirmation.notice');
	}
}
