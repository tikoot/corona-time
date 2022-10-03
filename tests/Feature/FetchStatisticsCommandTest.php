<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class FetchStatisticsCommandTest extends TestCase
{
	use RefreshDatabase;

	public function test_successfully_created()
	{
		$this
			->artisan('fetch:covid-statistic')
			->expectsOutput('Statistic Fetched Successfully');
	}
}
