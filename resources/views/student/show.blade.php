@extends('layouts.app')
@section('title','Detail siswa ')

@section('content')
    <h3>Detail siswa {{ $siswa->fullname }}</h3>
    <div class="my-5">
        <div class="card" style="width: 18rem;">
            <div class="card-body">
              <h5 class="card-title">{{ $siswa->fullname }}</h5>
              <h6 class="card-subtitle mb-2 text-muted">Nis : {{ $siswa->nis }}</h6>
              <p class="card-text"> Siswa kelas {{$siswa->kelas}} di SMKN 1 Lubuk SIkaping</p>
            </div>
        </div>
    </div>
    <a href="/siswa" class="btn btn-danger card-link"> < Kembali</a>
    <a href="/siswa/login/{{ $siswa->nis }}" class="btn btn-success card-link"> Login otomatis Ke rumahkusekolahku.my.id</a>
@endsection