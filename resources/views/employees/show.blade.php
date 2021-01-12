@extends('layout/main')

@section('title', 'Detail Pegawai')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-6">
            <h4 class="mt-3">Detail Employee</h4>
            <div class="card">
            <div class="card-body">
            <h5 class="card-title">{{$employee->nama}}</h5>
            <h6 class="card-subtitle mb-2 text-muted">{{$employee->nik}}</h6>
            <p class="card-text">{{$employee->email}}</p>
            <p class="card-text">{{$employee->divisi}}</p>
            <p class="card-text">{{$employee->alamat}}</p>
            <form method="post" action="{{$employee->id}}" class="d-inline">
            @method('delete')
            @csrf
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
            <a href="{{$employee->id}}/edit" class="btn btn-primary">Edit</a>
            <a href="#" class="card-link">kembali</a>
            </div>
            </div>    
        </div>
    </div>
</div>
@endsection