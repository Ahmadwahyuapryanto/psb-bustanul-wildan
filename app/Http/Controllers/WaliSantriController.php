<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WaliSantriController extends Controller
{
    public function index()
    {
        // Mengambil data santri yang didaftarkan oleh user ini
        $santri = Auth::user()->santris; 

        return view('dashboard', compact('santri'));
    }
}