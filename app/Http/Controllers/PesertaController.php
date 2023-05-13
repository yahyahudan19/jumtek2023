<?php

namespace App\Http\Controllers;

use App\Models\Kegiatan;
use App\Models\Kegiatan_Peserta;
use App\Models\Peserta;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class PesertaController extends Controller
{
    // Update Peserta
    public function updatePeserta(Request $request){
        
        $data_peserta = Peserta::where('mis_peserta',$request->mis_peserta)->get()->first();
        
        if($request->hasFile('file_kta')){
            // dd($request->all());
            
            $request->validate([
                'file_kta' => 'required|max:2048|mimes:png,jpg,jpg,jpeg'
            ]);

            // Delete File KTA
            $file_kta = $data_peserta->kta_peserta;
            $file_path_kta = public_path('file_kta/' . $file_kta);
            unlink($file_path_kta);

            //Move File KTA 
            $request->file('file_kta')->move('file_kta/',$request->file('file_kta')->getClientOriginalName());
            
            $data_peserta->update([
                "nama_peserta" => $request->nama_peserta,
                "unit_id" => $request->unit_id,
                "alamat_peserta" => $request->alamat_peserta,
                "kta_peserta" => $request->file('file_kta')->getClientOriginalName()
            ]);
            
            Alert::success('Update Berhasil !','Peserta Berhasil Diupdate !');
            return redirect()->back();

        } else {
            // dd($request->all());
            $data_peserta->update($request->all());
        }

        Alert::success('Update Berhasil !','Peserta Berhasil Diupdate !');
        return redirect()->back();  
    }

    // GET Kegiatan View
    public function kegiatan()
    {
        $data_kegiatan = Kegiatan::where('tingkat_kegiatan',auth()->user()->peserta->unit->status_unit)->get()->all();

        $jumlah_kegiatan_ikut = Kegiatan_Peserta::where('peserta_id',auth()->user()->peserta->id_peserta)->count();
        $data_kegiatan_ikut = Kegiatan_Peserta::where('peserta_id',auth()->user()->peserta->id_peserta)->get()->all();
        return view('peserta.kegiatan',compact('data_kegiatan','jumlah_kegiatan_ikut','data_kegiatan_ikut'));
    }

    // POST Kegiatan Peserta
    public function tambahKegiatan(Request $request){

        $cek = Kegiatan_Peserta::where([
            'peserta_id' => auth()->user()->peserta->id_peserta,
            'kegiatan_id' => $request->id_kegiatan
        ])->get()->first();

        if ($cek == NULL) {

            $kegiatan_peserta = Kegiatan_Peserta::create([
                'peserta_id' => auth()->user()->peserta->id_peserta,
                'kegiatan_id' => $request->id_kegiatan
            ]);

            Alert::success('Yeay Berhasil !','Kegiatan Berhasil Ditambahkan !');
            return redirect()->back();  
        } else {
            Alert::warning('Gagal Ditambahkan !','Kegiatan Sudah Kamu Ikuti !');
            return redirect()->back();  
        }
        
    }
}
