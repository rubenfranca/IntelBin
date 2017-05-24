<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRecolhaTable extends Migration {

	public function up()
	{
		Schema::create('recolha', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->date('data');
			$table->string('hora');
			$table->boolean('estado');
			$table->integer('user_id')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('recolha');
	}
}