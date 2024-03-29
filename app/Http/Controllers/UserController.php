<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Session;
use App\Models\User;

class UserController extends Controller
{
    public function viewHomePage(){
        $total = DonationController::countTotalDonation();

        return view('layouts.homepage')->with('total', $total);
    }

    public function viewLoginPage(){
        return view('layouts.login');
    }

    public function login(Request $request){
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
            Cookie::queue('email-cookie', $request->email, 30);
            Cookie::queue('password-cookie', $request->password, 30);
        }

        if(Auth::attempt($credentials, true)){
            Session::put('session', $credentials);
            return redirect('/');
        }

        return redirect()->back()->withErrors(['credentials' => 'These credentials do not match our records.']);
    }

    public function viewRegisterPage(){
        return view('layouts.register');
    }

    public function register(Request $request){
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

    public function viewProfilePage(){
        $user_id = Auth::user()->id;
        $user = User::find($user_id);

        return view('registered.profile')->with('user', $user);
    }

    public function viewEditProfilePage(){
        $user_id = Auth::user()->id;
        $user = User::find($user_id);

        return view('registered.editprofile')->with('user', $user);
    }

    public function editProfile(Request $request){
        $user_id = Auth::user()->id;
        $currUser = User::find($user_id);

        $currUser->name = $request->name;
        $currUser->phone_number = $request->phone_number;
        $currUser->address = $request->address;
        $currUser->save();

        return redirect('/profile');
    }

    public function editProfilePicture(Request $request){
        $user_id = Auth::user()->id;
        $currUser = User::find($user_id);

        $ext = $request->image->getClientOriginalExtension();
        $first = explode(" ", $request->name)[0];
        $imageName = $first . "-" . time() . "." . $ext;
        $request->image->move('profile', $imageName);

        $currUser->image = "profile/" . $imageName;
        $currUser->save();

        return redirect('/profile');
    }
}
