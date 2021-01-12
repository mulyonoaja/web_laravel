@extends('layout/main')

@section('title', 'Pegawai')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-10">
            <h4 class="mt-3">Full Time Employee List</h4>
            <a href="/employees/create" class="btn btn-primary my-3">Add Data</a>
            @if (session('status'))
            <div class="alert alert-success">
            {{ session('status') }}
            </div>
            @endif
            <table class="table table-bordered">
            <thead class="thead-light">
                <tr>
                <th scope="col">No</th>
                <th scope="col">NAME</th>
                <th scope="col">NIP</th>
                <th scope="col">EMAIL</th>
                <th scope="col">DIVISI</th>
                <th scope="col">ADDRESS</th>
                <th scope="col">ACTION</th>
                </tr>
                </thead>
                @foreach($employees as $pegawai)
                <tbody>
                <tr>
                <th scope="row">{{$loop->iteration}}</th>
                <td>{{$pegawai->nama}}</td>
                <td>{{$pegawai->nik}}</td>
                <td>{{$pegawai->email}}</td>
                <td>{{$pegawai->divisi}}</td>
                <td>{{$pegawai->alamat}}</td>
                <td>
                    <a href="employees/{{ $pegawai->id}}" class="btn btn-success">show</a>               
                </td>
                </tr>
                </tbody>
                @endforeach
            </table>
            {{$employees->links()}}
        </div>
    </div>
</div>
@endsection