<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function index()
    {
        return view('auth.login');
    }

    public function store(Request $request)
    {
        request()->validate([
            'email' => 'required',
            'password' => 'required'
        ]);


        if(!auth()->attempt($request->only('email', 'password'))){
            return back()->with('fail', 'Invalid Login Credentials');
        }else{
            return redirect('dashboard');
        }
    }
}
