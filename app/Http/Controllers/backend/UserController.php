<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\ChangePasswordRequest;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    function dsThanhVien() {
        $data['user'] = User::where('trang_thai',1)->get();
        return view('backend.user.listuser',$data);
    }

    function dsDangKy() {
        $data['user'] = User::where('trang_thai',0)->get();
        return view('backend.user.register_user',$data);
    }

    function doiMatKhau() {
        return view('backend.user.change_password');
    }
    function postDoiMatKhau(ChangePasswordRequest $r){

    }
}
