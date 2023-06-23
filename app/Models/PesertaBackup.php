<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PesertaBackup extends Model
{
    use HasFactory;

    protected $table = 'peserta_backup';
    protected $primaryKey = 'id_peserta_backup';
    protected $fillable = ['nama_peserta_backup','kontingen_peserta_backup','[nourut_peserta_backup]'];
    
}
