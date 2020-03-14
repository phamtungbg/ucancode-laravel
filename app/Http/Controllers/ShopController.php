<?php

namespace App\Http\Controllers;

use App\models\danh_muc;
use App\models\san_pham;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    function cuaHang() {
        $data['sanPham'] = san_pham::where('link_anh','<>','no-img.jpg')->get();
        $data['danhMuc'] = danh_muc::where('id_cha',1)->get();

        return view('shop.shop',$data);
    }


    function ctSanPham() {
        return view('shop.product_single');
    }
    function spUaThich() {
        return view('shop.wishlist');
    }
}
