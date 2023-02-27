<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function login(Request $request) {
        
        $incomingFields = $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);
        
        if(auth()->attempt(['username' => $incomingFields['username'], 'password' => $incomingFields['password']])){
            
            $request->session()->regenerate();
            return view('create-post');
        } else {
            return 'Sorry!!!';
        }
    }

    public function logout() {

        auth()->logout();
        return view('homepage');
    }

}
