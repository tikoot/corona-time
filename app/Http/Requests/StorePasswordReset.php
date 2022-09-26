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
}
