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
        Schema::create('pesertas', function (Blueprint $table) {
            $table->increments('id_peserta');
            $table->unsignedBigInteger('user_id');
            $table->string('nama_peserta');
            $table->text('alamat_peserta');
            $table->enum('jenisk_peserta', ['Laki-Laki', 'Perempuan']);
            $table->integer('unit_id')->unsigned();
            $table->string('mis_peserta')->unique();
            $table->string('kta_peserta');
            $table->enum('status_peserta', ['Aktif', 'Tidak Aktif']);
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('pesertas');
    }
};
