<?php

namespace App\Http\Controllers;

use App\Exports\ExportPesertas;
use App\Exports\ExportUsers;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


use App\Models\User;
use App\Models\Peserta;
use App\Models\Unit;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Maatwebsite\Excel\Facades\Excel;
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
            ['email', '=', $request->email_peserta]
            // ['name', '=', $request->nama_peserta],
        ])->first();

        // $cekMIS = Peserta::where([
        //     ['mis_peserta','=',$request->mis_peserta]
        // ])->first();

        if($cekPeserta){
            Alert::error('Register Gagal !','Email Kamu Sudah terdaftar, Gunakan Email Lain !');
            return redirect()->back();
        }else{
            if($request->hasFile('foto_peserta')) {

                $validator = Validator::make($request->all(), [
                    'foto_peserta' => 'required|max:2048|mimes:png,jpg,jpg,jpeg',
                ]);
                
                if ($validator->fails()) {
                    Alert::warning('Register Gagal','Pastikan Foto Sesuai dengan Ketentuan Ya !');
                    return redirect()->back()->withInput();;
                }
            
                $extension = $request->file('foto_peserta')->getClientOriginalExtension();
                $nama_foto = 'foto-peserta-'.$request->nama_peserta.'.'. $extension;
                $request->file('foto_peserta')->move('file_foto/',$nama_foto);
                // $request->file('foto_peserta')->move('file_foto/',$request->file('foto_peserta')->getClientOriginalName());
                
                $token = Str::random(10);
                
                if($request->role_peserta == 'Pimpinan'){
                    
                    $user = User::create([
                        "role" => 'Pembina',
                        "name" => $request->nama_peserta,
                        "email" => $request->email_peserta,
                        "remember_token" => $token,
                        "password" => Hash::make($request->password),
                    ]);
                }else {

                    $user = User::create([
                        "role" => $request->role_peserta,
                        "name" => $request->nama_peserta,
                        "email" => $request->email_peserta,
                        "remember_token" => $token,
                        "password" => Hash::make($request->password),
                    ]);
                }
    
                if($user){

                    $userID = DB::getPdo()->lastInsertId();
                    
                    $image = QrCode::format('png')
                        ->size(400)->errorCorrection('H')
                        ->generate($request->nama_peserta);
                    $qrcode_peserta = '/qr-code/img/qrcode_peserta-' .$request->nama_peserta . '.png';
                    Storage::disk('public')->put($qrcode_peserta, $image); 

                    if($request->role_peserta == 'Peserta'){

                        $getPass = explode("@", $request->email_peserta);
                        $generate_username = $getPass[0];

                        // dd($generate_username);
                        
                        $peserta = Peserta::create([
                            "user_id" => $userID,
                            "nama_peserta" => $request->nama_peserta,
                            "username_peserta" => $generate_username,
                            "pwdmdl_peserta" => "Pwd@".$generate_username."Mdl123!",
                            "alamat_peserta" => $request->alamat_peserta,
                            "role_peserta" => $request->role_peserta,
                            "jenisk_peserta" => $request->jenisk_peserta,
                            "unit_id" => $request->unit_id,
                            "mis_peserta" => $request->mis_peserta,
                            "qrcode_peserta" => $qrcode_peserta,
                            "status_peserta" => "Tidak Aktif",
                            "foto_peserta" =>  $nama_foto,
                        ]);
                        Alert::success('Register Berhasil','Silahkan Login Ya ');
                        return redirect('/login');
                    }else{

                        if ($request->hasFile('surattugas_pembina')) {
                            $request->file('surattugas_pembina')->move('file_surattugas/',$request->file('surattugas_pembina')->getClientOriginalName());

                            $getPass = explode("@", $request->email_peserta);
                            $generate_username = $getPass[0];
    
                            $peserta = Peserta::create([
                                "user_id" => $userID,
                                "nama_peserta" => $request->nama_peserta,
                                "username_peserta" => $generate_username,
                                "pwdmdl_peserta" => "Pwd@".$generate_username."Mdl123!",
                                "alamat_peserta" => $request->alamat_peserta,
                                "jenisk_peserta" => $request->jenisk_peserta,
                                "role_peserta" => $request->role_peserta,
                                "unit_id" => $request->unit_id,
                                "mis_peserta" => $request->mis_peserta,
                                "qrcode_peserta" => $qrcode_peserta,
                                "status_peserta" => "Aktif",
                                "foto_peserta" =>  $nama_foto,
                                "surattugas_pembina" =>  $request->file('surattugas_pembina')->getClientOriginalName(),
                            ]);
                        } else {

                            $getPass = explode("@", $request->email_peserta);
                            $generate_username = $getPass[0];

                            // dd($generate_username);
                            
                            $peserta = Peserta::create([
                                "user_id" => $userID,
                                "nama_peserta" => $request->nama_peserta,
                                "username_peserta" => $request->generate_username,
                                "pwdmdl_peserta" => "Pwd@".$request->generate_username."Mdl123!",
                                "alamat_peserta" => $request->alamat_peserta,
                                "jenisk_peserta" => $request->jenisk_peserta,
                                "role_peserta" => $request->role_peserta,
                                "unit_id" => $request->unit_id,
                                "mis_peserta" => $request->mis_peserta,
                                "qrcode_peserta" => $qrcode_peserta,
                                "status_peserta" => "Aktif",
                                "foto_peserta" =>  $nama_foto,
                                // "surattugas_pembina" =>  $request->file('surattugas_pembina')->getClientOriginalName(),
                            ]);

                        }
                        
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
                
                Alert::error('Belum Upload Foto','Upload Foto dulu yaa !');
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

        $buatpassword = Hash::make("PwdAdminJumtek@2013!Resmi");
        dd($buatpassword);

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

    // Export Excel
    public function exportExcel(){
        // return Excel::download(new ExportUsers, 'users.xlsx');
        return Excel::download(new ExportPesertas, 'data_peserta.xlsx');
    }

}
