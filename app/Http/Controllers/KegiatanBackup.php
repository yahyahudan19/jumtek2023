<?php

namespace App\Http\Controllers;

use App\Models\Kegiatan;
use App\Models\Kegiatan_Peserta;
use App\Models\KegiatanBackup as ModelsKegiatanBackup;
use App\Models\PesertaBackup;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class KegiatanBackup extends Controller
{
    public function index(){
        return view('backup.index');
    }
    public function cekKegiatan(Request $request){

        // dd($request->all());
        $list_kegiatan_PMR = Kegiatan::where('tingkat_kegiatan','PMR')->get()->all();
        $list_kegiatan_KSR = Kegiatan::where('tingkat_kegiatan','KSR')->get()->all();

        $data_peserta = PesertaBackup::where([
            'nama_peserta_backup' => $request->nama_peserta_backup,
            'nourut_peserta_backup' => $request->nourut_peserta_backup
        ])->get()->first();

        $data_kegiatan_ikut = ModelsKegiatanBackup::where([
            'nama_peserta_backup' => $request->nama_peserta_backup,
        ])->get()->all();
        
        if ($data_peserta == NULL) {
            Alert::error('Data Tidak Ditemukan !','Pastikan Nama dan No. Urut sama dengan di ID CARD');
            return redirect()->back();
        } else {
            Alert::success('Sip Data Ditemukan','Silahkan Lanjutkan !');
        }
        
        return view('backup.kegiatan_backup',compact(['data_kegiatan_ikut','data_peserta','list_kegiatan_PMR','list_kegiatan_KSR']));
    }
    public function tambahKegiatan(Request $request){

        $cek = ModelsKegiatanBackup::where([
            'nama_peserta_backup' => $request->nama_peserta_backup,
            'kegiatan_peserta_backup' => $request->kegiatan_peserta_backup
        ])->get()->first();

        if ($cek == NULL) {
            // dd($request->all());
            $kegiatan_peserta = ModelsKegiatanBackup::create([
                'nama_peserta_backup' => $request->nama_peserta_backup,
                'kegiatan_peserta_backup' => $request->kegiatan_peserta_backup,
                'kontingen_peserta_backup' => $request->kontingen_peserta_backup,
            ]);

            if($kegiatan_peserta){
                Alert::success('Yeay Berhasil !','Kegiatan Berhasil Ditambahkan !');
                return redirect()->back();  
            }else{
                Alert::warning('Gagal Ditambahkan !','Kegiatan Sudah Kamu Ikuti !');
                return redirect()->back();  
            }

        } else {
            Alert::warning('Gagal Ditambahkan !','Kegiatan Sudah Kamu Ikuti !');
            return redirect()->back();  
        }
    }
    public function hapusKegiatan($id_kegiatan_backup){

        $data_peserta_kegiatan = ModelsKegiatanBackup::where([
            'id_kegiatan_backup' => $id_kegiatan_backup
            ])->get()->first();
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
}
