<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Ekskul;
use App\Models\Jurusan;

class HomeController extends Controller
{
    public function index() {
    return view('pages/home', [
        "title" => "Home",
        "jurusan" => Jurusan::all(),
        "ekskul" => Ekskul::all(),
        "blogs" => Blog::latest()->get(),
    ]);
    }
}
