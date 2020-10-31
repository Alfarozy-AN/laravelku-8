<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    //
    public function siswa()
    {
        $query = request('search');

        $siswa = Student::where('fullname', 'like', "%$query%")->latest()->paginate(10);
        return view('student.index', ['siswa' => $siswa]);
    }
}
