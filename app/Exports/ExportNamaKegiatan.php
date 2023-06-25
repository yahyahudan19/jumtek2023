<?php

namespace App\Exports;

use App\Models\Kegiatan;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class ExportNamaKegiatan implements FromCollection,WithMapping,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Kegiatan::all()->sortBy('jenis_kegiatan');
    }

    public function map($data_kegiatan): array 
    {
        return [
            $data_kegiatan->nama_kegiatan,
            $data_kegiatan->jenis_kegiatan
        ];
    }
    public function headings(): array
    {
        return [
            'Nama Kegiatan',
            'Jenis Kegiatan'
        ];
    }
}
