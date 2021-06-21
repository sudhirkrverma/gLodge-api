<?php

use Illuminate\Database\Seeder;

class RoomCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(App\RoomCategory::class,5)->create();
       

    }
}
