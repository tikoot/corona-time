<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
	public function login(StorePostRequest $request): View|RedirectResponse
	{
		$login = request()->input('login');
		$remember = $request->input('remember');

		$fieldType = filter_var($login, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';

		if (auth()->attempt([$fieldType => $login, 'password' => $request->password], $remember))
		{
			if (Auth::user()->email_verified_at == null)
			{
				return abort(403, 'Your email address is not verified.');
			}

			Session::put('user_session', $login);

			return redirect()->route('dashboard.worldwide');
		}
		return redirect()->route('login')->withErrors(['login' => trans('login.provided_credentials_are_invalid_or_user_does_not_exist')]);
	}

	public function logout(): RedirectResponse
	{
		auth()->logout();

		return redirect()->route('login');
	}
}
