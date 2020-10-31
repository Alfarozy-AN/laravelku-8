<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Student::create([
            'nis'       => 12230,
            'fullname'  => 'Muhammad Alfarozi',
            'kelas'     => 'XII RPL 2'
        ]);
    }
}
