<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePasswordReset extends FormRequest
{
	public function rules()
	{
		return [
			'password'                => 'required|min:3',
			'password_confirmation'   => 'required|same:password',
			'token'                   => 'required',
			'email'                   => 'required|email',
		];
	}

	public function messages()
	{
		return [
			'password.required'          => 'A message is required',
			'password.min'               => 'Too Short',
			'password_confirmation.same' => 'Password repeat should match the Password',
			'email'                      => 'email is required',
		];
	}
}
