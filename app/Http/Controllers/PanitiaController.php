<?php

namespace App\Http\Controllers;

use App\Models\Kegiatan;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\Peserta;
use App\Models\User;
use App\Models\Unit;
use Illuminate\Database\QueryException;
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
        $jumlah_kegiatan = Kegiatan::all()->count();
        

        $data_kegiatan = Kegiatan::all();
        $data_kegiatan_ksr = Kegiatan::where(['tingkat_kegiatan' => 'KSR'])->get();
        $data_kegiatan_pmr = Kegiatan::where(['jenis_kegiatan' => 'Jumbara'])->get();

        $jumlah_kegiatan_ksr = Kegiatan::where(['tingkat_kegiatan' => 'KSR'])->count();
        $jumlah_kegiatan_pmr = Kegiatan::where(['jenis_kegiatan' => 'Jumbara'])->count();

        $data_peserta = Peserta::where('user_id', auth()->user()->id)->first();

        return view('panitia.index',compact([
            'data_peserta','jumlah_peserta','jumlah_unit','jumlah_ksr','jumlah_pmr','jumlah_kegiatan','data_kegiatan_ksr',
            'data_kegiatan_pmr','data_kegiatan','jumlah_kegiatan_ksr','jumlah_kegiatan_pmr'
        ]));
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


        try{
            // Delete File Surat Sehat
            $file_suratsehat = $data_peserta->suratsehat_peserta;
            $file_path_suratsehat = public_path('file_suratsehat/' . $file_suratsehat);
            unlink($file_path_suratsehat);
            // Delete File QR Code
            $file_qr = $data_peserta->qrcode_peserta;
            $file_path_qr = public_path('storage/' . $file_qr);
            unlink($file_path_qr);
    
            $data_peserta->delete($data_peserta);
            $data_user->delete($data_user);
            
            Alert::success('Yeay Berhasil !', 'Peserta Berhasil dihapus !');
            return redirect()->back();
            
        }catch(QueryException $e){
            
            Alert::error('Yaah Gagal', 'Peserta Gagal dihapus !');
            return redirect()->back();
        }
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
            // dd($request->all());
            $data_peserta->update($request->all());
        }

        Alert::success('Update Berhasil !','Peserta Berhasil Diupdate !');
        return redirect()->back();  
    }

    // Kegiatan page ==================================================================
    public function kegiatan()
    {
        $data_kegiatan = Kegiatan::all();
        $jumlah_kegiatan = Kegiatan::all()->count();
        return view('panitia.kegiatan.index',compact('data_kegiatan','jumlah_kegiatan'));
    }
    // Update Aktif Kegiatan
    public function aktifKegiatan($id_kegiatan){
        
        $kegiatan = Kegiatan::find($id_kegiatan);
        
        $kegiatan->update([
            "status_kegiatan" => "Aktif"
        ]);

        Alert::success('Berhasil !','Kegiatan Berhasil Diaktifkan !');
        return redirect()->back();
    }

    // Update Non-Aktif Kegiatan
    public function nonaktifKegiatan($id_kegiatan){
        
        $kegiatan = Kegiatan::find($id_kegiatan);

        $kegiatan->update([
            "status_kegiatan" => "Tidak Aktif"
        ]);
        Alert::success('Berhasil !','Kegiatan Dinonaktifkan !');
        return redirect()->back();
    }
    // Tambah kegiatan
    public function tambahKegiatan(Request $request){
        dd($request->all());

        $cek_kegiatan = Kegiatan::where([
            'nama_kegiatan' => $request->nama_kegiatan,
            'jenis_kegiatan' => $request->jenis_kegiatan
        ])->get()->first();

        if ($cek_kegiatan == NULL) {

            $kegiatan = Kegiatan::create([
                "nama_kegiatan" => $request->nama_kegiatan,
                "jenis_kegiatan" => $request->jenis_kegiatan,
                "tanggal_kegiatan" => $request->tanggal_kegiatan,
                "waktu_kegiatan" => $request->waktu_kegiatan,
                "detail_kegiatan" => $request->detail_kegiatan,
                "status_kegiatan" => 'Tidak Aktif',
            ]);

            try{
                Alert::success('Wah Berhasil !','Tambah Kegiatan Berhasil !');
                return redirect()->back();
            }catch(QueryException $e){
                Alert::error('Tambah Kegiatan Gagal!','Sepertinya Ada Yang Kurang ?');
                return redirect()->back();
            }
        } else {
            Alert::error('Tambah Kegiatan Gagal!','Sepertinya Kegiatan Sudah Ada !');
            return redirect()->back();
        }
        

    }

    // Unit page ==================================================================
    public function unit()
    {
        // dd();
        $data_unit_ksr = Unit::where(['status_unit' =>'KSR'])->get()->all();

        $data_unit_mula = Unit::where(['status_units' =>'MULA'])->get()->all();
        $data_unit_wira = Unit::where(['status_units' =>'MADYA'])->get()->all();
        $data_unit_madya = Unit::where(['status_units' =>'WIRA'])->get()->all();


        $jumlah_unit = Unit::all()->count();
        $jumlah_ksr = Unit::where([
            'status_unit' => 'KSR'
        ])->count();
        $jumlah_pmr = Unit::where([
            'status_unit' => 'PMR'
        ])->count();
        $jumlah_peserta = Peserta::all()->count();
        
        // return view('panitia.unit.index');
        return view('panitia.unit.index',compact('data_unit_ksr','data_unit_mula','data_unit_madya','data_unit_wira','jumlah_unit','jumlah_peserta','jumlah_ksr','jumlah_pmr'));
    }
    // Tambah Unit 
    public function tambahUnit(Request $request){
        $cek_unit = Unit::where([
            ['nama_unit','=', $request->nama_unit],
            ['status_unit','=', $request->status_unit],
            ['status_units','=', $request->status_units]
        ])->first();  
        
        if($cek_unit){
            Alert::error('Tambah Unit Gagal!','Unit Sudah Terdaftar !');
            return redirect()->back();
        }else{
            $unit = Unit::create([
                "nama_unit" => $request->nama_unit,
                "status_unit" => $request->status_unit,
                "status_units   " => $request->status_units,
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
        
        try{
            $data_unit->delete($data_unit);
            Alert::success('Yeay Berhasil !', 'Unit Berhasil dihapus !');
            return redirect()->back();
        }catch(QueryException $e){
            Alert::error('Unit Gagal Dihapus', 'Sepertinya Masih ada yang nyantol !');
            return redirect()->back();
        }
    
    }
    // Detail Unit
    public function detailUnit($id_unit){

        $data_unit = Unit::where('id_unit',$id_unit)->get()->first();
        $data_peserta = Peserta::where('unit_id',$id_unit)->get();
        $jumlah_peserta = Peserta::where('unit_id',$id_unit)->count();

        $data_pembina = Peserta::where([
            'unit_id' => $id_unit,
            'role_peserta' => 'Pembina'
        ])->get()->first();

        return view('panitia.unit.detail',compact('data_peserta','jumlah_peserta','data_unit','data_pembina'));
    }

    // Profile page ================================================================
    public function profile()
    {   
        $data_unit = Unit::where('status_units',auth()->user()->peserta->unit->status_units)->get()->all();
        $peserta = Peserta::where('id_peserta',auth()->user()->peserta->id_peserta)->get()->first();
        return view('panitia.profile',compact('data_unit','peserta'));
    }
    
}
