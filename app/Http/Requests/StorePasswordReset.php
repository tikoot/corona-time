<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePasswordReset extends FormRequest
{
	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array<string, mixed>
	 */
	public function rules()
	{
		return [
			'password'                => 'required|min:3',
			'password_confirmation'   => 'required|same:password',
			'token'                   => 'required',
		];
	}

	public function messages()
	{
		return [
			'password.required'          => 'A message is required',
			'password.min'               => 'Too Short',
			'password_confirmation.same' => 'Password repeat should match the Password',
		];
	}
}
