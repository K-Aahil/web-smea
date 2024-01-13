<?php

namespace App\Http\Controllers;

use App\Models\Jurusan;
use Illuminate\Http\Request;

class JurusanController extends Controller
{
    public function all() {
        return view('/pages/major', [
        "title" => "Jurusan",
        "jurusan" => Jurusan::all()
    ]);
    }

    public function single(Jurusan $jurusan){
        return view('/pages/detail-major', [
        "title" => "Kompetensi Keahlian",
        "jurusan" => $jurusan
    ]);
    }
}
