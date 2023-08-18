<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $role_id = $user->role_id;

        if ($role_id == 1) {
            return $this->adminDashboard($user->id);
        } elseif ($role_id == 2) {
            return $this->siswaDashboard($user->id);
        } elseif ($role_id == 3) {
            return $this->guruDashboard($user->id);
        }
        // Handle other roles or default behavior
    }

    private function adminDashboard()
    {
        // $request->session>flush();
        // return view('admin.dashboard');
        dd('Ini Halaman Admin');
    }

    private function siswaDashboard(Request $request)
    {
        $request->session->flush();
        // return view('admin.dashboard');
        // dd('Ini Halaman Siswa');
    }

    private function guruDashboard()
    {
        // $request->session->flush();
        // return view('admin.dashboard');
        dd('Ini Halaman Guru');
    }
}   