<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
{
	public function rules()
	{
		return [
			'login'       => 'required|min:3',
			'password'    => 'required',
		];
	}
}
