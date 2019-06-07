<?php

use Illuminate\Database\Seeder;

class RoomTutorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\kindergestion\Room_Tutor::class, 20)->create();
    }
}
