<?php

// Composer: "fzaninotto/faker": "v1.4.0"
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class RiiinglinkMetasTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 13) as $index)
		{
            App\Meta\Entities\Riiinglink_meta::create([
                'riiinglink_id' => 1,
                'meta_id'       => $index,
                'groupe_id'     => 1,
                'rang'          => $index
			]);
		}

        foreach(range(14, 26) as $index)
        {
            App\Meta\Entities\Riiinglink_meta::create([
                'riiinglink_id' => 1,
                'meta_id'       => $index,
                'groupe_id'     => 2,
                'rang'          => $index
            ]);
        }

        foreach(range(1, 13) as $index)
        {
            App\Meta\Entities\Riiinglink_meta::create([
                'riiinglink_id' => 2,
                'meta_id'       => $index,
                'groupe_id'     => 1,
                'rang'          => $index
            ]);
        }

        foreach(range(1, 13) as $index)
        {
            App\Meta\Entities\Riiinglink_meta::create([
                'riiinglink_id'  => 3,
                'meta_id'        => $index,
            ]);
        }
	}

}
