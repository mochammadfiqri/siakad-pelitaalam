<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KSController extends Controller
{
    public function index() {
        return view('pages.kepala-sekolah');
    }
}
