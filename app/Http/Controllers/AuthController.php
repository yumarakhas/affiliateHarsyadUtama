<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    /**
     * Menampilkan form login
     */
    public function showLoginForm()
    {
        return view('auth.login');
    }

    /**
     * Handle permintaan login
     */
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');
        $remember = $request->has('remember');

        if (Auth::attempt($credentials, $remember)) {
            // Regenerate session untuk mencegah session fixation
            $request->session()->regenerate();

            // Langsung arahkan ke dashboard
            // Pengecekan admin bisa dilakukan di middleware khusus jika diperlukan nanti
            return redirect()->intended('/admin/dashboard');
        }

        return back()->withErrors([
            'email' => 'Email atau password salah.',
        ]);
    }
    /**
     * Menampilkan dashboard admin
     */
    public function dashboard()
    {
        return view('admin.dashboard');
    }

    /**
     * Handle permintaan logout
     */
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
