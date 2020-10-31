<?php

use App\Http\Controllers\SearchController;
use App\Http\Controllers\StudentController;
use Illuminate\Routing\RouteGroup;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home.index');
});

//Siswa Controller
Route::get('/siswa', [StudentController::class, 'index']);

Route::group(['middleware' => 'PageProtect'], function () {
    Route::get('/siswa/create', [StudentController::class, 'create'])->middleware('PageProtect');
    Route::post('/siswa/create', [StudentController::class, 'store']);
    Route::get('/siswa/edit/{nis}', [StudentController::class, 'edit'])->name('edit.siswa');
    Route::patch('/siswa/edit/{nis}', [StudentController::class, 'update'])->name('update.siswa');
    Route::delete('/siswa/hapus/{nis}', [StudentController::class, 'destroy'])->name('hapus.siswa');
});
Route::get('/siswa/nis/{nis}', [StudentController::class, 'show'])->name('detail.siswa');

// searching Controller
Route::get('/siswa/search/', [SearchController::class, 'siswa'])->name('cari.siswa');
Route::get('/siswa/login/{nis}', [StudentController::class, 'loginku'])->name('login.siswa');

Auth::routes();
