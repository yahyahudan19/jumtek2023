<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PanitiaController extends Controller
{
    // View Login Page
    public function index()
    {
        return view('panitia.index');
    }
    // Peserta page
    public function peserta()
    {
        return view('panitia.peserta');
    }
    // Lomba page
    public function lomba()
    {
        return view('panitia.lomba');
    }
    // Profile page
    public function profile()
    {
        return view('panitia.profile');
    }
    
}
