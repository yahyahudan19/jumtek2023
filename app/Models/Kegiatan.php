<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kegiatan extends Model
{
    use HasFactory;

    protected $table = 'kegiatans';
    protected $primaryKey = 'id_kegiatan';
    protected $fillable = ['nama_kegiatan','jenis_kegiatan','waktu_kegiatan','lokasi_kegiatan','detail_kegiatan'];

}
