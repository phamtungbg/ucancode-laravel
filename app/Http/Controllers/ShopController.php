<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShopController extends Controller
{
    function cuaHang() {
        echo 'Cửa hàng';
    }
    function ctSanPham() {
        echo 'Chi tiết sản phẩm';
    }
    function spUaThich() {
        echo 'Sản phẩm ưa thích';
    }
}
