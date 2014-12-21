<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRiiinglinkMetasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('riiinglink_metas', function(Blueprint $table)
		{
			$table->increments('id');
            $table->bigInteger('riiinglink_id');
            $table->bigInteger('meta_id');
            $table->integer('groupe_id');
            $table->integer('rang');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('riiinglink_metas');
	}

}
