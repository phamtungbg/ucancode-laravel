<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\AddProductRequest;
use App\Http\Requests\EditProductRequest;
use App\models\san_pham;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    function sanPham() {
        $data['sanPham']= san_pham::all();
        return view('backend.product.listproduct',$data);
    }

    function themSanPham() {
        return view('backend.product.addproduct');
    }
    function postThemSanPham(AddProductRequest $r) {
        dd($r->all());
    }

    function suaSanPham() {
        return view('backend.product.editproduct');
    }
    function postSuaSanPham(EditProductRequest $r) {
        dd($r->all());
    }
}
