<?php

namespace Database\Seeders;

use App\Models\Training;
use Illuminate\Database\Seeder;
use Faker\Factory as FakerFactory;

class TrainingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = FakerFactory::create();

        for ($i = 1; $i <= 7; $i++) {
            $training = new Training();

            $training->training_date = date('Y-m-d');
            $training->training_by = $faker->name();
            $training->title = $faker->domainWord();
            $training->content = '<p>' . implode('</p><p>', $faker->paragraphs(10)) . '</p>';

            $training->save();
        }
    }
}
