<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;
use App\Models\Guru;
use App\Models\Jurusan;

class SekolahController extends Controller
{
    public function siswa()
    {
        $siswas = Siswa::all();
        return view('sekolah.siswa', compact('siswas'));
    }

    public function guru()
    {
        $gurus = Guru::all();
        return view('sekolah.guru', compact('gurus'));
    }

    public function jurusan()
    {
        $jurusans = Jurusan::all();
        return view('sekolah.jurusan', compact('jurusans'));
    }
}
