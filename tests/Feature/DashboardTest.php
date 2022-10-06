<?php

namespace Tests\Feature;

use App\Models\Statistic;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class DashboardTest extends TestCase
{
	use RefreshDatabase;

	private User $user;

	protected function setUp(): void
	{
		parent::setUp();
		$this->user = User::factory()->create();
	}

	public function test_redirect_user_to_login_if_not_authorized()
	{
		$response = $this->get('/dashboard');
		$response->assertRedirect('/login');
	}

	public function test_visit_dashboard_page_successfully()
	{
		$response = $this->actingAs($this->user)->get('/dashboard');
		$response->assertSuccessful();
	}

	public function test_visit_countries_page_successfully()
	{
		$response = $this->actingAs($this->user)->get('/dashboard/countries');
		$response->assertSuccessful();
	}

	public function test_user_can_filter_statistic_by_name()
	{
		Statistic::factory()->create([
			'country' => [
				'en' => 'georgia',
				'ka' => 'საქართველო',
			],
		]);
		$response = $this->actingAs($this->user)->get('/dashboard/countries?search=georgia');
		$response->assertSuccessful();
	}

	public function test_user_can_filter_statistic_ascending()
	{
		Statistic::factory(10)->create();

		$response = $this->actingAs($this->user)->get(route('sort.ascend', 'sort-ascend'));

		$response->assertSuccessful();
	}

	public function test_user_can_filter_statistic_descending()
	{
		Statistic::factory(10)->create();

		$response = $this->actingAs($this->user)->get(route('sort.descend', 'sort.descend'));

		$response->assertSuccessful();
	}
}
