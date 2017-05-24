<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePisoTable extends Migration {

	public function up()
	{
		Schema::create('piso', function(Blueprint $table) {
			$table->increments('id');
			$table->string('nome');
			$table->integer('edificio_id')->unsigned();
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('piso');
	}
}