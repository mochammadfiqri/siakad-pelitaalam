<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function index() {
        return view('pages.siswa');
    }

    public function dashboardSiswa() {
        // $request->session()->flush();
        return view('pages.dashboard');
    }
}
