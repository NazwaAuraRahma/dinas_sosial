<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function index(Request $request)
    {
        if (empty($request->input())) {
            return view('login');
        }
    }

    public function login_proses(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $data = [
            'email'  => $request->email,
            'password' => $request->password,
        ];

        if (Auth::attempt($data)) {
            $user = Auth::user();

            if ($user->level === 'admin') {
                return redirect()->route('Admin.beranda.index');
            } elseif ($user->level === 'pengguna') {
                return redirect()->route('Pengguna.beranda2.index');
            }
        }
    }

    public function store($request)
    {


        return redirect()->route('login');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login.index')->with('success', 'Anda berhasil logout!');
    }
}
