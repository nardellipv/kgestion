<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoomTutorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('room__tutors', function (Blueprint $table) {
            $table->integer('room_id')->unsigned();
            $table->integer('tutor_id')->unsigned();


            //relaciones

            $table->foreign('room_id')->references('id')->on('rooms');

            $table->foreign('tutor_id')->references('id')->on('tutors');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('room__tutors');
    }
}
