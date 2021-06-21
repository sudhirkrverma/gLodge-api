<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLodgesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lodges', function (Blueprint $table) {
            $table->id();
            $table->string('lodge_name');
            $table->string('owner_name');
            $table->string('owner_contact');
            $table->string('receptionist_contact');
            $table->string('description');
            $table->string('hotel_img')->nullable();
            $table->string('hotel_img1')->nullable();
            $table->string('hotel_img2')->nullable();
            $table->string('hotel_img3')->nullable();
            $table->string('username');
            $table->integer('status');
            $table->string('address');
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
        Schema::dropIfExists('lodges');
    }
}
