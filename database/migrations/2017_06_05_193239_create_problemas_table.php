<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProblemasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('problemas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('local_id');
            $table->string('descricao');
            $table->dateTime('data');
            $table->enum('estado',['1','2']);
            $table->integer('id_funcionario');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('problemas');
    }
}
