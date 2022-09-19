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
}
