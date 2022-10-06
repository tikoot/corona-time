<?php

namespace Tests\Feature;

use Tests\TestCase;

class ChangeLocaleTest extends TestCase
{
	public function test_user_can_change_locale()
	{
		$response = $this->get(route('locale.change', 'en'));
		$response->assertSessionHas('lang', 'en');
	}

	public function test_user_can_not_set_unsopported_locale()
	{
		$response = $this->get(route('locale.change', 'pl'));
		$response->assertSessionHas('lang', 'en');
	}
}
