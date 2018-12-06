<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SessionController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'destroy']);
    }
 
    public function create() 
    {
        return view('session.create');
    }

    public function store()
    {
        $this->validate(request(), [
            'email'     => 'required',
            'password'  => 'required'
        ]);

        if( ! Auth::attempt( request( ['email', 'password'] ) ) )
            return "Error";

        return redirect('/');
    }

    public function destroy()
    {
        Auth::logout();

        return redirect()->home();
    }
}
