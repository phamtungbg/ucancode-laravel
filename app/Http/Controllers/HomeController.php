<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    function trangChu() {
        return view('index');
    }
    function thongTin() {
        return view('about');
    }
    function lienHe() {
        return view('contact');
    }
}
