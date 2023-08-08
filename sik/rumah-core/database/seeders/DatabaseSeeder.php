<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        $this->call([
            UserSeeder::class,
            CitySeeder::class,
            FieldTripSeeder::class,
            InnovationCategoriesSeeder::class,
            // InnovationAdminSeeder::class,
            // InnovationDoctorSeeder::class,
            InnovationFileSeeder::class,
            InnovationSeeder::class,
            // InnovatorSeeder::class,
            LearningMaterialSeeder::class,
            // ReplicationTopicSeeder::class,
            SustainabilityStatusSeeder::class,
            TrainingSeeder::class,
        ]);
    }
}
