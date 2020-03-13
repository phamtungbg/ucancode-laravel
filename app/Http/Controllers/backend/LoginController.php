<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    function dangNhap() {
        return view('backend.login.login');
    }

    function dangKy() {
        return view('backend.login.register');
    }

    function quenMatKhau() {
        return view('backend.login.forget_password');
    }
}
