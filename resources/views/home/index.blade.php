@extends('layouts.app')
@section('title','Beranda')
    
@section('content')
<div class="row">
    <div class="jumbotron col-lg-12">
        <h1 class="display-5 text-center mb-3">Dev by Koji Xenpai</h1>
     <!-- Button trigger modal -->
     <div class="text-center">

       <button type="button" class="btn btn-primary " data-toggle="modal" data-target="#exampleModal">
         Demo akun 
        </button>
        
      </div>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Akun untuk projek Laravelku</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Silahkan login dengan akun dibawah ini,pastika sudah menjalankan server dan melakukkan migrasi dan seed database</p>
        <table>
          <tr>
            <td>Email</td>
            <td>:</td>
            <td><b>alfarozy@google.com</b></td>
          </tr>
          <tr>
            <td>password</td>
            <td>:</td>
            <td><b>laravelku</b></td>
          </tr>
        </table>
        <br>
        <p>Menjalankan Migrasi <br> <code>php artisan migrate</code></p>
        <p>Menjalankan seed <br> <code>php artisan db:seed</code></p>
        <p class="text-right" >Happy coding</p>
        <p class="text-right" ><b>Alfarozy</b></p>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Siap boss</button>
      </div>
    </div>
  </div>
</div>
        <hr class="my-4">
        <div class="container text-center">
            <img class="rounded-circle mb-2" src="http://127.0.0.1:8000/img/oji2.png" alt="" srcset="" width="120" height="120">
            <h5 >Alfarozy AN</h5>
            <p class="my-1"><b>mr.alfarozy.a.n@gmail.com</b></p>
            <div class=" sosial-media">

              <div class="row justify-content-center">
                <a class="mx-2" href="https://www.facebook.com/Alfarozy.A.n/"> <svg class="svg-inline--fa fa-facebook fa-w-16" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="facebook" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M504 256C504 119 393 8 256 8S8 119 8 256c0 123.78 90.69 226.38 209.25 245V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.28c-30.8 0-40.41 19.12-40.41 38.73V256h68.78l-11 71.69h-57.78V501C413.31 482.38 504 379.78 504 256z"></path></svg><!-- <i class="fab fa-facebook"></i> --></a>
                <a class="mx-2" href="https://wa.me/+6281268174381"> <svg class="svg-inline--fa fa-whatsapp fa-w-14 text-success" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="whatsapp" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7.9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z"></path></svg><!-- <i class="text-success fab fa-whatsapp"></i> --></a>
                <a class="mx-2" href="https://www.instagram.com/alfarozy_an"> <svg class="svg-inline--fa fa-instagram fa-w-14 text-danger" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="instagram" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"></path></svg><!-- <i class="text-danger fab fa-instagram"></i> --></a>
              </div>
              <div class="row text-center my-3 justify-content-center">

                <div class="card col-lg-7">
                  <div class="p-4">
                    Hubungi Pengembang lewat email atau click salah satu ikon sisoal media diatas
                  </div>
                    <a class="btn btn-primary btn-sm mb-4" href="/siswa" >Kelola Siswa</a>

                </div>
            </div>
        </div>
           
      </div>
      </div>
    
</div>
@endsection

