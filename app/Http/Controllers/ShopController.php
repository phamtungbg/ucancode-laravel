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
        $data['activeDm'] = 0;
        return view('shop.shop',$data);
    }
    function dmCuahang($dmSlug,$dmId){
        $data['sanPham'] = san_pham::where('link_anh','<>','no-img.jpg')->where('danh_muc_id',$dmId)->get();
        $data['danhMuc'] = danh_muc::where('id_cha',1)->get();
        $data['activeDm'] = $dmId;
        return view('shop.shop',$data);
    }

    function ctSanPham($slugSp) {
        $mang = explode('-',$slugSp);
        $idSp = array_pop($mang);
        $data['sanPham'] = san_pham::find($idSp);
        $danhMucId = san_pham::find($idSp)->danh_muc_id;
        $data['spLq'] = san_pham::where('link_anh','<>','no-img.jpg')->where('id','<>',$idSp)->where('danh_muc_id',$danhMucId)->take(4)->get();
        return view('shop.product_single',$data);
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
