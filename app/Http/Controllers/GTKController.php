<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GTKController extends Controller
{
    public function dashboardGTK() {
        return view('pages.dashboard');
    }

    public function index() {
        return view('pages.gtk');
    }
}
