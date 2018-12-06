<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\{ Ayat, Surat, Juz };

class AppController extends Controller
{
    public function surat(Request $request)
    {
        $query = request('query');

        $surats = Surat::where('nama_surat', 'LIKE','%'. $query . '%')->get();

        return $surats;
    }

    public function ayat(Request $request)
    {
        $query = request('query');

        $ayats = Ayat::where('terjemahan_idn', 'LIKE','%'. $query . '%')->limit(15)->offset(4)->get();

        return $ayats;
    }
}
