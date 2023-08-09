<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\AttachmentType;

class AttachmentTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $attachmentTypes = [
            'Profil Inovasi',
            'Buku Panduan Inovasi',
            'Regulasi',
            'Dokumen Lain',
        ];

        foreach($attachmentTypes as $type)
        {
            $attachmentType = AttachmentType::make();
            $attachmentType->name = $type;
            $attachmentType->save();
        }
    }
}
