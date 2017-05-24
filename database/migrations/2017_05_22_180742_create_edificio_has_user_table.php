<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEdificioHasUserTable extends Migration {

	public function up()
	{
		Schema::create('edificio_has_user', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->integer('user_id')->unsigned();
			$table->integer('edificio_id')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('edificio_has_user');
	}
}