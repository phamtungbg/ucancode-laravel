<?php

namespace App\Http\Controllers\backend;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    function dangNhap() {
        return view('backend.login.login');
    }
    function postDangNhap(LoginRequest $r) {
           dd($r->all());
        }

    function dangKy() {
        return view('backend.login.register');
    }
    function postDangKy(RegisterRequest $r){

    }

    function quenMatKhau() {
        return view('backend.login.forget_password');
    }
    function postQuenMatKhau(Request $r){

    }
}
