<?php

use Faker\Factory as Faker;

class LabelsTableSeeder extends Seeder {

	public function run()
	{
		DB::table('labels')->truncate();

		$info  = array(1,2,3,15);
		$prive = array(6,7,8,9,10,11,12,13,14);
		$prof  = array(3,4,5,7,8,9,10,11,12,14);

		$metas1 = array('','Cindy','Leschaud', 'cindy.leschaud@gmail.com',
			'DesignPond','Web developpeur','',
			'Ruelle de l\'hôtel de ville 3','2520','La Neuveville','Suisse',
			'032 751 38 07','078 690 00 23',
			'1982-10-01','http://wwww.desingpond.ch','cindy.jpg');

		$metas2 = array('','Cindy','Leschaud','cindy.leschaud@unine.ch',
			'Unine', 'Web developpeur','Faculté de droit',
			'Av. du 1er Mars 26','2000','Neuchâtel','Suisse',
			'032 718 21 30','078 690 00 23',
			'','http://wwww.unine.ch');

		$metas3 = array('','Coralie','Leschaud','coralie.leschaud@orange.ch',
			'Orange', 'ARC','Marc Leschaud',
			'La Voirde 19','2735','Bévilard','Suisse',
			'032 318 21 40','078 543 06 23',
			'1995-09-27','http://wwww.orange.ch','coralie.jpg');

		$metas4 = array('','Cyril','Leschaud','cyril.leschaud@bluewin.ch',
			'HNE', 'ASSC','',
			'Rue du test 234','2300','La Chaux-de-Fond','Suisse',
			'032 987 21 40','076 523 06 23',
			'1987-06-19','http://wwww.hne.ch','');

		$metas5 = array('','Céline','Leschaud','libelulle867@bluewin.ch',
			'', 'Vendeuse','',
			'Rue du collège 34','2735','Bévilard','Suisse',
			'032 492 21 20','079 345 06 23',
			'1984-05-20','','');

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

		foreach($info as $index)
		{
			Riiingme\Label\Entities\Label::create([
				'label'     => $metas4[$index],
				'user_id'   => 3,
				'type_id'   => $index,
				'groupe_id' => 1
			]);
		}

		foreach($prive as $index)
		{
			Riiingme\Label\Entities\Label::create([
				'label'     => $metas4[$index],
				'user_id'   => 3,
				'type_id'   => $index,
				'groupe_id' => 2
			]);
		}


		foreach($info as $index)
		{
			Riiingme\Label\Entities\Label::create([
				'label'     => $metas5[$index],
				'user_id'   => 4,
				'type_id'   => $index,
				'groupe_id' => 1
			]);
		}

		foreach($prive as $index)
		{
			Riiingme\Label\Entities\Label::create([
				'label'     => $metas5[$index],
				'user_id'   => 4,
				'type_id'   => $index,
				'groupe_id' => 2
			]);
		}

	}

}