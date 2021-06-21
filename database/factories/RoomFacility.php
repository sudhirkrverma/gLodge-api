<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\RoomFacility;
use Faker\Generator as Faker;

$factory->define(RoomFacility::class, function (Faker $faker) {
    return [
        //
        'room_type'=>$faker->word,
        'toilet'=>$faker->randomElement(['YES','NO']),
        'single_bed'=>$faker->numberBetween(1,3),
        'double_bed'=>$faker->numberBetween(1,2),
        'no_of_bed'=>$faker->numberBetween(1,5),
        'tv'=>$faker->randomElement(['YES','NO']),
        'wifi'=>$faker->randomElement(['YES','NO']),
        'geyser'=>$faker->randomElement(['YES','NO']),
        'ac'=>$faker->randomElement(['YES','NO']),
        'lodge_id'=>$faker->numberBetween(1,10),
    ];
});
