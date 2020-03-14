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
        $data=[];
        if (session()->has('id')) {

            $data['sanPham'] = san_pham::whereIn('id',session('id')[0])->get();
        }

        return view('shop.wishlist',$data);
    }
    function postUaThich(request $r) {
        session()->forget('id');
        if (isset($r->id)) {
            $r->session()->push('id',$r->id);
        }
        return 'success';
    }
}
