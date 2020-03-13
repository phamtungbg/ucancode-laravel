<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShopController extends Controller
{
    function cuaHang() {
        return view('shop.shop');
    }
    function ctSanPham() {
        return view('shop.product_single');
    }
    function spUaThich() {
        return view('shop.wishlist');
    }
}
