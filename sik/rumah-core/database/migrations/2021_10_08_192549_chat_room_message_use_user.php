<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChatRoomMessageUseUser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('chat_room_messages', function (Blueprint $table) {
            $table->dropColumn('receiver_id');
            $table->dropColumn('sender_id');
            $table->integer('user_id')->unsigned();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('chat_room_messages', function (Blueprint $table) {
            $table->integer('receiver_id')->unsigned();
            $table->integer('sender_id')->unsigned();
            $table->dropColumn('user_id');
        });
    }
}
