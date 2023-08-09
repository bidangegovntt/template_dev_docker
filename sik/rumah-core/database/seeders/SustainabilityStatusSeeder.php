<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\SustainabilityStatus;

class SustainabilityStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $statuses = [
            ['name'=>'Tidak Terkonfirmasi', 'is_replikasi' => '0'],
            ['name'=>'Berhenti', 'is_replikasi' => '0'],
            ['name'=>'Berlanjut Berkendala', 'is_replikasi' => '1'],
            ['name'=>'Berlanjut Lancar', 'is_replikasi' => '1'],
            ['name'=>'Berlanjut Berkembang', 'is_replikasi' => '1'],
            ['name'=>'Berlanjut Bereplikasi', 'is_replikasi' => '1'],
            ['name'=>'Bertransformasi', 'is_replikasi' => '1'],
        ];

        foreach($statuses as $status)
        {
            $record = new SustainabilityStatus;
            $record->name = $status['name'];
            $record->is_replikasi = $status['is_replikasi'];
            $record->save();
        }
    }
}
