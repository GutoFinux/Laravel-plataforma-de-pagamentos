<?php

use App\Currency;
use Illuminate\Database\Seeder;

class CurrenciesPlatformsTableSeeder extends Seeder {
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run() {
		$currencies = [
			'usd',
			'eur',
			'gbp',
			'blr',
			'jpy',
		];
		foreach ($currencies as $currency) {
			Currency::create([
				'iso' => $currency,
			]);
		}

	}
}
