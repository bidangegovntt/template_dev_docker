<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class InnovationAllowNullable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('innovations', function(Blueprint $table) {
            $table->integer('innovator_id')->nullable()->change();
            $table->integer('innovation_admin_id')->nullable()->change();
            $table->integer('sustainability_status_id')->nullable()->change();
            $table->integer('city_id')->nullable()->change();
            $table->integer('category_id')->nullable()->change();
            $table->text('address')->nullable()->change();
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
            $table->integer('innovator_id')->nullable(false)->change();
            $table->integer('innovation_admin_id')->nullable(false)->change();
            $table->integer('sustainability_status_id')->nullable(false)->change();
            $table->integer('city_id')->nullable(false)->change();
            $table->integer('category_id')->nullable(false)->change();
            $table->text('address')->nullable(false)->change();
        });
    }
}
