<?php

use Illuminate\Database\Migrations\Migration;

class CreateMembre extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('membre',function($table){
			$table->increments('id');
			$table->string('nom',70);
			$table->string('prenom',140);
			$table->integer('image_id')->unsigned()->nullable();;
			$table->string('identifiant',140)->unique();
			$table->string('email')->unique();
			$table->string('password',140);
			$table->date('naissance');
			$table->dateTime('inscription');
			$table->string('pays',210)->nullable();
			$table->string('codePostale',21)->nullable();
			$table->string('telephone',210)->nullable();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('membre');
	}

}