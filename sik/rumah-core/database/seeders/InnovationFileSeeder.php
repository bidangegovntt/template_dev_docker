<?php

namespace Database\Seeders;

use App\Models\InnovationFile;
use Illuminate\Database\Seeder;

class InnovationFileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $files = [
            [
                'innovations_id' => '1',
                'file_name' => 'simapan.pdf',
                'file_name_hash' => 'innovation_files/simapan.pdf',
            ],
            [
                'innovations_id' => '2',
                'file_name' => 'laperde.pdf',
                'file_name_hash' => 'innovation_files/laperde.pdf',
            ],
            [
                'innovations_id' => '3',
                'file_name' => 'baiklo.pdf',
                'file_name_hash' => 'innovation_files/baiklo.pdf',
            ],
            [
                'innovations_id' => '4',
                'file_name' => 'double-track.pdf',
                'file_name_hash' => 'innovation_files/double-track.pdf',
            ],
            [
                'innovations_id' => '5',
                'file_name' => 'omkris.pdf',
                'file_name_hash' => 'innovation_files/omkris.pdf',
            ],
            [
                'innovations_id' => '6',
                'file_name' => 'mbcu.pdf',
                'file_name_hash' => 'innovation_files/mbcu.pdf',
            ],
        ];

        foreach ($files as $key => $file) {
            $inofile = new InnovationFile();

            $inofile->innovations_id = $file['innovations_id'];
            $inofile->file_name = $file['file_name'];
            $inofile->file_name_hash = $file['file_name_hash'];

            $inofile->save();
        }
    }
}
