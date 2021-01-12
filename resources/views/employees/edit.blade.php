@extends('layout/main')

@section('title', 'Edit Data Pegawai')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-8">
            <h1 class="mt-3">Edit Data Pegawai</h1>
            <form method="post" action="/employees/{{$employee->id}}">
            @method('patch')
            @csrf
            <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" placeholder="Masukan Nama" name="nama" value="{{$employee->nama}}">
            <label class="invalid-feedback">Nama masih kosong</label>
            </div>
            <div class="form-group">
            <label for="nik">NIK</label>
            <input type="text" class="form-control @error('nik') is-invalid @enderror" id="nik" placeholder="Masukan nik" name="nik" value="{{$employee->nik}}">
            <label class="invalid-feedback">nik masih kosong</label>
            </div>
            <div class="form-group">
            <label for="email">Email</label>
            <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Masukan email" name="email" value="{{$employee->email}}">
            <label class="invalid-feedback">Email masih kosong</label>
            </div>
            <div class="form-group">
            <label for="divisi">Divisi</label>
            <input type="text" class="form-control @error('divisi') is-invalid @enderror" id="divisi" placeholder="Masukan divisi" name="divisi" value="{{$employee->divisi}}">
            <label class="invalid-feedback">divisi masih kosong</label>
            </div>
            <div class="form-group">
            <label for="alamat">Alamat</label>
            <input type="text" class="form-control @error('alamat') is-invalid @enderror" id="alamat" placeholder="Masukan alamat" name="alamat" value="{{$employee->alamat}}">
            <label class="invalid-feedback">alamat masih kosong</label>
            </div>
            <button type="submit" class="btn btn-primary my-3">Update</button>
            <button type="reset" class="btn btn-danger my-3">Reset</button>
            </form>
               
        </div>
    </div>
</div>
@endsection