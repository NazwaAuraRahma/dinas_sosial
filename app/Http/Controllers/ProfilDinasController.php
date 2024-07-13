<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfilDinasController extends Controller
{
    public function index()
    {
        return view('profil-dinas.index');
    }
}
