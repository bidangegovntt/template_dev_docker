<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReplicationTopicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('replication_topics', function (Blueprint $table) {
            $table->id();
            $table->foreignId('sender_id');
            $table->foreignId('innovation_id');
            $table->string('title');
            $table->text('content');
            $table->string('reply_count')->default(0);
            $table->timestamp('last_post_at')->nullable();
            $table->foreignId('last_post_by')->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->string('created_by')->nullable();
            $table->string('updated_by')->nullable();
            $table->string('deleted_by')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('replication_topics');
    }
}
