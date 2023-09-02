<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TAController extends Controller
{
    public function index() {
        return view('pages.tahun-akademik');
    }
}
