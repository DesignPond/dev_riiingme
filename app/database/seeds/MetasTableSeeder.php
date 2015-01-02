<?php

use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class MetasTableSeeder extends Seeder {

	public function run()
	{
		DB::table('metas')->truncate();

		$user_1 = Riiingme\Label\Entities\Label::where('user_id','=',1)->get();

		foreach($user_1 as $label)
		{
			Riiingme\Meta\Entities\Meta::create([
				'riiinglink_id' => 1,
				'label_id'      => $label->id
			]);
		}


		foreach($user_1 as $label)
		{
			Riiingme\Meta\Entities\Meta::create([
				'riiinglink_id' => 2,
				'label_id'      => $label->id
			]);
		}


		$user_2 = Riiingme\Label\Entities\Label::where('user_id','=',2)->get();

		foreach($user_2 as $label)
		{
			Riiingme\Meta\Entities\Meta::create([
				'riiinglink_id' => 4,
				'label_id'      => $label->id
			]);
		}

		$user_3 = Riiingme\Label\Entities\Label::where('user_id','=',3)->get();

		foreach($user_3 as $label)
		{
			Riiingme\Meta\Entities\Meta::create([
				'riiinglink_id' => 5,
				'label_id'      => $label->id
			]);
		}

	}

}
