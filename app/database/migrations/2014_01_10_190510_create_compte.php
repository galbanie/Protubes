<?php

use Illuminate\Database\Migrations\Migration;

class CreateCompte extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('compte',function($table){
			$table->increments('id');
			$table->boolean('actif')->default(false);
			$table->boolean('remember')->default(false)->nullable();
			$table->boolean('newsletter')->default(false)->nullable();
			$table->enum('lang', array('fr', 'en'))->default('fr')->nullable();
			$table->enum('confidentialite', array('public', 'private'))->default('public')->nullable();
			$table->boolean('visibilite')->default(true)->nullable();
			$table->integer('membre_id')->unsigned();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('compte');
	}

}