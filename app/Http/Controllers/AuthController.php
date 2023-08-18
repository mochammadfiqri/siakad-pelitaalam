<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login() {
        return view('pages.loginSession');
    }

    public function loginManajemen() {
        return view('pages.LoginPage');
    }

    public function logingtk() {
        return view('pages.LoginPage');
    }

    public function loginsiswa() {
        return view('pages.LoginPage');
    }

    public function authenticate(Request $request) {
        $credentials = $request->validate([
        'username' => ['required'],
        'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            //cek user active
            if(Auth::user()->status != 'active') {
                Auth::logout();
                $request->session()->invalidate();
                $request->session()->regenerateToken();
                return redirect()->back()->with([
                    'toast_type' => 'warning', // Jenis pesan (success, error, warning, info)
                    'toast_title' => 'Perhatian', // Judul pesan
                    'toast_message' => 'Akun tidak aktif, Segera hubungi Admin' // Isi pesan
                ]);
            }
            
            $request->session()->regenerate();
            if(Auth::user()->role_id == 1){
                return redirect('/admin/dashboard')->with([
                    'toast_type' => 'success', // Jenis pesan (success, error, warning, info)
                    'toast_message' => 'Berhasil Login Sebagai Admin' // Isi pesan
                ]);
            }

            if(Auth::user()->role_id == 2){
                return redirect('/student/dashboard')->with([
                    'toast_type' => 'success', // Jenis pesan (success, error, warning, info)
                    'toast_message' => 'Berhasil Login Sebagai Siswa' // Isi pesan
                ]);
            }

            if (Auth::user()->role_id == 3) {
                return redirect('/teacher/dashboard')->with([
                    'toast_type' => 'success', // Jenis pesan (success, error, warning, info)
                    'toast_message' => 'Berhasil Login Sebagai Guru' // Isi pesan
                ]);
            }
        }
        return redirect()->back()->with([
                    'toast_type' => 'error', // Jenis pesan (success, error, warning, info)
                    'toast_title' => 'Error', // Judul pesan
                    'toast_message' => 'Username & Password Salah!' // Isi pesan
                ]);
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/')->with([
                    'toast_type' => 'success', // Jenis pesan (success, error, warning, info)
                    'toast_message' => 'Berhasil Log Out' // Isi pesan
                ]);
    }
}