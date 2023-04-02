<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class SessionCtrl extends Controller
{
    public function home(){
        return view ('homepage');
    }

    public function sign_in(){
        return view('sign_in');
    }

    public function register(){
        return view('register');
    }

    function loginData(Request $request){

       Session::flash('Username', $request->Username);

        $request->validate([
            'Username' => 'required',
            'password' => 'required',
        ], 
        [
            'Username.required' => 'Username cannot be empty',
            'password.required' => 'Password cannot be empty',
        ]);

        $infologin = [
            'Username'=> $request->Username,
            'password'=> $request->password
        ];

      
        if(Auth::attempt($infologin)){
            // klo proses auth sukses
            // Auth::login($user, $request->get('remember')
            return redirect('/posts');
        }else{
            // klo gagal
            return redirect('/sign_in');
        }
    }

    function create(Request $request){

        Session::flash('Username', $request->Username);

        $account = [
            'Username' => $request->Username,
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'Email' => $request->Email,
            'phonenumber' => $request->phonenumber,
            'DOB' => $request->DOB,
            'gender' => $request->gender,
            'password' => Hash::make($request->password),
            'password_confirmation' => Hash::make($request->password_confirmation),
        ];
        User::create($account);

        $infologin = [
            'Username'=> $request->Username,
            'password'=> $request->password
        ];

        if(Auth::attempt($infologin)){
            // klo proses auth sukses
            return redirect('/sign_in');
        }else{
            // klo gagal
            return redirect('/register');
        }

        
    }

}
