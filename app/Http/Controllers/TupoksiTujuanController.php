<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TupoksiTujuanController extends Controller
{
    public function index()
    {
        return view('tupoksi-tujuan.index');
    }
}
