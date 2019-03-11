<?php

use Faker\Generator as Faker;
use Carbon\Carbon;
$factory->define(App\home\clientspeaks::class, function (Faker $faker) {
    return [
        'clientName' => $faker->name,
        'clientPosition' => $faker->jobTitle,
        'clientSays' => $faker->text,
        'imgPath' => $faker->imageUrl,
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(), 
    ];
});
