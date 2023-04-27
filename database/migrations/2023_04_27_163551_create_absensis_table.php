<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('absensis', function (Blueprint $table) {
            $table->increments('id_absensi');
            $table->integer('kegiatan_id')->unsigned();
            $table->integer('peserta_id')->unsigned();
            $table->foreign('kegiatan_id')->references('id_kegiatan')->on('kegiatans');
            $table->foreign('peserta_id')->references('id_peserta')->on('pesertas');
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
        Schema::dropIfExists('absensis');
    }
};
