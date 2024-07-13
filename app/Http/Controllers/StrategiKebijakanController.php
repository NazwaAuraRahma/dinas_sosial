<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StrategiKebijakanController extends Controller
{
    public function index()
    {
        return view('strategi-kebijakan.index');
    }
}
