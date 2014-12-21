<?php

use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

        App\User\Entities\User::create([
            'email'    => 'cindy.leschaud@gmail.com',
            'username' => 'DesignPond',
            'password' => Hash::make('cindy2')
        ]);

        App\User\Entities\User::create([
            'email'    => 'coralie.95@hotmail.com',
            'username' => 'Coralie95',
            'password' => Hash::make($faker->word)
        ]);

        App\User\Entities\User::create([
            'email'    => 'celine.bensmida@gmail.com',
            'username' => 'Libellule876',
            'password' => Hash::make($faker->word)
        ]);

        App\User\Entities\User::create([
            'email'    => 'cyrilus1987@live.fr',
            'username' => 'cyrilus1987',
            'password' => Hash::make($faker->word)
        ]);

	}

}
