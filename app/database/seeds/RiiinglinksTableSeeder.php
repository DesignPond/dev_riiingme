<?php

// Composer: "fzaninotto/faker": "v1.4.0"
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class RiiinglinksTableSeeder extends Seeder {

	public function run()
	{

        App\Link\Entities\Riiinglink::create([
            'host_id'    => 1,
            'invited_id' => 2,
        ]);

        App\Link\Entities\Riiinglink::create([
            'host_id'    => 1,
            'invited_id' => 3,
        ]);

        App\Link\Entities\Riiinglink::create([
            'host_id'    => 1,
            'invited_id' => 4,
        ]);

	}

}
