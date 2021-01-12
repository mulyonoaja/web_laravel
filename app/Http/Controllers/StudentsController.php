<?php

namespace App\Http\Controllers;

use App\Student;
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
        //return Student::all();
        $students=Student::all();

        return view('students.index',['students' =>$students]);
        // cara php kalau file sama
        ///return view('students.index', compact('students'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //return 'create data';
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
        //test halaman
        //return $request;
       
        //validasi form input
        $request->validate([
            'nama' => 'required|max:255',
            'nrp' => 'required',
            'email' => 'required',
            'jurusan' => 'required'
        ]);

        
        /** cara pertama */
        /*  $student= new Student;
        $student->nama= $request->nama;
        $student->nrp= $request->nrp;
        $student->email= $request->email;
        $student->jurusan= $request->jurusan;
        $student->save();
        
        */

        /** cara kedua fillable harus bikin fillable di model Student.php*/
        Student::create([
            'nama' => $request->nama,
            'nrp' => $request->nrp,
            'email' => $request->email,
            'jurusan' => $request->jurusan
        ]);
        

        
        
        

        /** cara ketiga sama dengan cara ke dua bikin fillable harus bikin fillable di model Student.php*/
       // Student::create($request->all());
        return redirect('/students')->with('status','Data berhasil disimpan.');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        //return $student;
        return view('students.show', compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        //return $student;
        return view('students.edit', compact('student'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
       // return $student; //data lama
       //return $request; //cek data baru
       Student::where('id', $student->id)
       ->update([
           'nama' => $request->nama,
           'nrp' => $request->nrp,
           'email' => $request->email,
           'jurusan' => $request->jurusan
       ]);
       return redirect('/students')->with('status','Data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        //cek page
        //return $student;

        Student::destroy($student->id);
        return redirect('/students')->with('status','Data berhasil dihapus.');
    }
}
