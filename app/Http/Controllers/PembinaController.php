<?php

namespace App\Http\Controllers;

use App\Models\Kegiatan;
use App\Models\Kegiatan_Peserta;
use App\Models\Peserta;
use App\Models\Unit;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class PembinaController extends Controller
{
    public function peserta(){

        $data_unit = Unit::where('id_unit',auth()->user()->peserta->unit_id)->get()->first();
        $data_peserta = Peserta::where('unit_id',auth()->user()->peserta->unit_id)->get();
        $jumlah_peserta = Peserta::where('unit_id',auth()->user()->peserta->unit_id)->count();

        return view('pembina.peserta',compact('data_peserta','jumlah_peserta','data_unit'));
    }
    public function kegiatan(){
        $data_kegiatan = Kegiatan::where('tingkat_kegiatan',auth()->user()->peserta->unit->status_unit)->get()->all();
        $jumlah_kegiatan = Kegiatan::where('tingkat_kegiatan',auth()->user()->peserta->unit->status_unit)->count();

        return view('pembina.kegiatan',compact('data_kegiatan','jumlah_kegiatan'));
    }
    public function detailKegiatan($id_kegiatan){
        $data_kegiatan = Kegiatan::where('id_kegiatan',$id_kegiatan)->get()->first();
        $data_peserta = Kegiatan_Peserta::where('kegiatan_id',$id_kegiatan)->get()->all();
        $jumlah_peserta = Kegiatan_Peserta::where('kegiatan_id',$id_kegiatan)->count();
        
        if($data_kegiatan){
            return view('pembina.detail',compact('data_kegiatan','data_peserta','jumlah_peserta'));
        }else {
            Alert::error('Kegiatan Tidak Ada', 'Data Kegiatan Tidak Ditemukan !');
            return redirect()->back();
        }

    }
}
