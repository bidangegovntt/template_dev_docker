<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class FixInnovationPublishedField extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('innovations', function(Blueprint $table) {
            $table->renameColumn('publised_status', 'published_status');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('innovations', function(Blueprint $table) {
            $table->renameColumn('published_status', 'publised_status');
        });
    }
}
