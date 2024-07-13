<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redis;

class PegawaiController extends Controller
{
    public function index(): View
    {
        $dataPegawai = Pegawai::paginate(2);
        return view('pegawai.index', compact('dataPegawai'));
    }

    public function create()
    {
        return view('pegawai.create');
    }

    public function store(Request $request)
    {
        Pegawai::create([
            'nik' => $request->nik,
            'nama' => $request->nama,
            'tgl_lahir' => $request->tgl_lahir,
            'jenis_kelamin' => $request->jenis_kelamin,
            'jabatan' => $request->jabatan,
        ]);

        return redirect()->route('Admin.pegawai.index')->with('success', 'Data Berhasil Disimpan!');
    }

    public function edit($id)
    {
        $pegawai = Pegawai::find($id);
        return view('pegawai.edit', compact('pegawai'));
    }

    public function update(Request $request, $id)
    {
        $pegawai = Pegawai::find($id);
        $pegawai->update($request->all());
        return redirect()->route('Admin.pegawai.index')->with('success', 'Data anda berhasil ter Update!');
    }

    public function destroy($id)
    {
        $pegawai = Pegawai::find($id);
        $pegawai->delete();
        return back()->with('info', 'Data berhasil dihapus!');
    }
}
