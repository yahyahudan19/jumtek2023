<?php

namespace App\Http\Controllers;

use App\Models\Kegiatan;
use App\Models\Kegiatan_Peserta;
use App\Models\Peserta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class PesertaController extends Controller
{
    // Update Peserta
    public function updatePeserta(Request $request){
        
        $data_peserta = Peserta::where('id_peserta',auth()->user()->peserta->id_peserta)->get()->first();
        

        if($request->hasFile('foto_peserta')){
            
            $validator = Validator::make($request->all(), [
                'foto_peserta' => 'required|max:2048|mimes:png,jpg,jpg,jpeg',
            ]);
            
            if ($validator->fails()) {
                Alert::warning('Register Gagal','Pastikan Foto Sesuai dengan Ketentuan Ya !');
                return redirect()->back()->withInput();;
            }

            // Delete File Foto Peserta
            $foto_peserta = $data_peserta->foto_peserta;
            $file_path_foto = public_path('file_foto/' . $foto_peserta);
            unlink($file_path_foto);

            //Move File Foto Peserta 
            $extension = $request->file('foto_peserta')->getClientOriginalExtension();
            $nama_foto = 'foto-peserta-'.$request->nama_peserta.'.'. $extension;
            $request->file('foto_peserta')->move('file_foto/',$nama_foto);
            // $request->file('foto_peserta')->move('file_foto/',$request->file('foto_peserta')->getClientOriginalName());

             // Delete File QR Code
             $file_qr = $data_peserta->qrcode_peserta;
             $file_path_qr = public_path('storage/' . $file_qr);
             unlink($file_path_qr);

             //Generate QR
            $image = QrCode::format('png')
            ->size(400)->errorCorrection('H')
            ->generate($request->nama_peserta);
            $qrcode_peserta = '/qr-code/img/qrcode_peserta-' .$request->nama_peserta . '.png';
            Storage::disk('public')->put($qrcode_peserta, $image); 

            $data_peserta->update([
                "nama_peserta" => $request->nama_peserta,
                "alamat_peserta" => $request->alamat_peserta,
                "foto_peserta" => $nama_foto,
                "qrcode_peserta" => $qrcode_peserta
            ]);
            
            Alert::success('Update Berhasil !','Peserta Berhasil Diupdate !');
            return redirect()->back();

        } else {
             // Delete File QR Code
             $file_qr = $data_peserta->qrcode_peserta;
             $file_path_qr = public_path('storage/' . $file_qr);
             unlink($file_path_qr);

             //Generate QR
            $image = QrCode::format('png')
            ->size(400)->errorCorrection('H')
            ->generate($request->nama_peserta);
            $qrcode_peserta = '/qr-code/img/qrcode_peserta-' .$request->nama_peserta . '.png';
            Storage::disk('public')->put($qrcode_peserta, $image); 

            $data_peserta->update([
                "nama_peserta" => $request->nama_peserta,
                "alamat_peserta" => $request->alamat_peserta,
                "qrcode_peserta" => $qrcode_peserta
            ]);
            
            Alert::success('Update Berhasil !','Peserta Berhasil Diupdate !');
            return redirect()->back();
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
            // dd($request->all());
            $kegiatan_peserta = Kegiatan_Peserta::create([
                'peserta_id' => auth()->user()->peserta->id_peserta,
                'kegiatan_id' => $request->id_kegiatan,
                'unit_id' => auth()->user()->peserta->unit->id_unit
            ]);

            Alert::success('Yeay Berhasil !','Kegiatan Berhasil Ditambahkan !');
            return redirect()->back();  
        } else {
            Alert::warning('Gagal Ditambahkan !','Kegiatan Sudah Kamu Ikuti !');
            return redirect()->back();  
        }
        
    }
}
