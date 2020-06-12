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

    public function getlogin()
    {
        return view('login');
    }

    public function postlogin(request $request)
    {
        dd($request -> all());
    }

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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
