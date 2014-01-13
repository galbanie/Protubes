<?php

use Illuminate\Database\Migrations\Migration;

class CreateAbonnement extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('abonnement',function($table){
			$table->integer('abonne_id')->unsigned();
			$table->integer('membre_id')->unsigned();
			$table->dateTime('created_at');
			$table->primary(array('abonne_id', 'membre_id'), 'abonne_membre');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('abonnement');
	}

}