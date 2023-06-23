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
        Schema::create('peserta_backup', function (Blueprint $table) {
            $table->increments('id_peserta_backup');
            $table->string('nama_peserta_backup');
            $table->string('kontingen_peserta_backup');
            $table->string('nourut_peserta_backup');
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
        Schema::dropIfExists('peserta_backup');
    }
};
