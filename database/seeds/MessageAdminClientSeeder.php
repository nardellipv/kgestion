<?php

use Illuminate\Database\Seeder;

class MessageAdminClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\kindergestion\MessageAdminClient::class, 350)->create();
    }
}
