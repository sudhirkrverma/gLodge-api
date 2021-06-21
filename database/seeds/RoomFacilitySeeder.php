<?php

use Illuminate\Database\Seeder;

class RoomFacilitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(App\RoomFacility::class,5)->create();
    }
}
