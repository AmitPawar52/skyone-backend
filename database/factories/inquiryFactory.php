<?php

use Faker\Generator as Faker;
use Carbon\Carbon;

$factory->define(App\Inquiry::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'mobileNo' => $faker->phoneNumber,
        'company' => $faker->company,
        'salary' => $faker->randomNumber,
        'requirement' => $faker->randomNumber,
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(),       
    ];
});
