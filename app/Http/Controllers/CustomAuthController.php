<?php

namespace App\Http\Controllers;

use App\Models\CustomAuth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;

class CustomAuthController extends Controller
{
    function signin()
    {
        return view('users.login');
    }

    function signup()
    {
        return view('users.register');
    }


    function users()
    {
        return view('users.users');
    }

    function save(Request $request)
    {


        //Validate requests
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:custom_auths',
            'password' => 'required|min:6|max:12'
        ]);

        //Insert data into database
        $custom_auths = new CustomAuth;
        $custom_auths->name = $request->name;
        $custom_auths->email = $request->email;
        $custom_auths->password = Hash::make($request->password);
        $save = $custom_auths->save();

        if ($save) {
            return back()->with('success', 'New User has been successfully created!');
        } else {
            return back()->with('fail', 'Somethine went wrong, please try again later!');
        }
    }
    // Login Form checker
    function check(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6|max:12'
        ]);

        $userInfo = CustomAuth::where('email', '=', $request->email)->first();

        //Email Checking
        if (!$userInfo) {
            return back()->with('fail', 'We do not recognize your email address!');
        } else {
            //Password Checking
            if (Hash::check($request->password, $userInfo->password)) {
                $request->session()->put('LoggedUser', $userInfo->id);
                return redirect('/layout/dashboard');
            } else {
                return back()->with('fail', 'Incorrect password!');
            }
        }
    }
    function logout()
    {
        if (session()->has('LoggedUser')) {
            session()->pull('LoggedUser');
            return redirect('/users/login');
        }
    }

    function dashboard()
    {
        $data = ['LoggedUserInfo' => CustomAuth::where('id', '=', session('LoggedUser'))->first()];
        return view('layout.dashboard', $data);
    }

    function parking()
    {
        $data = ['LoggedUserInfo' => CustomAuth::where('id', '=', session('LoggedUser'))->first()];
        return view('layout.dashboard', $data);
    }

    // protected function redirectTo()
    // {
    //     if (Auth::custom_auths()->user_type == 'Administrator') {
    //         return 'admin';     // admin path
    //     } else {
    //         return 'layout';    // member path
    //     }
    // }
}
