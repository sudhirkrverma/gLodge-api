<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingRoomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('booking_rooms', function (Blueprint $table) {
            $table->id();
            $table->string('order_id');
            $table->string('customer_id')->nullable();
            $table->string('industry_type_id')->nullable();
            $table->string('channel_id')->default('WEB');
            $table->integer('room_no');
            $table->string('room_type');
            $table->string('image');
            $table->date('checkin');
            $table->date('checkout');
            $table->integer('amount');
            $table->string('mobile');
            $table->string('lodge_name');
            $table->integer('lodge_id');
            $table->string('lodge_address');
            $table->string('booked_by');
            $table->string('username');
            $table->integer('age');
            $table->string('gender');
            $table->string('address');
            $table->integer('no_of_guest');
            $table->date('txn_date')->nullable();
            $table->string('gateway_name')->nullable();
            $table->string('resp_mesg')->nullable();
            $table->string('resp_code')->nullable();
            $table->string('bank_name')->nullable();
            $table->string('payment_mode')->nullable();
            $table->string('MID')->nullable();
            $table->string('txn_id')->nullable();
            $table->string('banktxnid')->nullable();
            $table->string('payment_status')->default('Pending');
            $table->string('checksum')->nullable();
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
        Schema::dropIfExists('booking_rooms');
    }
}
