<?php

namespace Database\Factories;

use App\Models\Innovation;
use Illuminate\Database\Eloquent\Factories\Factory;

class InnovationFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Innovation::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence($nbWords = 6, $variableNbWords = true),
            'summary' => $this->faker->paragraph($nbSentences = 3, $variableNbSentences = true),
            'description' => $this->faker->paragraph($nbSentences = 3, $variableNbSentences = true),
            'address' => $this->faker->address(),
            'city_id' => rand(1, 5),
            'year_start' => rand('2010', date('Y')),
            'published_status' => rand(0, 1),
            'latitude' => '112.0092',
            'longitude' => '-6.0092',
        ];
    }
}
