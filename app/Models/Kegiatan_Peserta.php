<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kegiatan_Peserta extends Model
{
    use HasFactory;

    protected $table = 'kegiatan_pesertas';
    protected $primaryKey = 'id_kegiatan_peserta';
    protected $fillable = ['peserta_id','kegiatan_id'];

    public function kegiatan()
    {
        return $this->belongsTo(Kegiatan::class,'kegiatan_id');
    }
    public function peserta()
    {
        return $this->belongsTo(Peserta::class,'peserta_id');
    }
}
