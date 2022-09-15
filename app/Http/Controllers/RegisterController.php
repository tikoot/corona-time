<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterUserRequset;
use App\Models\User;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Events\Verified;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

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

	public function verify(Request $request): RedirectResponse
	{
		$user = User::find($request->route('id'));

		if (!hash_equals((string) $request->route('hash'), sha1($user->getEmailForVerification())))
		{
			throw new AuthorizationException;
		}

		if ($user->markEmailAsVerified())
		{
			event(new Verified($user));
		}

		return redirect()->route('confirmation.notice');
	}
}
