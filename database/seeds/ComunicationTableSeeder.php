<?php

use Illuminate\Database\Seeder;
use kindergestion\Comunication;

class ComunicationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Comunication::class, 350)->create();
    }
}
