<?php

namespace App\Http\Controllers;
use App\Http\Requests\CheckoutRequest;
use Illuminate\Http\Request;

class CartController extends Controller
{
    function gioHang() {
        return view('cart.cart');
    }

    function thanhToan() {
        return view('cart.checkout');
    }
    function postThanhToan(CheckoutRequest $r) {
        dd($r->all());
    }

    function hoanThanh(){
        return view('cart.complete');
    }
}
