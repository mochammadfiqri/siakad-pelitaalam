<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MapelController extends Controller
{
    public function indexMapel() {
        return view('pages.mapel');
    }
}
