<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function index() {
        // $request->session()->flush();
        return view('pages.dashboard');
    }
}
