<?php

namespace Database\Factories;

use App\Models\Academy;
use App\Models\AcademyTag;
use App\Models\Tag;
use Illuminate\Database\Eloquent\Factories\Factory;
use JetBrains\PhpStorm\ArrayShape;

class AcademyTagFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = AcademyTag::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    #[ArrayShape(['academy_id' => "\Illuminate\Support\HigherOrderCollectionProxy|mixed", 'tag_id' => "\Illuminate\Support\HigherOrderCollectionProxy|mixed"])] public function definition(): array
    {
        return [
            'academy_id' => Academy::all()->random()->id,
            'tag_id' => Tag::all()->random()->id,
        ];
    }
}
