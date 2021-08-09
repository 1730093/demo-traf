<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParticipantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('participantes', function (Blueprint $table) {
            $table->id('id_participantes');
            $table->unsignedBigInteger('user_id')->unsigned();            
            $table->foreign('user_id')->references('id')->on('users');
            
            $table->unsignedBigInteger('id_actividad')->unsigned();            
            $table->foreign('id_actividad')->references('id_actividad')->on('actividades');

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
        Schema::dropIfExists('participantes');
    }
}
