<?php

namespace Database\Seeders;

use Database\Factories\PhotographFactory;
use Illuminate\Database\Seeder;

class PhotographSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PhotographFactory::times(30)->create();
    }
}
