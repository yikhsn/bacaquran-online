<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAyatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ayats', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('nomor_surat')->unsigned();
            $table->integer('nomor_ayat');
            $table->integer('nomor_juz')->unsigned();
            $table->longText('teks_arab');
            $table->longText('teks_latin');
            $table->binary('suara');
            $table->longText('terjemahan_idn');
            $table->longText('terjemahan_eng');
            $table->timestamps();
        });

        Schema::table('ayats', function (Blueprint $table) {
            $table->foreign('nomor_surat')->references('nomor_surat')->on('surats');
            $table->foreign('nomor_juz')->references('nomor_juz')->on('juz');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ayats');
    }
}
