<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
{
	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array<string, mixed>
	 */
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
			'username.required'                 => 'The email is required.',
			'username.exists'                   => 'The email is not registered in the system.',
			'password.required'                 => 'A password is required',
		];
	}
}
