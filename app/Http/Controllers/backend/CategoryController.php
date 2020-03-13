<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\AddCategoryRequest;
use App\Http\Requests\EditCategoryRequest;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    function danhMuc() {
        return view('backend.category.category');
    }
    function postThemDanhMuc(AddCategoryRequest $r) {
        // $r->validate([
        //     "ten"=>"required",
        //     "anh"=>"image"
        // ],[
        //     "ten.required"=>"Không được để trống tên danh mục",
        //     "anh.image"=>"Ảnh không đúng định dạng"
        // ]);
        dd($r->all());
    }
    function suaDanhMuc() {
        return view('backend.category.editcategory');
    }
    function postSuaDanhMuc(EditCategoryRequest $r) {
        dd($r->all());
    }
}
