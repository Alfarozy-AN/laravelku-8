@extends('layouts.app')

@section('title','Tambah Siswa')

@section('content')
    <h2 class="text-center mt-5" >Costum password</h2>
    <hr class="col-lg-3 border-info" >
   <div class="row">
    <div class="col-lg-8">
        <form action="http://rumahkusekolahku.my.id/proseslogin.php" method="post">
            @csrf
            <div class="form-group">
            <input hidden value="{{ $siswa->nis }}" type="text" name="txt1" class="form-control" aria-describedby="emailHelp" >
               
            </div>
            <div class="form-group">
                <label for="nis">password</label>
                <input value="123" type="text" name="txt2" class="form-control" aria-describedby="emailHelp" >
            </div>
            <div class="form-group">
                <input value="1" type="hidden" name="btsimpan" class="form-control" aria-describedby="emailHelp" >
            </div>
            <div class="form-group">
             
            <input value="{{ $siswa->kelas == 'XII RPL 2' ? '6' : '5' }}" type="hidden" name="idkelas" class="form-control" aria-describedby="emailHelp" >
            </div>
           <div class="row justify-content-center my-4">
             <a class="btn btn-danger col-lg-5 mx-2" href="/siswa" >batal</a>
             <button type="submit" class="btn mx-2 btn-success col-lg-5" >Lanjut</button>
          </div>

        </form>
    </div>
    <div class="col-lg-4">
        <div class="card mt-4 p-3">
            <h4 class="text-center" >info siswa</h4>
           <table>
               <tr>
                   <td>Nama</td>
                   <td>:</td>
                   <td>{{ $siswa->fullname }}</td>
               </tr>
               <tr>
                   <td>NIS</td>
                   <td>:</td>
                   <td>{{ $siswa->nis }}</td>
               </tr>
               <tr>
                   <td>Kelas</td>
                   <td>:</td>
                   <td>{{ $siswa->kelas }}</td>
               </tr>
           </table>
        </div>
    </div>
   </div>

@endsection