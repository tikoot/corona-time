<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
{
	public function rules()
	{
		return [
			'username'    => 'required|exists:users,username',
			'password'    => 'required',
		];
	}

	public function messages()
	{
		return [
			'username.required'                 => 'The username is required.',
			'username.exists'                   => 'This username does not exist.',
			'password.required'                 => 'A password is required',
		];
	}
}
