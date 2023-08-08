<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ChatRoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\ChatRoom::factory(2)->create();

        $chatRooms = \App\Models\ChatRoom::all();

        $chatRooms->each(function($room) {
            $room->addUser(\App\Models\User::factory(1)->create()->first());
            $room->addUser(\App\Models\User::factory(1)->create()->first());

            $room->save();
        });
    }
}
