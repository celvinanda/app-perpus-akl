<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        if (Auth::user()) {
            return redirect()->intended('home');
//            return view('/');
        } else {
            return view('users.auth.view_login');
        }

    }

    public function proses(Request $request): RedirectResponse
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required'
        ], [
            'username.required' => 'Username tidak boleh kosong',
        ]);

        $kredensial = $request->only('username', 'password');

        if (Auth::attempt($kredensial)) {
            $request->session()->regenerate();
            $user = Auth::user();
            if ($user) {
                return redirect()->intended('absen');
            }
            return redirect()->intended('/');
        }

        return back()->withErrors([
            'username' => "Username atau password salah"
        ])->onlyInput('username');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
