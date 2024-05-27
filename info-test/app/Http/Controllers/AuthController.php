<?php

namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function register() {
        return view('register');
    }

    public function store(Request $request) {
        $field = $request->validate([
            'name' => 'required',
            'email' => ['required', 'email', 'min:3'],
            'password' => ['required', 'min:3']
        ]);
        User::create($field);

        $users = User::all();
        return view('login');    
    }

    public function login() {
        return view('login');
    }

    public function loginProcess(Request $request) {
        $field = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if(Auth::attempt($field)) {
            return redirect()->route('index');
        }
    }
    public function logout(){
        Auth::logout(); 
        return redirect()->route('login');
    }
}
    
    