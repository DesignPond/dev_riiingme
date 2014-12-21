<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRiiinglinkLabelsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('riiinglink_labels', function(Blueprint $table)
		{
			$table->increments('id');
            $table->integer('user_label_id');
            $table->integer('riiinglink_id');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('riiinglink_labels');
	}

}
