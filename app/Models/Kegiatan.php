<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kegiatan extends Model
{
    use HasFactory;

    protected $table = 'kegiatans';
    protected $primaryKey = 'id_kegiatan';
    protected $fillable = ['nama_kegiatan','jenis_kegiatan','tingkat_kegiatan','tanggal_kegiatan','waktu_kegiatan','detail_kegiatan','status_kegiatan'];

    public function kegiatan_peserta()
    {
        return $this->hasMany(Kegiatan_Peserta::class);
    }

}
