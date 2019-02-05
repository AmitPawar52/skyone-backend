<?php

use Faker\Generator as Faker;
use App\blog;
use Carbon\Carbon;
$factory->define(blog::class, function (Faker $faker) {
    // $dt = Carbon::parse(Carbon::now());
    // $dt = $dt->format('d-M-Y');
    return [
        'title' => $faker->name,
        'body' => serialize($faker->paragraphs),
        'date' => Carbon::parse(Carbon::now())->format('d-M-Y'),
        'imagePath' => $faker->imageUrl,
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(), 
    ];
});
