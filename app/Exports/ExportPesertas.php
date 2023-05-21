<?php

namespace App\Exports;

use App\Models\Peserta;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ExportPesertas implements FromCollection,WithMapping, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Peserta::all();
        
    }
    public function map($data_peserta): array
    {
        return [
            $data_peserta->nama_peserta,
            $data_peserta->username_peserta,
            $data_peserta->unit->nama_unit,    
            $data_peserta->username_peserta,
            $data_peserta->user->email,
            $data_peserta->pwdmdl_peserta,    
            $data_peserta->alamat_peserta,    
            $data_peserta->jenisk_peserta,    
            $data_peserta->unit->nama_unit,    
        ];
    }
    public function headings(): array
    {
        return [
            'Fullname',
            'First Name',
            'Last Name',
            'Username',
            'Email',
            'Password Moodle',
            'Alamat',
            'Jenis Kelamin',
            'Kontingen',
        ];
    }
}
