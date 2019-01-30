<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
class ContactusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory:: create();
        $limit = 20;
        for($i = 0; $i < $limit; $i++){
            DB::table('contactuses') -> insert ([
                'name' => $faker->name,
                'email' => $faker->unique()->email,
                'mobileNo' => $faker->phoneNumber,
                'company' => $faker->company,
                'message' => $faker->text,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]);
        }
    }
}
