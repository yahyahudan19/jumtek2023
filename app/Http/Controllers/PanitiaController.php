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
    
}
