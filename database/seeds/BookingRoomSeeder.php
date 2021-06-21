<?php

use Illuminate\Database\Seeder;

class BookingRoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(App\BookingRoom::class,5)->create();
    }
}
