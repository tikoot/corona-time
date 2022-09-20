<?php

namespace App\Http\Controllers;

use App\Models\Statistic;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
	public function CountryStatistics(Request $request): View
	{
		$search = $request->search;
		if ($search)
		{
			$statistics = Statistic::where('country->ka', 'LIKE', "%{$search}%")
			->orWhere('country->en', 'LIKE', '%' . ucwords($search) . '%')
			->get();

			return view('countries', [
				'statistics' => $statistics,
			]);
		}

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
