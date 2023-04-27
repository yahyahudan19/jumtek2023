<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
    use HasFactory;

    protected $table = 'units';
    protected $primaryKey = 'id_unit';
    protected $fillable = ['nama_unit','status_unit'];
    
    public function peserta()
    {
        return $this->hasMany(Peserta::class);
    }
}
