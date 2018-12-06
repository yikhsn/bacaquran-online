<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSuratsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('surats', function (Blueprint $table) {
            $table->integer('nomor_surat')->primary();
            $table->string('nama_surat', 50);
            $table->string('nama_surat_arab', 50);
            $table->string('arti_nama', 100);
            $table->integer('jumlah_ayat', 11);
            $table->string('tempat_turun', 50);
            $table->integer('urutan_pewahyuan', 11);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('surats');
    }
}
