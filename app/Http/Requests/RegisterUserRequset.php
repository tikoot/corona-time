<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterUserRequset extends FormRequest
{
	public function rules()
	{
		return [
			'username'              => 'required|min:3|unique:users',
			'email'                 => 'required|email|unique:users',
			'password'              => 'required|min:3',
			'password_confirmation' => 'required|min:3|same:password',
		];
	}
}
