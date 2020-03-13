<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    function dsThanhVien() {
        echo 'Danh sách thành viên';
    }

    function dsDangKy() {
        echo 'Danh sách đăng ký';
    }

    function doiMatKhau() {
        echo 'Đổi mật khẩu';
    }
}
