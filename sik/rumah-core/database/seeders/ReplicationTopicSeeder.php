<?php

namespace Database\Seeders;

use App\Models\ReplicationTopic;
use Illuminate\Database\Seeder;

class ReplicationTopicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 10; $i++) {
            $repTopic = new ReplicationTopic();

            $repTopic->sender_id = 5;
            $repTopic->innovation_id = 1;
            $repTopic->title = 'Topik ' . $i;
            $repTopic->content = 'Konten ' . $i;
            $repTopic->reply_count = 0;
            $repTopic->last_post_at = date('Y-m-d H:i:s');
            $repTopic->last_post_by = 5;

            $repTopic->save();
        }
    }
}
