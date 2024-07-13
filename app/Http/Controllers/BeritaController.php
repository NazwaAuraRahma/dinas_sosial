<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BeritaController extends Controller
{
    public function index()
    {
        return view('berita.index');
    }

    public function berita1()
    {
        return view('berita.berita1');
    }

    public function berita2()
    {
        return view('berita.berita2');
    }

    public function berita3()
    {
        return view('berita.berita3');
    }

    public function berita4()
    {
        return view('berita.berita4');
    }

    public function berita5()
    {
        return view('berita.berita5');
    }

    public function berita6()
    {
        return view('berita.berita6');
    }
}
