<?php

namespace App\Http\Controllers\backend;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class LoginController extends Controller
{
    function dangNhap() {
        return view('backend.login.login');
    }
    function postDangNhap(LoginRequest $r) {
        //    dd($r->all());
        $email = $r->email;
        $password = $r->password;
        if (Auth::attempt(['email' => $email, 'password' => $password,'trang_thai'=>1])) {
            return redirect('/admin');
        } else {
            return redirect()->back()->withInput()->withErrors(["email"=>"Email hoặc password không chính xác"]);
        }
    }
    function dangXuat() {
        Auth::logout();
        return redirect('/login');
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
