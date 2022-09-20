<?php

namespace App\Http\Controllers;

use App\Models\Statistic;
use Illuminate\Contracts\View\View;

class DashboardController extends Controller
{
	public function CountryStatistics(): View
	{
		return view('countries', [
			'statistics' => Statistic::all(),
		]);
	}

	public function WorldwideStatistics(Statistic $statistic): View
	{
		$new_cases = $statistic->sum('confirmed');
		$recovered = $statistic->sum('recovered');
		$deaths = $statistic->sum('deaths');

		return view('dashboard', [
			'new_cases' => $new_cases,
			'recovered' => $recovered,
			'deaths'    => $deaths,
		]);
	}
}
