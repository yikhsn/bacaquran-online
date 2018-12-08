<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\{ Ayat, Surat, Juz };

class AppController extends Controller
{

    public function ayat(Request $request)
    {
        $id = request('id');

        $ayats = Ayat::where('id', $id)->with('surat')->get();

        return $ayats;
    }

    public function searchAyat(Request $request)
    {
        $query = request('query');

        $surats = Ayat::where('terjemahan_idn', 'LIKE','%'. $query . '%')->with('surat')->get();

        return $surats;
    }

    public function surat(Request $request)
    {
        $nomor_surat = request('nomor_surat');

        $surats = Surat::where('nomor_surat', $nomor_surat)->with('ayats')->get();

        return $surats;
    }

    public function searchSurat(Request $request)
    {
        $query = request('query');

        $surats = Surat::where('nama_surat', 'LIKE','%'. $query . '%')->get();

        return $surats;
    }
}
