<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller

{
    public function register(){
        return view('auth.register');
    }

    public function store(StoreUserRequest $request){

         User::create($request->all());
         return redirect()->route('home');
         
     }

     public function login(){
        return view('auth.login');
     }

    public function auth_login(Request $request){
    
        $remember = $request->filled('remember');
    
        if(Auth::attempt($request->only('email','password'), $remember)){
            $request->session()->regenerate();
            return redirect()
                ->intended('user/dashboard')
                ->with('status','You are logged in!');
        };
    
        throw ValidationException::withMessages([
            'email' => __('auth.failed'),
            
        ]);
    }

        public function logout(Request $request){

            Auth::logout();
    
            $request->session()->invalidate();
    
            $request->session()->regenerateToken();
    
            return redirect()->to('/')->with('statuts','You logged out');
        }
    
}
