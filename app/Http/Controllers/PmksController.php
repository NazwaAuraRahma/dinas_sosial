<?php

namespace App\Http\Controllers;

use App\Models\Pmks;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redis;

class PmksController extends Controller
{
    public function index(): View
    {
        $dataPmks = Pmks::paginate(2);
        return view('pmks.index', compact('dataPmks'));
    }

    public function create()
    {
        return view('pmks.create');
    }

    public function store(Request $request)
    {
        Pmks::create([
            'nik' => $request->nik,
            'nama' => $request->nama,
            'jk' => $request->jk,
            'jenis_pmks' => $request->jenis_pmks,
            'kota' => $request->kota,
        ]);

        return redirect()->route('Admin.pmks.index')->with('success', 'Data Berhasil Disimpan!');
    }

    public function edit($id)
    {
        $pmks = Pmks::find($id);
        return view('pmks.edit', compact('pmks'));
    }

    public function update(Request $request, $id)
    {
        $pmks = Pmks::find($id);
        $pmks->update($request->all());
        return redirect()->route('Admin.pmks.index')->with('success', 'Data anda berhasil ter Update!');
    }

    public function destroy($id)
    {
        $pmks = Pmks::find($id);
        $pmks->delete();
        return back()->with('info', 'Data berhasil dihapus!');
    }
}
