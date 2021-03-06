<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('apellido_pat');
            $table->string('apellido_mat');
            $table->string('fecha_nac');

            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
           
            $table->unsignedBigInteger('id_genero')->unsigned();            
            $table->foreign('id_genero')->references('id_genero')->on('generos');
            
            $table->unsignedBigInteger('id_rol')->unsigned();            
            $table->foreign('id_rol')->references('id_rol')->on('roles');

            
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
