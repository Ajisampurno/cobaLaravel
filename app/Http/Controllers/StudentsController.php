<?php

namespace App\Http\Controllers;

use App\student;
use Illuminate\Http\Request;

class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data_mahasiswa = \App\student::paginate(3);
        return view('students.index',['data_mahasiswa' => $data_mahasiswa]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('students.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        //validation
        $request->validate([
        'nama' => 'required',
        'nrp' => 'required|size:9',
        'email' => 'email:rfc,dns',
        'jurusan' => 'required',
    ]);

        //untuk mengambil request insert ke databases
        student::create($request->all());       
        //untuk kembali ke halaman student setelah tombol  di tekan
        return redirect('/students/')-> with('status','Data mahasiswa berhasil di tambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(student $student)
    {
        return view('students.show',['student' => $student]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(student $student)
    {
        return view('students.edit',['student' => $student]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, student $student)
    {

        //validation
            $request->validate([
            'nama' => 'required',
            'nrp' => 'required|size:9',
            'email' => 'email:rfc,dns',
            'jurusan' => 'required',
        ]);

        student::where('id', $student -> id)
            ->update([
                        'nama'      => $request -> nama,
                        'nrp'       => $request -> nrp,
                        'email'     => $request -> email,
                        'jurusan'   => $request -> jurusan
                    ]);

        return redirect('/students/')-> with('status','Data mahasiswa berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(student $student)
    {
        student::destroy($student -> id);
        return redirect('/students/')-> with('status','Data mahasiswa berhasil dihapus');
    }
}
