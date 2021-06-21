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
        // $this->call(UserSeeder::class);
        $this->call(lodgeTableSeeder::class);
        $this->call(BookingRoomSeeder::class);
        $this->call(RoomTableSeeder::class);
        $this->call(RoomCategorySeeder::class);
        $this->call(RoomFacilitySeeder::class);
        $this->call(PrivacyPolicySeeder::class);
    }
}
