<?php

namespace Database\Factories;

use App\Models\Academy;
use App\Models\User;
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
    #[ArrayShape(['user_id' => "\Illuminate\Support\HigherOrderCollectionProxy|mixed", 'name' => "string", 'logo' => "string", 'country' => "array|int|string", 'state' => "string", 'city' => "string", 'description' => "string", 'motto' => "string", 'date_of_establishment' => "string", 'verified' => "bool"])] public function definition(): array
    {
        return [
            'user_id' => User::all()->random()->id,
            'name' => $this->faker->company,
            'website' => 'https://'.$this->faker->domainWord.'.com',
            'logo' => "https://picsum.photos/id/".$this->faker->randomNumber(nbDigits: 2)."/1280/720",
            'country' => array_rand(Constants::countries, num: 1),
            'state' => $this->faker->state,
            'city' => $this->faker->city,
            'description' => $this->faker->paragraphs($this->faker->randomNumber(nbDigits: 3), true),
            'motto' => $this->faker->sentence,
            'date_of_establishment' => $this->faker->date(),
            'verified' => $this->faker->boolean,
        ];
    }
}
