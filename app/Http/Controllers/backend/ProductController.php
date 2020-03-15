<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\AddProductRequest;
use App\Http\Requests\EditProductRequest;
use App\models\danh_muc;
use App\models\san_pham;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    function sanPham() {
        $data['sanPham']= san_pham::paginate(8);
        return view('backend.product.listproduct',$data);
    }

    function themSanPham() {
        $data['allDanhMuc'] = danh_muc::where('loai_danh_muc',0)->get();
        return view('backend.product.addproduct',$data);
    }
    function postThemSanPham(AddProductRequest $r) {
        // dd($r->all());
        $sanPham = new san_pham;
        $sanPham->ten=$r->ten;
        $sanPham->link_slug=Str::slug($r->ten, '-');
        $sanPham->gia=$r->gia;
        $sanPham->mieu_ta=$r->mieu_ta;
        $sanPham->giam_gia=$r->giam_gia;
        $sanPham->so_luong=$r->so_luong;
        $sanPham->noi_bat=$r->noi_bat;
        $sanPham->danh_muc_id=$r->danh_muc;
        $sanPham->save();
        if ($r->hasFile('anh')) {
            $file = $r->anh;
            $tenFile = Str::slug($r->ten, '-').'-'.$sanPham->id.'.'.$file->extension(); //extentsion()
            $path = $file->storeAs('upload',$tenFile,'upload');
            $sanPham->link_anh =  $path;
            // $file->storeAs('upload',$tenFile,'upload')
        } else {
            $sanPham->link_anh='upload/no-img.jpg';
        }
        $sanPham->save();
        return redirect('/admin/product')->with('thongao','Đã thêm thành công');
    }

    function suaSanPham($idSp) {
        $data['allDanhMuc'] = danh_muc::where('loai_danh_muc',0)->get();
        $data['sanPham'] = san_pham::find($idSp);
        return view('backend.product.editproduct',$data);
    }
    function postSuaSanPham(EditProductRequest $r,$idSp) {
        // dd($r->all());
        $sanPham = san_pham::find($idSp);
        $sanPham->ten=$r->ten;
        $sanPham->link_slug=Str::slug($r->ten, '-');
        $sanPham->gia=$r->gia;
        $sanPham->mieu_ta=$r->mieu_ta;
        $sanPham->giam_gia=$r->giam_gia;
        $sanPham->so_luong=$r->so_luong;
        $sanPham->noi_bat=$r->noi_bat;
        $sanPham->danh_muc_id=$r->danh_muc;

        if ($r->hasFile('anh')) {
            if ($sanPham->link_anh!='upload/no-img.jpg') {
                unlink($sanPham->link_anh);
            }
            $file = $r->anh;
            $tenFile = Str::slug($r->ten, '-').'-'.$idSp.'.'.$file->extension();
            $path = $file->storeAs('upload',$tenFile,'upload');
            $sanPham->link_anh =  $path;
        }else{                                                              //đổi tên ảnh theo tên sản phẩm mới
            if($r->ten!=''){
                $file = $sanPham->link_anh ;                                //lấy tên cũ của ảnh trong database
                // dd(pathinfo($file)['extension']);
                $duoiFile =pathinfo($file)['extension'];                     //lấy đuôi ảnh là phần tử cuối cùng của mảng
                $tenFile = Str::slug($r->ten, '-').'-'.$idSp.'.'.$duoiFile;  //tên ảnh mới
                rename(public_path($file),public_path('upload/'. $tenFile)); //đổi tên ảnh trong public
                $sanPham->link_anh = 'upload/'.$tenFile;                     // đổi tên ảnh trong database
            }
        }

        $sanPham->save();
        return redirect('/admin/product')->with('thongbao','Đã sửa thành công');
    }

    //xoa sp
    function xoaSanPham($idSp){
        $sanPham = san_pham::find($idSp);
        if ($sanPham->link_anh!='upload/no-img.jpg') {
            unlink($sanPham->link_anh);
        }
        $sanPham->delete();
        return redirect('/admin/product')->with('thongbao','Đã xóa thành công');
    }
}
