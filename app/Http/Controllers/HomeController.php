<?php

namespace App\Http\Controllers;

use App\models\san_pham;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    function trangChu() {
        $data['spNb'] = san_pham::where('link_anh','<>','no-img.jpg')->where('noi_bat',1)->take(8)->get();
        return view('index',$data);
    }
    function thongTin() {
        return view('about');
    }
    function lienHe() {
        return view('contact');
    }
}
