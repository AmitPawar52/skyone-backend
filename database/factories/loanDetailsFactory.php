<?php

use Faker\Generator as Faker;
use App\loanDetail;
use Carbon\Carbon;

$factory->define(loanDetail::class, function (Faker $faker) {
    return [
        'loanType' => $faker->name,
        'whatIsLType' => $faker->paragraph,
        'whyChooseTitle' => $faker->paragraph,
        'whyChoosePoints' => $faker->sentences($nb = 6, $asText = true),
        'whyChooseFooter' => $faker->paragraph,
        'ptcTitle' => $faker->paragraph,
        'ptcPoints' => $faker->sentences($nb = 6, $asText = true),
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(),
    ];
});
