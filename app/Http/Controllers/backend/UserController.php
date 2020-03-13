<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    function dsThanhVien() {
        return view('backend.user.listuser');
    }

    function dsDangKy() {
        return view('backend.user.register_user');
    }

    function doiMatKhau() {
        return view('backend.user.change_password');
    }
}
