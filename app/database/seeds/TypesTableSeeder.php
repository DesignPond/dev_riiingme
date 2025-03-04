<?php

use Illuminate\Database\Seeder;

class TypesTableSeeder extends Seeder {

	public function run()
	{

        DB::table('types')->truncate();

        $types = array(
            array( 'titre' => 'Prénom'),
            array( 'titre' => 'Nom'),
            array( 'titre' => 'Email'),
            array( 'titre' => 'Entreprise'),
            array( 'titre' => 'Profession'),
            array( 'titre' => 'c/o'),
            array( 'titre' => 'Rue et Numéro'),
            array( 'titre' => 'NPA'),
            array( 'titre' => 'Ville'),
            array( 'titre' => 'Pays'),
            array( 'titre' => 'Téléphone fixe'),
            array( 'titre' => 'Téléphone portable'),
            array( 'titre' => 'Date de naissance'),
            array( 'titre' => 'Site web'),
            array( 'titre' => 'Photo')
        );

        // Uncomment the below to run the seeder
        DB::table('types')->insert($types);
	}

}
