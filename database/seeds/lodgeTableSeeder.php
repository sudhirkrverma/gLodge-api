<?php

use Illuminate\Database\Seeder;

class lodgeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(App\Lodge::class,5)->create();
    }
}
