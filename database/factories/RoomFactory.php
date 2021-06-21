<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Room;
use Faker\Generator as Faker;

$factory->define(Room::class, function (Faker $faker) {
    return [
        //
        'room_no'=>$faker->numberBetween(100,300),
        'room_type'=>$faker->word,
       
        'room_status'=>$faker->numberBetween(0,1),
        'lodge_id'=>$faker->numberBetween(1,10),
    ];
});
