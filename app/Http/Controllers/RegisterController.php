<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest');
    }
    public function index()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        $request->validate([
            'username'=> 'required',
            'email'=> 'required|email|unique:users,email',
            'password' => 'required|min:5'
        ]);

        $user = new User();
        $user->username = $request->username;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();

        auth()->attempt($request->only('email', 'password'));

        return redirect()->route('dashboard')->with('success', 'Welcome');
    }
}
