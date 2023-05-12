<?php

namespace App\Http\Controllers;

use App\Models\Peserta;
use App\Models\Unit;
use Illuminate\Http\Request;

class PembinaController extends Controller
{
    public function peserta(){

        $data_unit = Unit::where('id_unit',auth()->user()->peserta->unit_id)->get()->first();
        $data_peserta = Peserta::where('unit_id',auth()->user()->peserta->unit_id)->get();
        $jumlah_peserta = Peserta::where('unit_id',auth()->user()->peserta->unit_id)->count();

        return view('pembina.peserta',compact('data_peserta','jumlah_peserta','data_unit'));
    }
}
