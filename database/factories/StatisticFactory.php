<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class StatisticFactory extends Factory
{
	/**
	 * Define the model's default state.
	 *
	 * @return array<string, mixed>
	 */
	public function definition()
	{
		return [
			'country' => [
				'en' => $this->faker->word,
				'ka' => $this->faker->word,
			],
			'code'      => fake()->name(),
			'confirmed' => Str::random(10),
			'recovered' => Str::random(10),
			'critical'  => Str::random(10),
			'deaths'    => Str::random(10),
		];
	}
}
