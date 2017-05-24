<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Eloquent\Model;

class CreateForeignKeys extends Migration {

	public function up()
	{
		Schema::table('users', function(Blueprint $table) {
			$table->foreign('tipo_id')->references('id')->on('tipo')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('edificio_has_user', function(Blueprint $table) {
			$table->foreign('user_id')->references('id')->on('users')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('edificio_has_user', function(Blueprint $table) {
			$table->foreign('edificio_id')->references('id')->on('edificio')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('piso', function(Blueprint $table) {
			$table->foreign('edificio_id')->references('id')->on('edificio')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('local', function(Blueprint $table) {
			$table->foreign('piso_id')->references('id')->on('piso')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('caixoteLixo', function(Blueprint $table) {
			$table->foreign('local_id')->references('id')->on('local')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('caixote_has_recolha', function(Blueprint $table) {
			$table->foreign('caixoteLixo_id')->references('id')->on('caixoteLixo')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('caixote_has_recolha', function(Blueprint $table) {
			$table->foreign('recolha_id')->references('id')->on('recolha')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('recolha', function(Blueprint $table) {
			$table->foreign('user_id')->references('id')->on('user')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
	}

	public function down()
	{
		Schema::table('user', function(Blueprint $table) {
			$table->dropForeign('user_tipo_id_foreign');
		});
		Schema::table('edificio_has_user', function(Blueprint $table) {
			$table->dropForeign('edificio_has_user_user_id_foreign');
		});
		Schema::table('edificio_has_user', function(Blueprint $table) {
			$table->dropForeign('edificio_has_user_edificio_id_foreign');
		});
		Schema::table('piso', function(Blueprint $table) {
			$table->dropForeign('piso_edificio_id_foreign');
		});
		Schema::table('local', function(Blueprint $table) {
			$table->dropForeign('local_piso_id_foreign');
		});
		Schema::table('caixoteLixo', function(Blueprint $table) {
			$table->dropForeign('caixoteLixo_local_id_foreign');
		});
		Schema::table('caixote_has_recolha', function(Blueprint $table) {
			$table->dropForeign('caixote_has_recolha_caixoteLixo_id_foreign');
		});
		Schema::table('caixote_has_recolha', function(Blueprint $table) {
			$table->dropForeign('caixote_has_recolha_recolha_id_foreign');
		});
		Schema::table('recolha', function(Blueprint $table) {
			$table->dropForeign('recolha_user_id_foreign');
		});
	}
}