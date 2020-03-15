<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\AddCategoryRequest;
use App\Http\Requests\EditCategoryRequest;
use App\models\danh_muc;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    function danhMuc() {
        $data['allDanhMuc'] = danh_muc::all();
        return view('backend.category.category',$data);
    }
    function postThemDanhMuc(AddCategoryRequest $r) {
        // $r->validate([
        //     "ten"=>"required",
        //     "anh"=>"image"
        // ],[
        //     "ten.required"=>"Không được để trống tên danh mục",
        //     "anh.image"=>"Ảnh không đúng định dạng"
        // ]);
        // dd($r->all());
        $danhMuc = new danh_muc;
        $danhMuc->ten = $r->ten;
        $danhMuc->link_slug = Str::slug($r->ten, '-');
        $danhMuc->id_cha = $r->danh_muc;
        $danhMuc->loai_danh_muc = danh_muc::find($r->danh_muc)->loai_danh_muc;

        $danhMuc->save();
        if ($r->hasFile('anh')) {
            $file = $r->anh;
            $tenFile = Str::slug($r->ten, '-').'-'.$danhMuc->id.'.'.$file->extension();
            $path = $file->storeAs('upload',$tenFile,'upload');
            $danhMuc->link_anh = $path;

        } else {
            $danhMuc->link_anh='upload/no-img.jpg';

        }
        $danhMuc->save();
        return redirect()->back()->with('thongBao','Đã thêm thành công');
    }
    function suaDanhMuc($dmId) {
        $data['danhMuc'] = danh_muc::find($dmId);
        $data['allDanhMuc'] = danh_muc::all();
        return view('backend.category.editcategory',$data);
    }
    function postSuaDanhMuc(EditCategoryRequest $r,$dmId) {
        $danhMuc = danh_muc::find($dmId);
        $danhMuc->ten = $r->ten;
        $danhMuc->link_slug = Str::slug($r->ten, '-');
        $danhMuc->id_cha = $r->danh_muc;
        $danhMuc->loai_danh_muc = danh_muc::find($r->danh_muc)->loai_danh_muc;

        if ($r->hasFile('anh')) {
            if ($danhMuc->link_anh!='upload/no-img.jpg') {
                unlink($danhMuc->link_anh);
            }
            $file = $r->anh;
            $tenFile = Str::slug($r->ten, '-').'-'.$dmId.'.'.$file->extension();
            $path = $file->storeAs('upload',$tenFile,'upload');
            $danhMuc->link_anh = $path;
        }else{
            if($r->ten!=''){
                $file = $danhMuc->link_anh;
                $duoiAnh = pathinfo($file)['extension'];
                $tenAnh = Str::slug($r->ten, '-').'-'.$dmId.'.'.$duoiAnh;
                rename(public_path( $file),public_path('upload/'. $tenAnh));
                $danhMuc->link_anh = 'upload/'.$tenAnh;
            }
        }
        $danhMuc->save();
        return redirect()->back()->with('thongBao','Đã sửa thành công');
    }

    function xoaDanhMuc($dmId){
        $danhMuc = danh_muc::find($dmId);
        if ($danhMuc->link_anh!='upload/no-img.jpg') {
            unlink($danhMuc->link_anh);
        }
        $danhMuc->delete();
        return redirect('/admin/category')->with('thongBao','Đã xóa thành công');
    }
}
