<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NamatandatanganController extends Controller
{
    public function index()
    {
        $namatandatangans = Namatandatangan::all();
        return view('namatandatangan.index', compact('namatandatangans'));
    }
}
