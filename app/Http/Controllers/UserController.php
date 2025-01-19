<?php

namespace App\Http\Controllers;

use Log;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function login(Request $request) {
        $credentials = $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);
         // Add debugging
    Log::info('Login attempt for username: ' . $credentials['username']);

        if(auth()->attempt($credentials)) {
            Log::info('Login successful');
            $request->session()->regenerate();
            return redirect()->intended('dashboard');
        }
        
        return back()->withErrors([
            'username' => 'The provided credentials do not match our records.',
        ]);
    }
    

    public function logout() {

        auth()->logout();
        return view('homepage');
    }

}
