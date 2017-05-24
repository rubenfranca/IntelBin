<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLocalTable extends Migration {

	public function up()
	{
		Schema::create('local', function(Blueprint $table) {
			$table->increments('id');
			$table->string('tipo');
			$table->string('nome');
			$table->integer('piso_id')->unsigned();
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('local');
	}
}