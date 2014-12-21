<?php

use Faker\Factory as Faker;

class LabelsTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		$metas1 = array('','Cindy','Leschaud','DesignPond','','Ruelle de l\'hôtel de ville','3','2520','La Neuveville','Suisse','032 751 38 07','078 690 00 23','01.10.1982','cindy.jpg');
		$metas2 = array('','Cindy','Leschaud','Unine, Faculté de droit','','Av. du 1er Mars','26','2000','Neuchâtel','Suisse','032 718 21 30','078 690 00 23','01.10.1982','cindy.jpg');
		$metas3 = array('','Coralie','Leschaud','Orange','Marc Leschaud','La Voirde','19','2735','Bévilard','Suisse','032 492 51 39','076 587 82 10','27.09.1995','coralie.jpg');

		foreach(range( 1, 13 ) as $index)
		{
			Riiingme\Label\Entities\Label::create([
				'label'     => $metas1[$index],
				'user_id'   => 1,
				'type_id'   => $index,
				'groupe_id' => 1
			]);
		}

		foreach(range( 1, 13 ) as $index)
		{
			Riiingme\Label\Entities\Label::create([
				'label'     => $metas2[$index],
				'user_id'   => 1,
				'type_id'   => $index,
				'groupe_id' => 2
			]);
		}

		foreach(range( 1, 13 ) as $index)
		{
			Riiingme\Label\Entities\Label::create([
				'label'      => $metas3[$index],
				'user_id'   => 2,
				'type_id'   => $index,
				'groupe_id' => 1
			]);
		}
	}

}