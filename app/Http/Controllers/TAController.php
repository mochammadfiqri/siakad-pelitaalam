<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TAController extends Controller
{
    public function indexRombel() {
        return view('pages.rombel');
    }

    public function indexMapel() {
        return view('pages.mapel');
    }

    public function index() {
        return view('pages.tahun-akademik');
    }
}
