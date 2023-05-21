<?php

namespace App\Exports;

use App\Models\User;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ExportUsers implements FromCollection,WithMapping, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return User::all();
    }
    public function map($data_user): array
    {
        return [
            $data_user->name,
            $data_user->email,
            $data_user->role,    
        ];
    }
    public function headings(): array
    {
        return [
            'Nama',
            'Email',
            'Role',
        ];
    }
}
