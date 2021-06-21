<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\RoomCategory;
use Faker\Generator as Faker;

$factory->define(RoomCategory::class, function (Faker $faker) {
    return [
        //
        'room_type'=>$faker->word,
        'lodge_id'=>$faker->numberBetween(1,10),
        'image'=>$faker->word,
        'status'=>$faker->numberBetween(0,1),
        'price'=>$faker->numberBetween(1000,2000),

    ];
});
