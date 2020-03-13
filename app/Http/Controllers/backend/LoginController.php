<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    function dangNhap() {
        echo 'đăng nhập';
    }

    function dangKy() {
        echo 'đăng ký';
    }

    function quenMatKhau() {
        echo 'quên mật khẩu';
    }
}
