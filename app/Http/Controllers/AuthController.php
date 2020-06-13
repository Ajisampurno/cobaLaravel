<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */





//FUNGSI LOGIN
    public function getlogin()
    {
        return view('login');
    }

    public function postlogin(request $request)
    {
        if (!\Auth::attempt(['email' => $request -> email,'password' => $request -> password])){
            return redirect() -> back();
        }
            return view('index');
    }




// FUNGSI REGISTRASI
    public function getregistrasi()
    {

        return view('/registrasi');
    }

    public function postregistrasi(request $request)
    {
        //validation
        $request->validate([
        'nama'          => 'required',
        'email'         => 'required|email|unique:users',
        'password'      => 'required|size:6|confirmed'//confirmed u-> field_confirmation
    ]);

        User::create([
            'nama' => $request -> nama,
            'email' => $request -> email,
            'password' => bcrypt($request -> password)
        ]);

        return redirect() -> back() -> with('status','data berhasil di tambahkan');
    }




// FUNGSI LOG OUT
    public function logout()
    {
        \Auth::logout();
        return redirect('/');
    }

}