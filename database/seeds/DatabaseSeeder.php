<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Bid::class, 10)->create();
        factory(\App\Event::class, 10)->create();
    }
}
