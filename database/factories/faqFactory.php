<?php

use Faker\Generator as Faker;
use Carbon\Carbon;

$factory->define(App\faq::class, function (Faker $faker) {
    return [
        'question'=> $faker->sentence,
        'answer'=> $faker->sentence,
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(),  
    ];
});
