@extends('layout/main')

@section('title', 'Student')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-8">
            <h1 class="mt-3">Add Data Students</h1>
            <form method="post" action="/students">
            @csrf
            <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" placeholder="Masukan Nama" name="nama" value="{{old('nama')}}">
            <label class="invalid-feedback">Nama masih kosong</label>
            </div>
            <div class="form-group">
            <label for="nrp">NRP</label>
            <input type="text" class="form-control @error('nrp') is-invalid @enderror" id="nrp" placeholder="Masukan NRP" name="nrp" value="{{old('nrp')}}">
            <label class="invalid-feedback">NRP masih kosong</label>
            </div>
            <div class="form-group">
            <label for="email">Email</label>
            <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Masukan email" name="email" value="{{old('email')}}">
            <label class="invalid-feedback">Email masih kosong</label>
            </div>
            <div class="form-group">
            <label for="jurusan">Jurusan</label>
            <input type="text" class="form-control @error('jurusan') is-invalid @enderror" id="jurusan" placeholder="Masukan jurusan" name="jurusan" value="{{old('jurusan')}}">
            <label class="invalid-feedback">Jurusan masih kosong</label>
            </div>
            <button type="submit" class="btn btn-primary my-3">Save</button>
            <button type="reset" class="btn btn-danger my-3">Reset</button>
            </form>
               
        </div>
    </div>
</div>
@endsection