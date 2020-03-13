<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    function gioHang() {
        return view('cart.cart');
    }
    function thanhToan() {
        return view('cart.checkout');
    }
    function hoanThanh(){
        return view('cart.complete');
    }
}
