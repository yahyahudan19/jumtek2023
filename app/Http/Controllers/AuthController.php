<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;


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

        $user = User::create([
            "role" => "Panitia",
            "name" => $request->nama_peserta,
            "email" => $request->email_peserta,
            // "token" => str_random(10),
            "password" => Hash::make($request->password),
        ]);

        $userID = DB::getPdo()->lastInsertId();

        $peserta = Peserta::create([
            "user_id" => $userID,
            "nama_peserta" => $request->nama_peserta,
            "alamat_peserta" => $request->alamat_peserta,
            "jenisk_peserta" => $request->jenisk_peserta,
            "unit_id" => $request->unit_id,
            "mis_peserta" => $request->mis_peserta,
            "status_mentee" => "Tidak Aktif",
            // "kta_peserta" => $request->kta_peserta,
            "kta_peserta" => "Sementara Gaada Ges",
        ]);

        return redirect('/login');

        
    }
}
