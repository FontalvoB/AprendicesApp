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
        Schema::create('ficha_instructor', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('ficha_id');
            $table->unsignedBigInteger('instructor_id');

            $table->foreign('ficha_id')->references('id_ficha')->on('fichas')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('instructor_id')->references('id_instructor')->on('instructors')->onDelete('cascade')->onUpdate('cascade');

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
        Schema::dropIfExists('ficha_instructor');
    }
};
