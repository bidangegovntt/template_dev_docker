<?php

namespace Database\Seeders;

use App\Models\FieldTrip;
use Illuminate\Database\Seeder;
use Faker\Factory as FakerFactory;

class FieldTripSeeder extends Seeder
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
            $field_trip = new FieldTrip();

            $field_trip->visit_date = date('Y-m-d');
            $field_trip->title = $faker->domainWord();
            $field_trip->visitor_name = $faker->name();
            $field_trip->content = '<p>' . implode('</p><p>', $faker->paragraphs(10)) . '</p>';;
            $field_trip->innovation_id = '1';

            $field_trip->save();
        }
    }
}
