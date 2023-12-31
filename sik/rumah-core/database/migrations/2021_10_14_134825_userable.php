<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Userable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function(Blueprint $table) {
            $table->integer('userable_id')->nullable()->after('remember_token');
            $table->string('userable_type')->nullable()->after('userable_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function(Blueprint $table) {
            $table->dropColumn('userable_id');
            $table->dropColumn('userable_type');
        });
    }
}
