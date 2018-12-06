<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Surat;
use App\Ayat;
use App\Juz;

class MainController extends Controller
{
    public function index()
    {
        return view('home.index');
    }

    public function read()
    {
        $surats = Surat::get();

        return view('home.list', compact('surats'));
    }

    public function show(Request $request)
    {
        $query = request('query');

        $surats = Surat::where('nama_surat', 'LIKE','%'. $query . '%')->get();

        $ayats = Ayat::where('terjemahan_idn', 'LIKE','%'. $query . '%')->get();
        
        return view('home.search', compact(['surats', 'ayats']));
    }
}