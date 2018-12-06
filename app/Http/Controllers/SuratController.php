<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Surat;

class SuratController extends Controller
{
    public function show($id) {
        $surat = Surat::with('ayats')
                    ->where('nomor_surat', $id)
                    ->first();

        $all_surats = Surat::get();

        return view('surat.single', compact(['surat', 'all_surats']));
    }
}
