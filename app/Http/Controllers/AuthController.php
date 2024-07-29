<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    function showLoginForm()
    {
        return view('auth.login');
    }

    function login(Request $request)
    {
        // Menambahkan validasi
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ], [
            'email.required' => 'Email tidak boleh kosong',
            'email.email' => 'Email harus valid',
            'password.required' => 'Password tidak boleh kosong'
        ]);

        $credentials = [
            'email' => request('email'),
            'password' => request('password')
        ];

        if (auth()->attempt($credentials)){
            $request->session()->regenerate();
            return redirect()->intended('dashboard')->with('success', 'Login Berhasil');
        }

        return back()->with('error','Silahkan cek email dan password Anda' );
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
