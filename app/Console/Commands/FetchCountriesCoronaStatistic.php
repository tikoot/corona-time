<?php

namespace App\Console\Commands;

use App\Models\Statistic;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;

class FetchCountriesCoronaStatistic extends Command
{
	/**
	 * The name and signature of the console command.
	 *
	 * @var string
	 */
	protected $signature = 'fetch:covid-statistic';

	/**
	 * The console command description.
	 *
	 * @var string
	 */
	protected $description = 'Fetch data from api and store to db';

	/**
	 * Execute the console command.
	 *
	 * @return int
	 */
	public function handle()
	{
		$countries = Http::get('https://devtest.ge/countries')->object();

		foreach ($countries as $country)
		{
			$statistic = Http::post('https://devtest.ge/get-country-statistics', [
				'code' => $country->code,
			])->object();

			Statistic::updateOrCreate(
				['id' => $statistic->id],
				['country'   => [
					'en' => $country->name->en,
					'ka' => $country->name->ka,
				],
					'code'      => $country->code,
					'confirmed' => $statistic->confirmed,
					'recovered' => $statistic->recovered,
					'critical'  => $statistic->critical,
					'deaths'    => $statistic->deaths, ],
			);
		}
	}
}
