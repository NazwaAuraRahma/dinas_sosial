<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SasaranController extends Controller
{
    public function index()
    {
        return view('sasaran-program.index');
    }
}
