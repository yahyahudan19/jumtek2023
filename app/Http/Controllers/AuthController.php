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
            if($request->hasFile('kta_peserta')) {

                $request->validate([
                    'kta_peserta' => 'required|max:2048|mimes:png,jpg,jpg,jpeg'
                ]);
    
                $request->file('kta_peserta')->move('file_kta/',$request->file('kta_peserta')->getClientOriginalName());
                
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
                    
                    // Generate QR Code format PNG/JPG to file public

                    $image = QrCode::format('png')
                    ->size(400)->errorCorrection('H')
                    ->generate($request->mis_peserta);
                    $qrcode_peserta = '/qr-code/img/img-' .$request->mis_peserta . '.png';
                    Storage::disk('public')->put($qrcode_peserta, $image); 


                    $peserta = Peserta::create([
                        "user_id" => $userID,
                        "nama_peserta" => $request->nama_peserta,
                        "alamat_peserta" => $request->alamat_peserta,
                        "jenisk_peserta" => $request->jenisk_peserta,
                        "unit_id" => $request->unit_id,
                        "mis_peserta" => $request->mis_peserta,
                        "qrcode_peserta" => $qrcode_peserta,
                        "status_peserta" => "Tidak Aktif",
                        "kta_peserta" =>  $request->file('kta_peserta')->getClientOriginalName(),
                    ]);
                    
                    // dd($peserta);

                    Alert::success('Register Berhasil','Silahkan Login Ya ');
                    
                    return redirect('/login');
                }else{
                    Alert::error('Register Gagal','Pastikan Data Lengkap Ya !');
                    return redirect()->back();
                }
    
            }else{
                
                Alert::error('Belum Upload KTA','Hayoo Upload File KTA dulu yaa !');
                return redirect()->back();
                
            }
        }

        
    }
    
    // GET Units by Status Units
    public function getUnitsByStatus($status_units){
        $unit = Unit::where('status_units',$status_units)->get();
        return $unit;
    }
}
