<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEdificioTable extends Migration {

	public function up()
	{
		Schema::create('edificio', function(Blueprint $table) {
			$table->increments('id');
			$table->string('numeroPisos');
			$table->integer('numeroSalas');
			$table->integer('numeroCorredores');
			$table->string('nome');
			$table->string('localidade');
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('edificio');
	}
}