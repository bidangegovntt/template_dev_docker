<?php

namespace Database\Seeders;

use App\Models\City;
use Illuminate\Database\Seeder;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cities = [
            'Gresik',
            'Surabaya',
            'Lamongan',
            'Sidoarjo',
            'Jember',
        ];

        foreach ($cities as $key => $value) {
            $city = new City();
            $city->name = $value;

            $city->save();
        }

        // City::factory(10)->create();
    }
}
