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
        Schema::create('kegiatan_pesertas', function (Blueprint $table) {
            $table->increments('id_kegiatan_peserta');
            $table->integer('peserta_id')->unsigned();
            $table->integer('kegiatan_id')->unsigned();
            $table->integer('unit_id')->unsigned();
            $table->foreign('peserta_id')->references('id_peserta')->on('pesertas');
            $table->foreign('kegiatan_id')->references('id_kegiatan')->on('kegiatans');
            $table->foreign('unit_id')->references('id_unit')->on('units');
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
        Schema::dropIfExists('kegiatan_pesertas');
    }
};
