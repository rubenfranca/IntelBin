<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCaixoteHasRecolhaTable extends Migration {

	public function up()
	{
		Schema::create('caixote_has_recolha', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('caixoteLixo_id')->unsigned();
			$table->integer('recolha_id')->unsigned();
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('caixote_has_recolha');
	}
}