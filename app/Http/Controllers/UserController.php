<?php

namespace App\Http\Controllers;

use Log;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function login(Request $request) 
    {
        $credentials = $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);
         // Add debugging
   

      if(auth()->attempt($credentials)) {
          
          $request->session()->regenerate();
          if(auth()->user()->isAdmin) {
              return redirect()->intended('admin');
          }
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
