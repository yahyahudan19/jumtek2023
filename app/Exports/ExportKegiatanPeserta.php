<?php

namespace App\Exports;

use App\Models\Kegiatan_Peserta;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ExportKegiatanPeserta implements FromCollection,WithMapping, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Kegiatan_Peserta::all()->sortBy('kegiatan_id');
    }
    public function map($data_kegiatan_peserta): array
    {
        return [
            $data_kegiatan_peserta->unit->nama_unit,
            $data_kegiatan_peserta->unit->status_units,
            $data_kegiatan_peserta->peserta->nama_peserta,
            $data_kegiatan_peserta->kegiatan->nama_kegiatan,      
        ];
    }
    public function headings(): array
    {
        return [
            'Kontingen',
            'Tingkatan',
            'Nama Peserta',
            'Lomba',
        ];
    }
}
