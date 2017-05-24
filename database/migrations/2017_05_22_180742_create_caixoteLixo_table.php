<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCaixoteLixoTable extends Migration {

	public function up()
	{
		Schema::create('caixoteLixo', function(Blueprint $table) {
			$table->increments('id');
			$table->string('nome');
			$table->string('descricao');
			$table->integer('capacidade');
			$table->string('tipoLixo');
			$table->integer('local_id')->unsigned();
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('caixoteLixo');
	}
}