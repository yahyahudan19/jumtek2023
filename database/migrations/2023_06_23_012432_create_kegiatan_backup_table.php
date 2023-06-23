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
        Schema::create('kegiatan_backup', function (Blueprint $table) {
            $table->increments('id_kegiatan_backup');
            $table->string('nama_peserta_backup');
            $table->string('kontingen_peserta_backup');
            $table->string('kegiatan_peserta_backup');
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
        Schema::dropIfExists('kegiatan_backup');
    }
};
