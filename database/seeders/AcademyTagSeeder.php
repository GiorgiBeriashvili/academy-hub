<?php

namespace Database\Seeders;

use Database\Factories\AcademyTagFactory;
use Exception;
use Illuminate\Database\Seeder;

class AcademyTagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($index = 1, $times = 1; $index < 25; $index++) {
            try {
                AcademyTagFactory::times($times)->create();
            } catch (Exception $exception) {
                logger($exception);
            }
        }
    }
}
