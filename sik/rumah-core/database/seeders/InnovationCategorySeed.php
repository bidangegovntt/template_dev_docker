<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\InnovationCategory;

class InnovationCategorySeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $statuses = [
            'Pendidikan',
            'Ekonomi dan Budaya',
            'Sosial Kemasyarakatan',
        ];

        foreach($statuses as $status)
        {
            $record = new InnovationCategory;
            $record->name = $status;
            $record->save();
        }
    }
}
