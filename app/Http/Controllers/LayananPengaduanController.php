<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Infopengaduan;

class LayananPengaduanController extends Controller
{
    public function index()
    {
        return view('layanan-pengaduan.index');
    }

    public function store(Request $request)
    {
        Infopengaduan::create([
            'judul_laporan' => $request->judul_laporan,
            'nama' => $request->nama,
            'nik' => $request->nik,
            'laporan' => $request->laporan,
        ]);

        return redirect()->route('Pengguna.layanan-pengaduan.index')->with('success', 'Laporan Berhasil Terkirim!');
    }
}
