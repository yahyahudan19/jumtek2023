<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peserta extends Model
{
    use HasFactory;

    protected $table = 'pesertas';
    protected $primaryKey = 'id_peserta';
    protected $fillable = ['user_id','unit_id','nama_peserta','alamat_peserta','jenisk_peserta','role_peserta','unit_peserta','mis_peserta','foto_peserta','surattugas_pembina','qrcode_peserta','status_peserta'];

    public function user()
    {
        return $this->belongsTo(User::class,'user_id');
    }
    public function unit()
    {
        return $this->belongsTo(Unit::class,'unit_id');
    }
    public function absensi()
    {
        return $this->hasMany(Absensi::class);
    }
    public function kegiatan_peserta()
    {
        return $this->hasMany(Kegiatan_Peserta::class);
    }
    
}

