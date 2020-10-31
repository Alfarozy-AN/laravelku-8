<?php
/*
    Author Muhammad Alfarozi

    coment dengan // merupakan kode program sedangkan # pesan / komentar
*/

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Auth;

class StudentController extends Controller
{
    public function __construct()
    {
        #batasi akses user yg belum login
        $this->middleware('auth')->except(['index', 'show']);
    }

    public function index()
    {
        # ambil Semua data siswa diurut berdasarkan NIS ASC + minimal 5 siswa/page

        $siswa = DB::table('students')->orderByRaw('nis')->paginate(5);
        # menampilkan data siswa 
        return view('student.index', ['siswa' => $siswa]);
    }

    public function create(Request $request)
    {

        # tampilkan halaman tambah siswa
        return view('student.create');
    }
    public function store(Request $request)
    {

        # standar menggunakan validasi
        $siswa = $request->validate([
            'fullname'  =>  'required',
            'nis'       => 'required|unique:students|int',
            'kelas'     => 'required',
        ], [
            'nis.required'  => 'NIS Wajib di isi',
            'nis.unique'  => 'NIS tersebut sudah diinputkan sebelumnya',
            'fullname.required'  => 'Nama Lengkap Wajib di isi',
            'kelas.required'  => 'Kelas Wajib di isi'
        ]);
        #insert ke database semua yang di imputkan user
        Student::create($request->all());
        #insert kedatabase semua variabel siswa 
        // Student::create($siswa); 

        #tampilkan pesan success
        session()->flash('msg', '<div style="position: absolute;z-index:90;" class="alert col-lg-8 alert-success text-left alert-dismissible fade show" role="alert">
        Berhasil menambahkan data siswa
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>');
        return redirect('siswa');
    }

    public function show(Request $request)

    {
        # ambil data siswa berdasarkan NIS jika tidak ditemukan redirect ke 404 / not found

        $siswa = Student::where('nis', $request->nis)->firstOrFail();
        return view('student.show', ['siswa' => $siswa]); // passing data siswa ke view 
    }

    public function edit(Request $request)
    {

        # ambil data siswa berdasarkan NIS jika tidak ditemukan redirect ke 404 / not found
        $siswa = Student::where('nis', $request->nis)->firstOrFail();

        # passing data siswa ke view 
        return view('student.edit', compact('siswa')); #menggunakan fungsi php compact() untuh membuat array

        // return view('student.edit', ['siswa' => $siswa]); #standart passing data
    }

    public function update(Request $request, $nis)
    {


        # validasi sebelum di update/edit
        $siswa = $request->validate([
            'nis'  => 'required',
            'fullname'  =>  'required',
            'kelas'     => 'required',
        ], [
            'nis.required'  => 'NIS Wajib di isi',
            'fullname.required'  => 'Nama Lengkap Wajib di isi',
            'kelas.required'  => 'Kelas Wajib di isi'
        ]);

        # uncomment dd($siswa) dibawah untuk melihat hasil dari variabel $siswa
        // dd($siswa);

        # Update database menggunakan model Student

        // Student::where('nis', $nis)->update([
        //     'nis'       => $request->nis,
        //     'fullname'  => $request->fullname,
        //     'kelas'     => $request->kelas
        // ]);

        # sama dengan yg dia atas tapi datanya diambil dari validasi
        Student::where('nis', $nis)->update($siswa);

        # menampilkan pesan success
        session()->flash('msg', '
        <div style="position: absolute;z-index:90;" class="alert col-lg-8 alert-success text-left alert-dismissible fade show" role="alert">
            Berhasil mengedit data siswa
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        </div>
        ');
        # memindahkan halaman dengan redirect
        return redirect('siswa');
    }

    public function destroy($nis)
    {
        # delete siswa berdasarkan nis
        # nis diambil dari patch /siswa/hapus/{nis}
        Student::where('nis', $nis)->delete();
        # tampilkan pesan success
        session()->flash('msg', '
        <div style="position: absolute;z-index:90;" class="alert col-lg-8 alert-success text-left alert-dismissible fade show" role="alert">
        Berhasil menghapus data siswa
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        </div>
        ');
        # pindahkan halaman
        return redirect('siswa');
    }

    public function loginku($nis)
    {
        $siswa = Student::where('nis', $nis)->firstOrFail();

        return view('student.login', ['siswa' => $siswa]);
    }
}
