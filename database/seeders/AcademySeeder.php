<?php

namespace Database\Seeders;

use Database\Factories\AcademyFactory;
use Illuminate\Database\Seeder;

class AcademySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AcademyFactory::times(50)->create();
    }
}
