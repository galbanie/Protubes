<?php

use Illuminate\Database\Migrations\Migration;

class CreateImage extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('image',function($table){
			$table->increments('id');
			$table->string('nom',70);
			$table->text('description');
			$table->integer('fichier_id')->unsigned();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('image');
	}

}