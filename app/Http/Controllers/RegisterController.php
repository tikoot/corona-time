<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterUserRequset;
use App\Models\User;
use Illuminate\Http\RedirectResponse;

class RegisterController extends Controller
{
	public function store(RegisterUserRequset $request): RedirectResponse
	{
		$user = User::create($request->validated());

		return  redirect()->route('/');
	}
}
