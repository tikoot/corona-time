<?php

return [
	'custom' => [
		'email' => [
			'required' => 'მომხმარებლის ელ-ფოსტა აუცილებელია',
			'unique'   => 'ელფოსტა უკვე რეგისტრირებულია',
		],
		'username' => [
			'required' => 'მომხმარებლის სახელი აუცილებელია',
			'min'      => 'ძალიან მოკლე, შეიყვანეთ მინ 3 სიმბოლო',
			'unique'   => 'მომხმარებლის სახელი უკვე არსებობს',
		],
		'password' => [
			'required'                                         => 'პაროლი აუცილებელია',
			'min'                                              => 'ძალიან მოკლე, შეიყვანეთ მინ 3 სიმბოლო',
			'password_confirmation.same'                       => 'შეუსაბამო პაროლი',
		],
		'password_confirmation' => [
			'same' => 'შეუსაბამო პაროლი',
			'min'  => 'ძალიან მოკლე, შეიყვანეთ მინ 3 სიმბოლო',
		],
		'login' => [
			'required' => 'მომხმარებლის სახელი აუცილებელია',
			'min'      => 'ძალიან მოკლე, შეიყვანეთ მინ 3 სიმბოლო',
		],
	],
];
