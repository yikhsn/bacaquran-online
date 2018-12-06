<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ayat;
use App\Surat;

class AyatController extends Controller
{
    public function show($nomor_surat, $nomor_ayat) {
        $ayat = Ayat::where([
            ['nomor_surat', '=', $nomor_surat],
            ['nomor_ayat', '=', $nomor_ayat],
        ])->first();

        $all_surats = Surat::get();

        $surat = Surat::with('ayats')
                    ->where('nomor_surat', $nomor_surat)
                    ->first();

        return view('ayat.single', compact(['all_surats', 'ayat', 'surat']));
    }
}
