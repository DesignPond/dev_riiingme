<?php

use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

        Riiingme\User\Entities\User::create([
            'email'    => 'cindy.leschaud@gmail.com',
            'password' => Hash::make('cindy2')
        ]);

        Riiingme\User\Entities\User::create([
            'email'    => 'coralie.95@hotmail.com',
            'password' => Hash::make('cindy2')
        ]);

        Riiingme\User\Entities\User::create([
            'email'    => 'celine.bensmida@gmail.com',
            'password' => Hash::make('cindy2')
        ]);

        Riiingme\User\Entities\User::create([
            'email'    => 'cyrilus1987@live.fr',
            'password' => Hash::make('cindy2')
        ]);

	}

}
