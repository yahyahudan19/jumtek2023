<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


use App\Models\User;
use App\Models\Peserta;
use App\Models\Unit;
use Illuminate\Support\Facades\Storage;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class AuthController extends Controller
{
    // View Login Page
    public function index()
    {
        return view('auth.index');
    }

    // View Register Page
    public function register(){

        $data_unit = Unit::all();
        return view('auth.register',compact('data_unit'));
    }

    //Login Process
    public function login(Request $request){
        // dd($request);
        if(Auth::attempt($request->only('email','password'))){
            return redirect('/dashboard');
        }else{
            Alert::error('Login Gagal','Cek Login Kamu ya !');
            return redirect('/login');
        }
    }

    //Logout Process
    public function logout(){
        Auth::logout();
        return redirect('/login');
    }

    //Register Process
    public function doregister(Request $request){

        // dd($request->all());    

        $cekPeserta = User::where([
            ['email', '=', $request->email_peserta],
            ['name', '=', $request->nama_peserta],
        ])->first();

        $cekMIS = Peserta::where([
            ['mis_peserta','=',$request->mis_peserta]
        ])->first();

        if($cekPeserta || $cekMIS){
            Alert::error('Register Gagal !','Kamu Sudah Daftar Sepertinya !');
            return redirect()->back();
        }else{
            if($request->hasFile('foto_peserta')) {

                $request->validate([
                    'foto_peserta' => 'required|max:2048|mimes:png,jpg,jpg,jpeg'
                ]);
    
                $request->file('foto_peserta')->move('file_foto/',$request->file('foto_peserta')->getClientOriginalName());
                
                $token = Str::random(10);
                
                $user = User::create([
                    "role" => $request->role_peserta,
                    "name" => $request->nama_peserta,
                    "email" => $request->email_peserta,
                    "remember_token" => $token,
                    "password" => Hash::make($request->password),
                ]);
    
                if($user){

                    $userID = DB::getPdo()->lastInsertId();
                    
                    // Generate QR Code format PNG/JPG to file public sesuai Tingkatan
                    if ($request->status_unit == 'KSR') {
                        $image = QrCode::format('png')
                        ->size(400)->errorCorrection('H')
                        ->color(255, 61, 40) // Merah
                        ->generate($request->nama_peserta);
                        $qrcode_peserta = '/qr-code/img/qrcode_peserta-' .$request->nama_peserta . '.png';
                        Storage::disk('public')->put($qrcode_peserta, $image); 

                    } elseif($request->status_unit == 'WIRA') {
                        $image = QrCode::format('png')
                        ->size(400)->errorCorrection('H')
                        ->color(255, 245, 88) // Kuning
                        ->generate($request->nama_peserta);
                        $qrcode_peserta = '/qr-code/img/qrcode_peserta-' .$request->nama_peserta . '.png';
                        Storage::disk('public')->put($qrcode_peserta, $image); 

                    } elseif($request->status_unit == 'MADYA'){
                        $image = QrCode::format('png')
                        ->size(400)->errorCorrection('H')
                        ->color(50, 50, 255) // Biru
                        ->generate($request->nama_peserta);
                        $qrcode_peserta = '/qr-code/img/qrcode_peserta-' .$request->nama_peserta . '.png';
                        Storage::disk('public')->put($qrcode_peserta, $image); 

                    } else {
                        $image = QrCode::format('png')
                        ->size(400)->errorCorrection('H')
                        ->color(29, 236, 70) // Hijau
                        ->generate($request->nama_peserta);
                        $qrcode_peserta = '/qr-code/img/qrcode_peserta-' .$request->nama_peserta . '.png';
                        Storage::disk('public')->put($qrcode_peserta, $image); 
                    }
                    

                    if($request->role_peserta == 'Peserta'){
                        $peserta = Peserta::create([
                            "user_id" => $userID,
                            "nama_peserta" => $request->nama_peserta,
                            "alamat_peserta" => $request->alamat_peserta,
                            "role_peserta" => $request->role_peserta,
                            "jenisk_peserta" => $request->jenisk_peserta,
                            "unit_id" => $request->unit_id,
                            "mis_peserta" => $request->mis_peserta,
                            "qrcode_peserta" => $qrcode_peserta,
                            "status_peserta" => "Tidak Aktif",
                            "foto_peserta" =>  $request->file('foto_peserta')->getClientOriginalName(),
                        ]);
                        Alert::success('Register Berhasil','Silahkan Login Ya ');
                        return redirect('/login');
                    }else{

                        // dd($request->all());    
                        
                        // $request->validate([
                        //     'surattugas_pembina' => 'required|max:2048|mimes:png,jpg,jpg,jpeg'
                        // ]);
            
                        $request->file('surattugas_pembina')->move('file_surattugas/',$request->file('surattugas_pembina')->getClientOriginalName());

                        $peserta = Peserta::create([
                            "user_id" => $userID,
                            "nama_peserta" => $request->nama_peserta,
                            "alamat_peserta" => $request->alamat_peserta,
                            "jenisk_peserta" => $request->jenisk_peserta,
                            "role_peserta" => $request->role_peserta,
                            "unit_id" => $request->unit_id,
                            "mis_peserta" => $request->mis_peserta,
                            "qrcode_peserta" => $qrcode_peserta,
                            "status_peserta" => "Aktif",
                            "foto_peserta" =>  $request->file('foto_peserta')->getClientOriginalName(),
                            "surattugas_pembina" =>  $request->file('surattugas_pembina')->getClientOriginalName(),
                        ]);
                        Alert::success('Register Berhasil','Silahkan Login Ya ');
                        return redirect('/login');
                    }
                    // dd($peserta);
                    Alert::success('Register Berhasil','Silahkan Login Ya ');
                    return redirect('/login');
                }else{
                    Alert::error('Register Gagal','Pastikan Data Lengkap Ya !');
                    return redirect()->back();
                }
    
            }else{
                
                Alert::error('Belum Upload Foto','Hayoo Upload Foto dulu yaa !');
                return redirect()->back();
                
            }
        }

        
    }
    
    // GET Units by Status Units
    public function getUnitsByStatus($status_units){
        $unit = Unit::where('status_units',$status_units)->get();
        return $unit;
    }

    // QR Generator 
    public function qrgenerator(){

        $colorBlue = '#007bff';
        // Warna hijau
        $colorGreen = '#28a745';
    
        // Membuat instance QR code KSR
        $qrCode = QrCode::size(150)
            ->backgroundColor(0,0,0)
            ->color(255, 245, 88)
            ->generate('Contoh QR Code');   
       
            
        return view('auth.qr',compact('qrCode'));
    }
}
