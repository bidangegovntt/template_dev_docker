<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class NullableInnovation extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('innovations', function(Blueprint $table) {
            $table->string('achievement')->nullable()->change();
            $table->text('summary')->nullable()->change();
            $table->text('description')->nullable()->change();
            $table->string('year_start')->nullable()->change();
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
            $table->string('achievement')->nullable(false)->change();
            $table->text('summary')->nullable(false)->change();
            $table->text('description')->nullable(false)->change();
            $table->string('year_start')->nullable(false)->change();
        });
    }
}
