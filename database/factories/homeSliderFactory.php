<?php

use App\home\homeSlider;
use Faker\Generator as Faker;
use Carbon\Carbon;

$factory->define(homeSlider::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence,
        'description' => $faker->sentence,
        'imagePath' => $faker->imageUrl,
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(), 
    ];
});
 