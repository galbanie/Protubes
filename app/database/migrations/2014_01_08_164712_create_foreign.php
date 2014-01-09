<?php

use Illuminate\Database\Migrations\Migration;

class CreateForeign extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('membre',function($table){
			$table->foreign('image_id')->references('id')->on('image');
		});

		Schema::table('image',function($table){
			$table->foreign('fichier_id')->references('id')->on('fichier');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		$table->dropForeign('image_fichier_id_foreign');
		$table->dropForeign('membre_image_id_foreign');
	}

}