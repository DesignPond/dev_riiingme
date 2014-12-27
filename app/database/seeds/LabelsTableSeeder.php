<?php

use Faker\Factory as Faker;

class LabelsTableSeeder extends Seeder {

	public function run()
	{
		DB::table('labels')->truncate();

		$info  = array(1,2,3);
		$prive = array(6,7,8,9,10,11,12,13,14,15,16);
		$prof  = array(3,4,5,7,8,9,10,11,12,13,15);

		$metas1 = array('','Cindy','Leschaud', 'cindy.leschaud@gmail.com',
			'DesignPond','Web developpeur','',
			'Ruelle de l\'hôtel de ville','3','2520','La Neuveville','Suisse',
			'032 751 38 07','078 690 00 23',
			'1982-10-01','http://wwww.desingpond.ch','cindy.jpg');

		$metas2 = array('','Cindy','Leschaud','cindy.leschaud@unine.ch',
			'Unine', 'Web developpeur','Faculté de droit',
			'Av. du 1er Mars','26','2000','Neuchâtel','Suisse',
			'032 718 21 30','078 690 00 23',
			'1982-10-01','http://wwww.unine.ch','cindy.jpg');


		$metas3 = array('','Coralie','Leschaud','coralie.leschaud@orange.ch',
			'Orange', 'ARC','Marc Leschaud',
			'La Voirde','19','2735','Bévilard','Suisse',
			'032 318 21 40','078 543 06 23',
			'1995-09-27','http://wwww.orange.ch','coralie.jpg');

		foreach($info as $index)
		{
			Riiingme\Label\Entities\Label::create([
				'label'     => $metas1[$index],
				'user_id'   => 1,
				'type_id'   => $index,
				'groupe_id' => 1
			]);
		}

		foreach($prive as $index)
		{
			Riiingme\Label\Entities\Label::create([
				'label'     => $metas1[$index],
				'user_id'   => 1,
				'type_id'   => $index,
				'groupe_id' => 2
			]);
		}

		foreach($prof as $index)
		{
			Riiingme\Label\Entities\Label::create([
				'label'     => $metas2[$index],
				'user_id'   => 1,
				'type_id'   => $index,
				'groupe_id' => 3
			]);
		}

		foreach($info as $index)
		{
			Riiingme\Label\Entities\Label::create([
				'label'     => $metas3[$index],
				'user_id'   => 2,
				'type_id'   => $index,
				'groupe_id' => 1
			]);
		}

		foreach($prive as $index)
		{
			Riiingme\Label\Entities\Label::create([
				'label'     => $metas3[$index],
				'user_id'   => 2,
				'type_id'   => $index,
				'groupe_id' => 2
			]);
		}
	}

}