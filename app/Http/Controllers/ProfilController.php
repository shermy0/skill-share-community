<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfilController extends Controller
{
    // Halaman profil
    public function index()
    {
        // Menampilkan view profil/index.blade.php
        return view('profil.index');
    }
}
