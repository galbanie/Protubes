<?php

use Illuminate\Database\Migrations\Migration;

class CreateFichier extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('fichier',function($table){
			$table->increments('id');
			$table->string('mime');
			$table->binary('data');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('fichier');
	}

}