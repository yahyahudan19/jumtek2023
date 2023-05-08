<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\Peserta;
use App\Models\User;
use App\Models\Unit;
use Illuminate\Support\Facades\Storage;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class PanitiaController extends Controller
{
    // View Login Page =============================================================
    public function index()
    {   
        $jumlah_peserta = Peserta::all()->count();
        $jumlah_unit = Unit::all()->count();
        $jumlah_ksr = Unit::where(['status_unit' => 'KSR'])->count();
        $jumlah_pmr = Unit::where(['status_unit' => 'PMR'])->count();

        $data_peserta = Peserta::where('user_id', auth()->user()->id)->first();
        return view('panitia.index',compact(['data_peserta','jumlah_peserta','jumlah_unit','jumlah_ksr','jumlah_pmr']));
    }
    
    // Peserta page ================================================================
    public function peserta()
    {
        $jumlah_peserta = Peserta::all()->count();
        $data_peserta = Peserta::all();
        $jumlah_unit = Unit::all()->count();
        return view('panitia.peserta.index',compact(['data_peserta','jumlah_peserta','jumlah_unit']));
    }
    // Hapus Peserta //
    public function hapusPeserta($id_peserta){
        $data_peserta = Peserta::where('id_peserta',$id_peserta)->get()->first();
        $data_user = User::where('id',$data_peserta->user_id)->get()->first();

        // Delete File KTA
        $file_kta = $data_peserta->kta_peserta;
        $file_path_kta = public_path('file_kta/' . $file_kta);
        unlink($file_path_kta);
        // Delete File QR Code
        $file_qr = $data_peserta->qrcode_peserta;
        $file_path_qr = public_path('storage/' . $file_qr);
        unlink($file_path_qr);

        $data_peserta->delete($data_peserta);
        $data_user->delete($data_user);
        
        Alert::success('Yeay Berhasil !', 'Peserta Berhasil dihapus !');
        return redirect()->back();
    }
    // Update Validasi Peserta
    public function validasiPeserta($id_peserta){
        
        $peserta = Peserta::find($id_peserta);

        $peserta->update([
            "status_peserta" => "Aktif"
        ]);
        Alert::success('Berhasil !','Peserta Berhasil Divalidasi !');
        return redirect()->back();
    }

    // Update Validasi Peserta
    public function unvalidasiPeserta($id_peserta){
        
        $peserta = Peserta::find($id_peserta);

        $peserta->update([
            "status_peserta" => "Tidak Aktif"
        ]);
        Alert::success('Berhasil !','Peserta Tidak Divalidasi !');
        return redirect()->back();
    }
    // Detail Peserta Page
    public function detailPeserta($id_peserta){
        $data_unit = Unit::all()->all();
        $peserta = Peserta::where('id_peserta',$id_peserta)->get()->first();

        return view('panitia.peserta.edit',compact('peserta','data_unit'));
    }

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
            dd($request->all());
            $data_peserta->update($request->all());
        }

        Alert::success('Update Berhasil !','Peserta Berhasil Diupdate !');
        return redirect()->back();  
    }

    // Lomba page ==================================================================
    public function lomba()
    {
        return view('panitia.lomba');
    }

    // Unit page ==================================================================
    public function unit()
    {
        $data_unit_ksr = Unit::where(['status_unit' =>'KSR'])->get()->all();
        $data_unit_pmr = Unit::where(['status_unit' =>'PMR'])->get()->all();


        $jumlah_unit = Unit::all()->count();
        $jumlah_ksr = Unit::where([
            'status_unit' => 'KSR'
        ])->count();
        $jumlah_pmr = Unit::where([
            'status_unit' => 'PMR'
        ])->count();
        $jumlah_peserta = Peserta::all()->count();

        return view('panitia.unit',compact('data_unit_ksr','data_unit_pmr','jumlah_unit','jumlah_peserta','jumlah_ksr','jumlah_pmr'));
    }
    // Tambah Unit 
    public function tambahUnit(Request $request){
        $cek_unit = Unit::where([
            ['nama_unit','=', $request->nama_unit],
            ['status_unit','=', $request->status_unit]
        ])->first();  
        
        if($cek_unit){
            Alert::error('Tambah Unit Gagal!','Unit Sudah Terdaftar !');
            return redirect()->back();
        }else{
            $unit = Unit::create([
                "nama_unit" => $request->nama_unit,
                "status_unit" => $request->status_unit,
            ]);

            if($unit){
                Alert::success('Register Berhasil','Silahkan Login Ya ');
                return redirect()->back();
            }else{
                Alert::error('Tambah Unit Gagal!','Silahkan Lengkapi Terlebih Dahulu !');
                return redirect()->back();
            }
        }
    }

    // Delete Unit
    public function hapusUnit($id_unit){
        $data_unit = Unit::where('id_unit',$id_unit)->get()->first();

        $data_unit->delete($data_unit);

        if($data_unit){
            Alert::success('Yeay Berhasil !', 'Unit Berhasil dihapus !');
            return redirect()->back();
        }else{
            Alert::error('Unit Gagal Dihapus', 'Sepertinya Masih ada yang nyantol !');
            return redirect()->back();
        }
    }

    // Profile page ================================================================
    public function profile()
    {
        return view('panitia.profile');
    }
    
}
