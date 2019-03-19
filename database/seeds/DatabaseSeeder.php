<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use App\loanDetail;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //$this->call(ContactusTableSeeder::class);
        //factory(App\Inquiry::class, 10)->create();
        //factory(App\faq::class, 20)->create();
        //factory(App\clientspeaks::class, 10)->create();
        //factory(App\homeSlider::class, 10)->create();
        //factory(App\blog::class, 10)->create();
        factory(loanDetail::class, 5)->create();
    }
}
