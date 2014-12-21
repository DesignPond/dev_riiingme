<?php

use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class MetasTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		$prive = array(3,6,7,8,9,10,11,12,13,14,15,16);
		$prof  = array(3,4,5,7,8,9,10,11,12,13,15,1);

		foreach($prive as $index)
		{
			Riiingme\Meta\Entities\Meta::create([
				'riiinglink_id' => 1,
				'label_id'      => $index,
				'rang'          => $index
			]);
		}

		foreach($prof as $index)
		{
			Riiingme\Meta\Entities\Meta::create([
				'riiinglink_id' => 1,
				'label_id'      => $index,
				'rang'          => $index
			]);
		}

		foreach($prive as $index)
		{
			Riiingme\Meta\Entities\Meta::create([
				'riiinglink_id' => 2,
				'label_id'      => $index,
				'rang'          => $index
			]);
		}

		foreach(range(1, 2) as $index)
		{
			Riiingme\Meta\Entities\Meta::create([
				'riiinglink_id'  => 1,
				'label_id'       => $index,
			]);
			Riiingme\Meta\Entities\Meta::create([
				'riiinglink_id'  => 2,
				'label_id'       => $index,
			]);
			Riiingme\Meta\Entities\Meta::create([
				'riiinglink_id'  => 3,
				'label_id'       => $index,
			]);
		}
	}

}
