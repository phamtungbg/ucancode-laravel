<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    function tinTuc() {
        return view('blog.blog');
    }
    function ctTinTuc() {
        return view('blog.blog_single');
    }
}
