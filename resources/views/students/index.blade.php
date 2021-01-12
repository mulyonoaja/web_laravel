@extends('layout/main')

@section('title', 'Mahasiswa')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-6">
            <h1 class="mt-3">Daftar Students</h1>
            <a href="/students/create" class="btn btn-primary my-3">Add Data</a>
            @if (session('status'))
            <div class="alert alert-success">
            {{ session('status') }}
            </div>
            @endif
                <ul class="list-group">
                @foreach($students as $siswa)
                <li class="list-group-item d-flex justify-content-between align-items-center">
                {{$siswa->nama}}
                <a href="students/{{ $siswa->id}}" class="btn btn-info">detail</a>
                </li>
                @endforeach
                </ul>
        </div>
    </div>
</div>
@endsection