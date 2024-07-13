<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pegawai;
use App\Models\Pmks;
use App\Models\Infopengaduan;

class BerandaController extends Controller
{
    public function index()
    {
        $jumlahPegawai = Pegawai::count();
        $jumlahPmks = Pmks::count();
        $jumlahPengaduan = Infopengaduan::count();

        return view('beranda', compact('jumlahPegawai', 'jumlahPmks', 'jumlahPengaduan'));
    }
}
