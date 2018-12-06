<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Juz;

class JuzController extends Controller
{
    public function show($nomor_juz) {
        $juz = Juz::with('ayats')->where('nomor_juz', $nomor_juz)->first();

        return view('juz.index', compact('juz'));
    }
}
