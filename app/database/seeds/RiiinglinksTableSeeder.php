<?php

// Composer: "fzaninotto/faker": "v1.4.0"
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class RiiinglinksTableSeeder extends Seeder {

	public function run()
	{

        Riiingme\Riiinglink\Entities\Riiinglink::create([
            'host_id'    => 1,
            'invited_id' => 2,
        ]);

        Riiingme\Riiinglink\Entities\Riiinglink::create([
            'host_id'    => 1,
            'invited_id' => 3,
        ]);

        Riiingme\Riiinglink\Entities\Riiinglink::create([
            'host_id'    => 1,
            'invited_id' => 4,
        ]);

        Riiingme\Riiinglink\Entities\Riiinglink::create([
            'host_id'    => 2,
            'invited_id' => 1,
        ]);

	}

}
