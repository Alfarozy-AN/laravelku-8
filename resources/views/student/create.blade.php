@extends('layouts.app')

@section('title','Tambah Siswa')

@section('content')
    <h2 class="text-center mt-5" >Tambah  Siswa</h2>
    <hr class="col-lg-3 border-info" >
   <div class="row">
    <div class="col-lg-8">
        <form action="/siswa/create" method="post">
            @csrf
            <div class="form-group">
                <label for="nis">NIS</label>
                <input  type="text" name="nis" class="form-control @error('nis') is-invalid @enderror" id="nis" aria-describedby="emailHelp" placeholder="Nis">
                @error('nis')
                <small id="emailHelp" class="form-text text-danger"> {{ $message }}</small>
                @enderror
            </div>
            <div class="form-group">
                <label for="fullname">Nama Lengkap</label>
                <input  type="text" name="fullname" class="form-control @error('fullname') is-invalid @enderror" id="fullname" aria-describedby="emailHelp" placeholder="Masukkan nama lengkap">
                @error('fullname')
                <small id="emailHelp" class="form-text text-danger"> {{ $message }}</small>
                @enderror
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect1">Kelas</label>
                <select  name="kelas" class="form-control @error('kelas') is-invalid @enderror" id="exampleFormControlSelect1">
                  <option selected disabled >Pilih Kelas </option>
                  <option value="XII RPL 2" >XII RPL 2</option>
                  <option value="XII RPL 1" >XII RPL 1</option>
                </select>
                @error('kelas')<small id="emailHelp" class="form-text text-danger"> {{ $message }}</small>@enderror
            </div>

                <div class="row justify-content-center my-4">
                    <a class="btn btn-danger col-lg-5 mx-2" href="/siswa" >batal</a>
                    <button type="submit" class="btn mx-2 btn-success col-lg-5" >Simpan</button>
                </div>

        </form>
    </div>
    <div class="col-lg-4">
        <div class="card mt-4 p-3 text-center">
            <p>Jika data yang diinputkan sesuai dengan data siswa XII RPL di <a href="https://Rumahkusekolahku.my.id">Rumahkusekolahku.my.id</a> Maka akan bisa login otomatis ke dashboard rumahkusekolahku.my.id pada page detail siswa <br> <a class="btn btn-sm btn-success" href="#">Demo Login</a></p>
        </div>
    </div>
   </div>

@endsection