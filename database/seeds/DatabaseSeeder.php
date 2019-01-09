<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $faker = Faker\Factory:: create();
        $limit = 20;
        for($i = 0; $i < $limit; $i++){
            DB::table('inquiries') -> insert ([
                'name' => $faker->name,
                'email' => $faker->unique()->email,
                'mobileNo' => $faker->phoneNumber,
                'company' => $faker->company,
                'salary' => $faker->randomNumber,
                'requirement' => $faker->randomNumber,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]);
        }
    }
}
