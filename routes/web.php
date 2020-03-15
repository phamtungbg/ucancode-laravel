<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//FRONTEND

    Route::get('','HomeController@trangChu');
    Route::get('about', 'HomeController@thongTin');
    Route::get('contact', 'HomeController@lienHe');

//Blog
Route::group(['prefix' => 'blog'], function () {
    Route::get('','BlogController@tinTuc');
    Route::get('{slugDm}','BlogController@tinTucDm');
    Route::get('{slugTt}/{idDm}', 'BlogController@ctTinTuc');
});


//Shop
Route::group(['prefix' => 'shop'], function () {
    Route::get('', 'ShopController@cuaHang');
    Route::get('{dmSlug}/{dmId}', 'ShopController@dmCuaHang');
    Route::get('wishlist','ShopController@spUaThich');
    Route::post('wishlist','ShopController@postUaThich');
});
Route::get('{slugSp}.html', 'ShopController@ctSanPham');

//Cart
Route::group(['prefix' => 'cart'], function () {
    Route::get('','CartController@gioHang');
    Route::get('add','CartController@addGioHang');
    Route::get('buy-now','CartController@muaNgay');
    Route::get('checkout', 'CartController@thanhToan');
    Route::post('checkout', 'CartController@postThanhToan');
    Route::get('complete', 'CartController@hoanThanh');
    Route::post('giam-gia','CartController@maGiamGia');
    Route::get('del/{rowId}','CartController@xoaGioHang');
    Route::get('update/{rowId}/{qty}','CartController@suaGioHang');
});


//BACKEND
//login
Route::get('login','backend\LoginController@dangNhap' )->middleware('CheckLogout');;
Route::post('login','backend\LoginController@postDangNhap' );
Route::get('logout','backend\LoginController@dangXuat');
Route::get('register', 'backend\LoginController@dangKy');
Route::post('register', 'backend\LoginController@postDangKy');
Route::get('forget-password', 'backend\LoginController@quenMatKhau');
Route::post('forget-password', 'backend\LoginController@postQuenMatKhau');

//admin
Route::group(['prefix' => 'admin','middleware'=>'CheckLogin'], function () {
    Route::get('', 'backend\IndexController@admin');

    //category
    Route::group(['prefix' => 'category'], function () {
        Route::get('', 'backend\CategoryController@danhMuc');
        Route::post('', 'backend\CategoryController@postThemDanhMuc');
        Route::get('edit/{dmId}', 'backend\CategoryController@suaDanhMuc');
        Route::post('edit/{dmId}', 'backend\CategoryController@postSuaDanhMuc');
        Route::get('del/{dmId}', 'backend\CategoryController@xoaDanhMuc');
    });

    //product
    Route::group(['prefix' => 'product'], function () {
        Route::get('', 'backend\ProductController@sanPham');
        Route::get('add', 'backend\ProductController@themSanPham');
        Route::post('add', 'backend\ProductController@postThemSanPham');
        Route::get('edit/{idSp}', 'backend\ProductController@suaSanPham');
        Route::post('edit/{idSp}', 'backend\ProductController@postSuaSanPham');
        Route::get('del/{idSp}', 'backend\ProductController@xoaSanPham');
    });

    //blog
    Route::group(['prefix' => 'blog'], function () {
        Route::get('', 'backend\BlogController@tinTuc');
        Route::get('add', 'backend\BlogController@themTinTuc');
        Route::post('add', 'backend\BlogController@postThemTinTuc');
        Route::get('edit/{idTin}', 'backend\BlogController@suaTinTuc');
        Route::post('edit/{idTin}', 'backend\BlogController@postSuaTinTuc');
        Route::get('del/{idTin}', 'backend\BlogController@xoaTinTuc');
    });

    //order
    Route::group(['prefix' => 'order'], function () {
        Route::get('', 'backend\OrderController@donHang');
        Route::get('detail/{idDonHang}', 'backend\OrderController@ctDonHang');
    });
     //user
     Route::group(['prefix' => 'user'], function () {
        Route::get('', 'backend\UserController@dsThanhVien');
        Route::get('register', 'backend\UserController@dsDangKy');
        Route::get('accept/{idUser}', 'backend\UserController@chapNhan');
        Route::get('del/{idUser}', 'backend\UserController@xoaThanhVien');
        Route::get('change-password/{idUser}', 'backend\UserController@doiMatKhau');
        Route::post('change-password/{idUser}', 'backend\UserController@postDoiMatKhau');
    });
});
