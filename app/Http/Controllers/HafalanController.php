<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\{ User, Ayat, Hafalan };

class HafalanController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $user = User::with('ayats')->find(Auth::id());

        $last_hafalan_id = $user->ayats()->max('ayat_id');

        $next_hafalan_id = $last_hafalan_id + 1;

        $next_hafalan = Ayat::limit(5)->offset($last_hafalan_id)->get();
        
        return view('hafalan.show', compact('next_hafalan'));
    }

    public function store(Request $request)
    {        
        $user = Auth::id();

        $array = [
            'ayat_id'   => $request->input('ayat_id'),
            'user_id'   => $user,
            'terhafal' => true
        ];

        Hafalan::create($array);

        return redirect('/hafalan');
    }

    public function test()
    {
        $hafalan = Hafalan::get();

        return $hafalan;
    }
}