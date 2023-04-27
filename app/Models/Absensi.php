<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Absensi extends Model
{
    use HasFactory;

    protected $table = 'absensis';
    protected $primaryKey = 'id_absensi';
    protected $fillable = ['kegiatan_id','user_id','waktu_absensi','peserta_id'];

    public function kegiatan()
    {
        return $this->belongsTo(Kegiatan::class,'kegiatan_id');
    }

    public function peserta()
    {
        return $this->belongsTo(Peserta::class,'peserta_id');
    }
}
