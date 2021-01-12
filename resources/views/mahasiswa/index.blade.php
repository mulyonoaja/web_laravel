@extends('layout/main')

@section('title', 'Mahasiswa')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-10">
            <h1 class="mt-3">Daftar Mahasiswa</h1>
            <table class="table">
            <thead class="thead-dark">
                <tr>
                <th scope="col">No</th>
                <th scope="col">NAMA</th>
                <th scope="col">NRP</th>
                <th scope="col">EMAIL</th>
                <th scope="col">JURUSAN</th>
                <th scope="col">ACTION</th>
                </tr>
                </thead>
                @foreach($mahasiswa as $mhs)
                <tbody>
                <tr>
                <th scope="row">{{$loop->iteration}}</th>
                <td>{{$mhs->nama}}</td>
                <td>{{$mhs->nrp}}</td>
                <td>{{$mhs->email}}</td>
                <td>{{$mhs->jurusan}}</td>
                <td>
                    <a href="" class="btn btn-success">edit</a> 
                    <a href="" class="btn btn-danger">delete</a>               
                </td>
                </tr>
                </tbody>
                @endforeach
            </table>
        </div>
    </div>
</div>
@endsection