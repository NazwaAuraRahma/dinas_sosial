<?php

namespace App\Http\Controllers;

use App\Models\Infopengaduan;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class InfoPengaduanController extends Controller
{
    public function index(): View
    {
        $dataInfo = Infopengaduan::paginate(2);
        return view('infopengaduan.index', compact('dataInfo'));
    }

    public function destroy($id)
    {
        $dataInfo = Infopengaduan::find($id);
        $dataInfo->delete();
        return back()->with('info', 'Data berhasil dihapus!');
    }
}
