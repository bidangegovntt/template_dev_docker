<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProposalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
/*
        Schema::create('proposals', function (Blueprint $table) {
            $table->id();
            $table->integer('uid');
            $table->string('judul');
            $table->integer('created_at');
            $table->string('is_status');
            $table->integer('uniq_id');
            $table->string('kelompok');
            $table->string('pernah_finalis99');
            $table->string('tahun_finalis99');
            $table->string('judul_finalis99');
            $table->string('link_youtube');
            $table->integer('cat_id');
            $table->integer('sdgs_id');
            $table->string('unggah_pernyt_implementasi');
            $table->string('unggah_pernyt_identitas');
            $table->string('unggah_pernyt_replikasi');
            $table->string('form_spbe');
            $table->text('ringkasan');
            $table->text('latar_belakang');
            $table->text('kebaharuan');
            $table->text('signifikansi');
            $table->text('adaptabilitas_1');
            $table->text('adaptabilitas_2');
            $table->text('sumberdaya');
            $table->text('keberlanjutan');
            $table->timestamps();
        });
*/
        Schema::create('proposals', function (Blueprint $table) {
            $table->id();
            $table->text('judul_proposal');
            $table->string('tanggal_mulai');
            $table->string('kelompok')->nullable();
            $table->string('pernah_finalis99')->nullable();
            $table->integer('tahun_finalis99')->nullable();
            $table->string('judul_finalis99')->nullable();
            $table->string('link_youtube')->nullable();
            $table->unsignedBigInteger('id_kategori')->nullable()->foreign()->references('id')->on('kategories');
            $table->unsignedBigInteger('id_sdgs')->nullable()->foreign()->references('id')->on('sdgs');
			$table->text('sdgs')->nullable();
            $table->text('up_implementasi')->nullable();
            $table->text('up_identitas')->nullable();
            $table->text('up_replikasi')->nullable();
            $table->string('spbe')->nullable();
            $table->text('ringkasan')->nullable();
            $table->text('u_ringkasan')->nullable();
            $table->text('latar_belakang')->nullable();
            $table->text('u_latar_belakang')->nullable();
            $table->text('kebaharuan')->nullable();
            $table->text('u_kebaharuan')->nullable();
            $table->text('implementasi_inovasi')->nullable();
            $table->text('u_implementasi_inovasi')->nullable();
            $table->text('signifikansi')->nullable();
            $table->text('u_signifikansi')->nullable();
            $table->text('adaptabilitas_1')->nullable();
            $table->text('u_adaptabilitas_1')->nullable();
            $table->text('adaptabilitas_2')->nullable();
            $table->text('u_adaptabilitas_2')->nullable();
            $table->text('sumber_daya')->nullable();
            $table->text('u_sumber_daya')->nullable();
            $table->text('keberlanjutan')->nullable();
            $table->text('u_keberlanjutan')->nullable();
            $table->text('path_up_implementasi')->nullable();
			$table->text('path_up_identitas')->nullable();
			$table->text('path_up_replikasi')->nullable();
			$table->text('path_u_ringkasan')->nullable();
			$table->text('path_u_latar_belakang')->nullable();
			$table->text('path_u_kebaharuan')->nullable();
			$table->text('path_u_implementasi_inovasi')->nullable();
			$table->text('path_u_signifikansi')->nullable();
			$table->text('path_u_adaptabilitas_1')->nullable();
			$table->text('path_u_adaptabilitas_2')->nullable();
			$table->text('path_u_sumber_daya')->nullable();
			$table->text('path_u_keberlanjutan')->nullable();
            $table->timestamps();
            $table->unsignedBigInteger('created_by')->nullable()
                ->foreign()->references('id')->on('users');
            $table->unsignedBigInteger('updated_by')->nullable()
                ->foreign()->references('id')->on('users');
            $table->softDeletes();
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('proposals');
    }
}
