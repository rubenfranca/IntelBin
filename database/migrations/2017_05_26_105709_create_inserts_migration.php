<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInsertsMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
            DB::table('users')->insertGetId(
                array(
                    'name' => 'Administrador',
                    'email' => 'admin@admin.com',
                    'password' => bcrypt('123456'),
                    'data_nascimento' => '1994-07-21',
                    'tipo_id' => '2',
                )
            );
        
            DB::table('users')->insertGetId(
                    array(
                        'name' => 'Funcionaria',
                        'email' => 'funcionaria@funcionaria.com',
                        'password' => bcrypt('123456'),
                        'data_nascimento' => '1994-07-21',
                        'tipo_id' => '1',
                    )
                );
        
            DB::table('tipo')->insertGetId(
                        array(
                           'nome' => 'Funcionaria', 
                    )
                );
                
            DB::table('tipo')->insertGetId(
                    array(
                       'nome' => 'Administrador', 
                )
            );
        
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
