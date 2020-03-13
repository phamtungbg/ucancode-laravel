<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    function gioHang() {
        echo 'Giỏ hàng';
    }
    function thanhToan() {
        echo 'Thanh toán';
    }
    function hoanThanh(){
        echo 'Hoàn thành thanh toán';
    }
}
