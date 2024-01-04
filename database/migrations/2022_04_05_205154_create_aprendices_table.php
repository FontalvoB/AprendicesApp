<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aprendices', function (Blueprint $table) {
            $table->bigIncrements('id_aprendiz');
            $table->string('nombres');
            $table->string('apellidos');
            $table->string('email');
            $table->bigInteger('celular_1');
            $table->bigInteger('celular_2');
            $table->bigInteger('ficha_id')->unsigned();
            $table->string('foto')->nullable();
            $table->string('observacion')->nullable();
            $table->string('calificaciones')->nullable();
            
            $table->foreign('ficha_id')->references('id_ficha')->on('fichas')->onDelete("cascade")->onUpdate("cascade");


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
        Schema::dropIfExists('aprendices');
    }
};
