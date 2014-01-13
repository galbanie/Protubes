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
			$table->foreign('image_id')->references('id')->on('image')->onDelete('cascade');;
		});

		Schema::table('compte',function($table){
			$table->foreign('membre_id')->references('id')->on('membre')->onDelete('cascade');;
		});

		Schema::table('image',function($table){
			$table->foreign('fichier_id')->references('id')->on('fichier')->onDelete('cascade');;
		});

		Schema::table('abonnement',function($table){
			$table->foreign('abonne_id')->references('id')->on('membre')->onDelete('cascade');;
			$table->foreign('membre_id')->references('id')->on('membre')->onDelete('cascade');;
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
		$table->dropForeign('compte_membre_id_foreign');
		$table->dropForeign('abonnement_abonne_id_foreign');
		$table->dropForeign('abonnement_membre_id_foreign');
	}

}