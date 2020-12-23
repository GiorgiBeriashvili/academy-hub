<?php

namespace Database\Factories;

use App\Models\Academy;
use App\Repositories\Constants;
use Illuminate\Database\Eloquent\Factories\Factory;
use JetBrains\PhpStorm\ArrayShape;

class AcademyFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Academy::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    #[ArrayShape(['name' => "string", 'logo' => "string", 'country' => "array|int|string", 'state' => "string", 'city' => "string", 'description' => "string", 'motto' => "string", 'date_of_establishment' => "string", 'verified' => "bool"])] public function definition(): array
    {
        return [
            'name' => $this->faker->company,
            'logo' => $this->faker->imageUrl(128, 128),
            'country' => array_rand(Constants::countries),
            'state' => $this->faker->state,
            'city' => $this->faker->city,
            'description' => $this->faker->text,
            'motto' => $this->faker->sentence,
            'date_of_establishment' => $this->faker->date(),
            'verified' => $this->faker->boolean,
        ];
    }
}
