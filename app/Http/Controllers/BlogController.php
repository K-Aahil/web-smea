<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function all() {
        return view('pages/berita', [
        "title" => "Berita",
        "blogs" => Blog::all()
    ]);
    }

    public function single(Blog $blog){
        return view('/pages/detail-berita', [
        "title" => "Single Post",
        "blog" => $blog
    ]);
    }
}
