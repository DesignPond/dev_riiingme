<?php

use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class MetasTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 13) as $index)
		{
			Riiingme\Meta\Entities\Meta::create([
				'riiinglink_id' => 1,
				'label_id'       => $index,
				'groupe_id'     => 1,
				'rang'          => $index
			]);
		}

		foreach(range(14, 26) as $index)
		{
			Riiingme\Meta\Entities\Meta::create([
				'riiinglink_id' => 1,
				'label_id'       => $index,
				'groupe_id'     => 2,
				'rang'          => $index
			]);
		}

		foreach(range(1, 13) as $index)
		{
			Riiingme\Meta\Entities\Meta::create([
				'riiinglink_id' => 2,
				'label_id'       => $index,
				'groupe_id'     => 1,
				'rang'          => $index
			]);
		}

		foreach(range(1, 13) as $index)
		{
			Riiingme\Meta\Entities\Meta::create([
				'riiinglink_id'  => 3,
				'label_id'        => $index,
			]);
		}
	}

}
