<?php

namespace App\Exports;

use App\Models\Peserta;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class ExportUnitDaftar implements FromCollection,WithMapping,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
       Peserta::select('unit_id')->withCount('unit as jumlah_unit')->whereHas('Unit')->distinct()->get()->all();
    }
    public function map($daftar_unit): array 
    {
        return [
            $daftar_unit->nama_unit,
        ];
    }
    public function headings(): array 
    {
        return [
            'Nama Unit'
        ];
    }
}
