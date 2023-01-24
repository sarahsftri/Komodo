<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function viewLoginPage(){
        return view('login');
    }

    public function login(){
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ],[
            'email.required' => 'email is required',
            'password.required' => 'password is required',
        ]);

        $credentials = [
            'email' => $request->email,
            'password' => $request->password
        ];

        if($request->remember){
            Cookie::queue('cookie', $request->email, 30);
        }

        if(Auth::attempt($credentials, true)){
            Session::put('session', $credentials);
            return redirect('/');
        }

        return redirect()->back()->withErrors(['credentials' => 'These credentials do not match our records.']);
    }

    public function viewRegisterPage(){
        return view('register');
    }

    public function register(){
        $request->validate([
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6',
            'password_confirmation' => 'required|same:password'
        ],[
            'email.required' => 'email is required',
            'email.unique' => 'the email is already registered',
            'password.required' => 'password is required',
            'password.min' => 'password is too short',
            'password_confirmation.required' => 'confirm your password',
            'password_confirmation.same' => 'both password are different'
        ]);

        User::create([
            'username' => $request->username,
            'email' => $request->email,
            'password' => bcrypt($request->password)
        ]);

        return redirect('/login');
    }

    public function logout(){
        Auth::logout();
        return redirect('/login');
    }
}
