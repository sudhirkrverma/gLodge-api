<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Lodge;
use Faker\Generator as Faker;

$factory->define(Lodge::class, function (Faker $faker) {
    return [
        //
        'lodge_name'=>$faker->word,
        'owner_name'=>$faker->name,
        'owner_contact'=>$faker->numberBetween(900000000,99999999),
        'receptionist_contact'=>$faker->numberBetween(900000000,99999999),
        'description'=>$faker->sentence,
        // 'lodge_img',
        // 'img1',
        // 'img2',
        // 'img3',
        'username'=>$faker->email,
        'password'=>$faker->password,
        'status'=>$faker->numberBetween(0,1),
        'address'=>$faker->address,
    ];
});
