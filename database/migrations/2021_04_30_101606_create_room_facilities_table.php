<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoomFacilitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('room_facilities', function (Blueprint $table) {
            $table->id();
            $table->string('room_type');
            $table->string('bathroom');
            $table->string('toilet');
            $table->integer('single_bed');
            $table->integer('double_bed');
            $table->integer('no_of_bed');
            $table->string('tv');
            $table->string('wifi');
            $table->string('geyser');
            $table->string('ac');
            $table->integer('lodge_id');
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
        Schema::dropIfExists('room_facilities');
    }
}
