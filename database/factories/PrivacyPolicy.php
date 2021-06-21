<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\PrivacyPolicy;
use Faker\Generator as Faker;

$factory->define(PrivacyPolicy::class, function (Faker $faker) {
    return [
        //
        'header'=>$faker->word,
        'body'=>$faker->paragraph,
    ];
});
