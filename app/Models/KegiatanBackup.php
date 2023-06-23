<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KegiatanBackup extends Model
{
    use HasFactory;

    protected $table = 'kegiatan_backup';
    protected $primaryKey = 'id_kegiatan_backup';
    protected $fillable = ['nama_peserta_backup','kontingen_peserta_backup','kegiatan_peserta_backup'];
}
