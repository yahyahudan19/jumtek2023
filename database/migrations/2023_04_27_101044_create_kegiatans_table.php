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
        Schema::create('kegiatans', function (Blueprint $table) {
            $table->increments('id_kegiatan');
            $table->string('nama_kegiatan');
            $table->enum('jenis_kegiatan',['Jumbara','Temu Karya']);
            $table->date('waktu_kegiatan');
            $table->string('lokasi_kegiatan');
            $table->text('detail_kegiatan');
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
        Schema::dropIfExists('kegiatans');
    }
};
