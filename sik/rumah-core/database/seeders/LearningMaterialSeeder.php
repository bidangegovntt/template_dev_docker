<?php

namespace Database\Seeders;

use App\Models\LearningMaterial;
use Illuminate\Database\Seeder;

class LearningMaterialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $materials = [
            [
                'title' => 'Memahami Inovasi',
            ],
            [
                'title' => 'Regulasi Terkait'
            ],
            [
                'title' => 'Identifikasi dan Analisis Masalah'
            ],
            [
                'title' => 'Proposal Inovasi'
            ],
        ];

        foreach ($materials as $key => $value) {
            $learnmat = new LearningMaterial();

            $learnmat->title = $value['title'];
            $learnmat->content = '<p>Similique neque nam consequuntur ad non maxime aliquam quas. Quibusdam animi praesentium. Aliquam et laboriosam eius aut nostrum quidem aliquid dicta. Et eveniet enim. Qui velit est ea dolorem doloremque deleniti aperiam unde soluta. Est cum et quod quos aut ut et sit sunt. Voluptate porro consequatur assumenda perferendis dolore.</p><p>Sit repellat hic cupiditate hic ut nemo. Quis nihil sunt non reiciendis. Sequi in accusamus harum vel aspernatur. Excepturi numquam nihil cumque odio. Et voluptate cupiditate.</p>';

            $learnmat->save();
        }
    }
}
