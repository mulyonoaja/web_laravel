<?php

namespace App\Http\Controllers;

use App\Employee;
use Illuminate\Http\Request;

class EmployeesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // cek koneksi ke DB
       // return Employee::all();
      // $employees=Employee::all();  //tanpa pagination
        $employees=Employee::paginate(5);
       return view('employees.index',['employees' =>$employees]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //return 'create data';
        return view('employees.create');
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        //return $request; //test halaman
        //validasi form input
          $request->validate([
            'nama' => 'required|max:255',
            'nik' => 'required',
            'email' => 'required',
            'divisi' => 'required',
            'alamat' => 'required'
        ]);
         Employee::create($request->all());
         return redirect('/employees')->with('status','Data berhasil disimpan.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function show(Employee $employee)
    {
       // return $employee; //cek halaman
        return view('employees.show', compact('employee'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function edit(Employee $employee)
    {
        //return $employee; //cek halaman
        return view('employees.edit', compact('employee'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Employee $employee)
    {
       //return $employee; //data lama
       //return $request; //cek data baru
       Employee::where('id', $employee->id)
       ->update([
           'nama' => $request->nama,
           'nik' => $request->nik,
           'email' => $request->email,
           'divisi' => $request->divisi,
           'alamat' => $request->alamat
       ]);
       return redirect('/employees')->with('status','Data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function destroy(Employee $employee)
    {
       // return $employee; //cek halaman
       Employee::destroy($employee->id);
        return redirect('/employees')->with('status','Data berhasil dihapus.');
    }
    public function search()
    {
        //return 'hello';
        $query-$_GET['query'];
        $employees=Employee::where('title','LIKE','%','.$query.','%')->with('name')->get();
        return view('employees.search',['employees' =>$employees]);
    }
}
