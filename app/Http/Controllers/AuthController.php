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

class AuthController extends Controller
{
    // View Login Page
    public function index()
    {
        return view('auth.index');
    }

    // View Register Page
    public function register(){
        return view('auth.register');
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

        // dd($request);

        $cekPeserta = User::where([
            ['email', '=', $request->email_peserta],
            ['name', '=', $request->nama_peserta],
        ])->first();

        if($cekPeserta){
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
                    "role" => "Peserta",
                    "name" => $request->nama_peserta,
                    "email" => $request->email_peserta,
                    "remember_token" => $token,
                    "password" => Hash::make($request->password),
                ]);
    
                if($user){

                    $userID = DB::getPdo()->lastInsertId();
    
                    $peserta = Peserta::create([
                        "user_id" => $userID,
                        "nama_peserta" => $request->nama_peserta,
                        "alamat_peserta" => $request->alamat_peserta,
                        "jenisk_peserta" => $request->jenisk_peserta,
                        "unit_id" => $request->unit_id,
                        "mis_peserta" => $request->mis_peserta,
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
}
