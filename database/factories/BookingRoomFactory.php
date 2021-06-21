<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\BookingRoom;
use Faker\Generator as Faker;

$factory->define(BookingRoom::class, function (Faker $faker) {
    return [
        //
        'order_id'=>$faker->numberBetween(1000000,9999999),
        'channel_id'=>'APP',
        'room_no'=>$faker->numberBetween(100,300),
        'room_type'=>$faker->word(),
        'checkin'=>$faker->date($format = 'Y-m-d', $max = 'now'),
        'checkout'=>$faker->date($format = 'Y-m-d', $max = 'now'),
        'amount'=>$faker->numberBetween(1000,2000),
        'mobile'=>$faker->numberBetween(90000000,99999999),
        'lodge_name'=>$faker->name,
        'lodge_address'=>$faker->address,
        'lodge_id'=>$faker->numberBetween(1,10),
        'booked_by'=>$faker->name,
        'username'=>$faker->email,
        'age'=>$faker->numberBetween(10,100),
        'gender'=>$faker->randomElement(['male','female']),
        'address'=>$faker->address,
        'payment_status'=>$faker->randomElement(['Pending','Approved']),

    ];
});
