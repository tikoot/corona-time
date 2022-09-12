<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterUserRequset extends FormRequest
{
	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array<string, mixed>
	 */
	public function rules()
	{
		return [
			'username'              => 'required|min:3|unique:users',
			'email'                 => 'required|email|unique:users',
			'password'              => 'required|min:3',
			'password_confirmation' => 'required|min:3|same:password',
		];
	}

	public function messages()
	{
		return [
			'username.required'          => 'Username is required',
			'username.min'               => 'Too Short',
			'email.required'             => 'Email is required',
			'password.required'          => 'A message is required',
			'password.min'               => 'Too Short',
			'password_confirmation.same' => 'Password Confirmation should match the Password',
		];
	}
}
