<?php

namespace Database\Factories;

use App\Models\Academy;
use App\Models\Photograph;
use Illuminate\Database\Eloquent\Factories\Factory;
use JetBrains\PhpStorm\ArrayShape;

class PhotographFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Photograph::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    #[ArrayShape(['academy_id' => "\Illuminate\Support\HigherOrderCollectionProxy|mixed", 'photograph' => "string"])] public function definition(): array
    {
        return [
            'academy_id' => Academy::all()->random()->id,
            'photograph' => $this->faker->imageUrl(),
        ];
    }
}
