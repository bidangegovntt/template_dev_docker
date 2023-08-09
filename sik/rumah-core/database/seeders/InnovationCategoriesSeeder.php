<?php

namespace Database\Seeders;

use App\Models\InnovationCategory;
use Illuminate\Database\Seeder;

class InnovationCategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            'Jatim Sejahtera',
            'Jatim Cedas dan Sehat',
            'Jatim Akses',
            'Jatim Berkah',
            'Jatim Agro',
            'Jatim Berdaya',
            'Jatim Amanah',
            'Jatim Harmoni',
        ];

        foreach ($categories as $key => $value) {
            $cat = new InnovationCategory();
            $cat->name = $value;

            $cat->save();
        }
    }
}
