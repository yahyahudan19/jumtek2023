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

        $data_pembina = Peserta::where([
            'role_peserta' => "Pembina",
            'unit_id' => auth()->user()->peserta->unit_id,
        ])->get()->first();

        $data_pimpinan = Peserta::where([
            'role_peserta' => "Pimpinan",
            'unit_id' => auth()->user()->peserta->unit_id,
        ])->get()->first();

        return view('pembina.peserta',compact('data_peserta','jumlah_peserta','data_unit','data_pembina','data_pimpinan'));
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
    // Update SuratTugas
    public function updateSuratTugas(Request $request){
        
        $data_peserta = Peserta::where('id_peserta',$request->id_peserta)->get()->first();
        // dd($data_peserta);
        
        if($request->hasFile('surattugas_pembina')){
            // dd($request->all());
            
            $request->validate([
                'surattugas_pembina' => 'required|max:2048'
            ]);
            
            // Delete File Surat Tugas
            $file_surattugas = $data_peserta->surattugas_pembina;
            $file_path_surattugas = public_path('file_surattugas/' . $file_surattugas);
            unlink($file_path_surattugas);

            //Move File Peserta
            $request->file('surattugas_pembina')->move('file_surattugas/',$request->file('surattugas_pembina')->getClientOriginalName());
            
            $data_peserta->update([
                "surattugas_pembina" => $request->file('surattugas_pembina')->getClientOriginalName()
            ]);

            Alert::success('Upload Berhasil !','Surat Tugas Berhasil Diupload !');
            return redirect()->back();

        } else {
            // dd($request->all());
            Alert::success('Upload Gagal','Silahkan Cek Ketentuan Surat Tugas !');
            return redirect()->back();  
        }

   
    }
    //Print Peserta by Unit
    public function printUnit(){
        
        $data_unit = Unit::where('id_unit',auth()->user()->peserta->unit->id_unit)->get()->first();
        $data_peserta = Peserta::where('unit_id',auth()->user()->peserta->unit->id_unit)->get();
        $jumlah_peserta = Peserta::where('unit_id',auth()->user()->peserta->unit->id_unit)->count();

        $data_pembina = Peserta::where([
            'unit_id' => auth()->user()->peserta->unit->id_unit,
            'role_peserta' => 'Pembina'
        ])->get()->first();

        $data_pimpinan = Peserta::where([
            'unit_id' => auth()->user()->peserta->unit->id_unit,
            'role_peserta' => 'Pimpinan'
        ])->get()->first();

        return view('panitia.unit.print',compact('data_peserta','jumlah_peserta','data_unit','data_pembina','data_pimpinan'));
    }
    //Print Kegiatan by Unit
    public function printKegiatan(){

        $data_kegiatan_peserta = Kegiatan_Peserta::where('unit_id',auth()->user()->peserta->unit->id_unit)->orderBy('kegiatan_id')->get()->all();
        $jumlah_kegiatan_peserta = Kegiatan_Peserta::where('unit_id',auth()->user()->peserta->unit->id_unit)->get()->count();
        $data_unit = Unit::where('id_unit',auth()->user()->peserta->unit->id_unit)->get()->first();
        $jumlah_peserta = Peserta::where('unit_id',auth()->user()->peserta->unit->id_unit)->count();

        $data_pembina = Peserta::where([
            'unit_id' => auth()->user()->peserta->unit->id_unit,
            'role_peserta' => 'Pembina'
        ])->get()->first();

        $data_pimpinan = Peserta::where([
            'unit_id' => auth()->user()->peserta->unit->id_unit,
            'role_peserta' => 'Pimpinan'
        ])->get()->first();

        return view('pembina.kegiatan_print',compact('data_kegiatan_peserta','jumlah_kegiatan_peserta','jumlah_peserta','data_unit','data_pembina','data_pimpinan'));

    }
}
