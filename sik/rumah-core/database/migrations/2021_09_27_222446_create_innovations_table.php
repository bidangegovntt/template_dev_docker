<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInnovationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('innovations', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('photo')->nullable();
            $table->text('summary');
            $table->text('description');
            $table->text('achievement');
            $table->string('infographics')->nullable();
            $table->string('address')->nullable();
            $table->foreignId('city_id');
            $table->foreignId('innovator_id');
            $table->foreignId('innovation_doctor_id')->nullable();
            $table->foreignId('innovation_admin_id')->nullable(); // instansi pengaju inovasi
            $table->string('year_start', 4);
            $table->foreignId('sustainability_status_id');
            $table->foreignId('category_id');
            $table->string('publised_status', 20)->default('published');
            $table->decimal('latitude')->nullable();
            $table->decimal('longitude')->nullable();
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
        Schema::dropIfExists('innovations');
    }
}
