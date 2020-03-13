<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    function tinTuc() {
        echo 'Tin tức';
    }
    function ctTinTuc() {
        echo 'Chi tiết tin tức';
    }
}
