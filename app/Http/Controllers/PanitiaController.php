<?php

namespace App\Http\Controllers;

use App\Models\Kegiatan;
use App\Models\Kegiatan_Peserta;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\Peserta;
use App\Models\User;
use App\Models\Unit;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Hash;
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
        
        // $jumlah_peserta_kontingen = Peserta::where(['unit_id' => auth()->user()->peserta->unit->unit_id])->get()->count();

        return view('panitia.index',compact([
            'data_peserta','jumlah_peserta','jumlah_unit','jumlah_ksr','jumlah_pmr','jumlah_kegiatan','data_kegiatan_ksr',
            'data_kegiatan_pmr','data_kegiatan','jumlah_kegiatan_ksr','jumlah_kegiatan_pmr',
            // 'jumlah_peserta_kontingen'
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
            // Delete File Foto
            $file_foto = $data_peserta->foto_peserta;
            $file_path_foto= public_path('file_foto/' . $file_foto);
            unlink($file_path_foto);
            // Delete File QR Code
            $file_qr = $data_peserta->qrcode_peserta;
            $file_path_qr = public_path('storage/' . $file_qr);
            unlink($file_path_qr);
            
            if ($data_peserta->surattugas_pembina == NULL) {
                $data_peserta->delete($data_peserta);
                $data_user->delete($data_user);
            } else {
                // Delete File Surat Tugas
                $file_surattugas = $data_peserta->surattugas_pembina;
                $file_path_surattugas = public_path('file_surattugas/' . $file_surattugas);
                unlink($file_path_surattugas);

                $data_peserta->delete($data_peserta);
                $data_user->delete($data_user);
            }
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
        
        $data_peserta = Peserta::where('id_peserta',$request->id_peserta)->get()->first();
        // dd($data_peserta);
        
        if($request->hasFile('foto_peserta')){
            // dd($request->all());
            
            $request->validate([
                'foto_peserta' => 'required|max:2048|mimes:png,jpg,jpg,jpeg'
            ]);
            
            // Delete File Foto Peserta
            $file_foto = $data_peserta->foto_peserta;
            $file_path_foto = public_path('file_foto/' . $file_foto);
            unlink($file_path_foto);

            //Move File Peserta
            $request->file('foto_peserta')->move('file_foto/',$request->file('foto_peserta')->getClientOriginalName());
            
            $data_peserta->update([
                "nama_peserta" => $request->nama_peserta,
                "unit_id" => $request->unit_id,
                "alamat_peserta" => $request->alamat_peserta,
                "role_peserta" => $request->role_peserta,
                "foto_peserta" => $request->file('foto_peserta')->getClientOriginalName()
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

    // Update SuratTugas
    public function updateSuratTugas(Request $request){
        
        $data_peserta = Peserta::where('id_peserta',$request->id_peserta)->get()->first();
        // dd($data_peserta);
        
        if($request->hasFile('surattugas_pembina')){
            // dd($request->all());
            
            $request->validate([
                'surattugas_pembina' => 'required|max:2048|mimes:png,jpg,jpg,jpeg'
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
            Alert::error('Upload Gagal','Silahkan Cek Ketentuan Surat Tugas !');
            return redirect()->back();  
        }

   
    }

    // Update Password
    public function updatePassword(Request $request){
        $data_user = User::where('id',$request->user_id)->get()->first();

        if ($data_user == NULL) {
            Alert::error('Update Gagal','Silahkan Update Password Lain !');
            return redirect()->back();  
        } else {
            $data_user->update([
                "password" => Hash::make($request->password)
            ]);
            Alert::success('Update Password Berhasil','Silahkan Coba Login Ya!');
            return redirect()->back(); 
        }
        
    }

    // Kegiatan page ==================================================================
    public function kegiatan()
    {
        $data_kegiatan_jumbara = Kegiatan::where([
            'jenis_kegiatan' => 'Jumbara'
        ])->orderBy('id_kegiatan')->get()->all();
        $data_kegiatan_temu_karya = Kegiatan::where([
            'jenis_kegiatan' => 'Temu Karya'
        ])->orderBy('id_kegiatan')->get()->all();

        $jumlah_kegiatan_jumbara = Kegiatan::where(['jenis_kegiatan' => 'Jumbara'])->count();
        $jumlah_kegiatan_temu_karya = Kegiatan::where(['jenis_kegiatan' => 'Temu Karya'])->count();
        $jumlah_kegiatan_semua = Kegiatan::all()->count();

        return view('panitia.kegiatan.index',compact('data_kegiatan_jumbara','data_kegiatan_temu_karya','jumlah_kegiatan_semua','jumlah_kegiatan_jumbara','jumlah_kegiatan_temu_karya'));
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
    // Hapus Kegiatan 
    public function hapusKegiatan($id_kegiatan){
        $data_kegiatan = Kegiatan::where('id_kegiatan',$id_kegiatan)->get()->first();

        try {
            $data_kegiatan->delete($data_kegiatan);
            Alert::success('Yeay Berhasil !', 'Kegiatan Berhasil dihapus !');
            return redirect()->back();
        } catch (QueryException $e) {
            Alert::error('Yaah Gagal', 'Kegiatan Gagal dihapus !');
            return redirect()->back();
        }
    }
    //Detail & Edit Kegiatan
    public function detailKegiatan($id_kegiatan){
        $data_kegiatan = Kegiatan::where('id_kegiatan',$id_kegiatan)->get()->first();
        $data_peserta = Kegiatan_Peserta::where('kegiatan_id',$id_kegiatan)->get()->all();
        $jumlah_peserta = Kegiatan_Peserta::where('kegiatan_id',$id_kegiatan)->count();
        
        if($data_kegiatan){
            return view('panitia.kegiatan.detail',compact('data_kegiatan','data_peserta','jumlah_peserta'));
        }else {
            Alert::error('Kegiatan Tidak Ada', 'Data Kegiatan Tidak Ditemukan !');
            return redirect()->back();
        }
        
    }
    //Update Kegiatan
    public function updateKegiatan(Request $request,$id_kegiatan){
        // dd($request->all());
        $data_kegiatan = Kegiatan::where('id_kegiatan',$id_kegiatan)->get()->first();

        try {
            $data_kegiatan->update($request->all());
            Alert::success('Update Berhasil !','Peserta Berhasil Diupdate !');
            return redirect()->back();
        } catch (QueryException $e) {
            Alert::error('Yaah Gagal', 'Kegiatan Gagal Diupdate !');
            return redirect()->back();
        }
    }
    //Hapus Peserta Kegiatan
    public function hapusPesertaKegiatan($id_peserta){
        $data_peserta_kegiatan = Kegiatan_Peserta::where('peserta_id',$id_peserta)->get()->first();
        // dd($data_peserta_kegiatan);
        
        try {
            $data_peserta_kegiatan->delete($data_peserta_kegiatan);
            Alert::success('Yeay Berhasil !', 'Kegiatan Berhasil dihapus !');
            return redirect()->back();
        } catch (QueryException $e) {
            Alert::error('Yaah Gagal', 'Kegiatan Gagal dihapus !');
            return redirect()->back();
        }
    }

    // Unit page ==================================================================
    public function unit()
    {
        // dd();
        $data_unit_ksr = Unit::where(['status_unit' =>'KSR'])->get()->all();

        $data_unit_mula = Unit::where(['status_units' =>'MULA'])->get()->all();
        $data_unit_wira = Unit::where(['status_units' =>'WIRA'])->get()->all();
        $data_unit_madya = Unit::where(['status_units' =>'MADYA'])->get()->all();


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

        $data_pimpinan = Peserta::where([
            'unit_id' => $id_unit,
            'role_peserta' => 'Pimpinan'
        ])->get()->first();

        return view('panitia.unit.detail',compact('data_peserta','jumlah_peserta','data_unit','data_pembina','data_pimpinan'));
    }

    // Profile page ================================================================
    public function profile()
    {   
        $data_unit = Unit::where('status_units',auth()->user()->peserta->unit->status_units)->get()->all();
        $peserta = Peserta::where('id_peserta',auth()->user()->peserta->id_peserta)->get()->first();
        return view('panitia.profile',compact('data_unit','peserta'));
    }
    
}
