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
    Route::get('blog-single', 'BlogController@ctTinTuc');
});


//Shop
Route::group(['prefix' => 'shop'], function () {
    Route::get('', 'ShopController@cuaHang');
    Route::get('product-single', 'ShopController@ctSanPham');
    Route::get('wishlist','ShopController@spUaThich');
});


//Cart
Route::group(['prefix' => 'cart'], function () {
    Route::get('','CartController@gioHang');
    Route::get('checkout', 'CartController@thanhToan');
    Route::get('complete', 'CartController@hoanThanh');
});


//BACKEND
//login
Route::get('login','backend\LoginController@dangNhap' );
Route::get('register', 'backend\LoginController@dangKy');
Route::get('forget-password', 'backend\LoginController@quenMatKhau');

//admin
Route::group(['prefix' => 'admin'], function () {
    Route::get('', 'backend\IndexController@admin');

    //category
    Route::group(['prefix' => 'category'], function () {
        Route::get('', 'backend\CategoryController@danhMuc');
        Route::get('edit', 'backend\CategoryController@suaDanhMuc');
    });

    //product
    Route::group(['prefix' => 'product'], function () {
        Route::get('', 'backend\ProductController@sanPham');
        Route::get('add', 'backend\ProductController@themSanPham');
        Route::get('edit', 'backend\ProductController@suaSanPham');
    });

    //blog
    Route::group(['prefix' => 'blog'], function () {
        Route::get('', 'backend\BlogController@tinTuc');
        Route::get('add', 'backend\BlogController@themTinTuc');
        Route::get('edit', 'backend\BlogController@suaTinTuc');
    });

    //order
    Route::group(['prefix' => 'order'], function () {
        Route::get('', 'backend\OrderController@donHang');
        Route::get('detail', 'backend\OrderController@ctDonHang');
    });
     //user
     Route::group(['prefix' => 'user'], function () {
        Route::get('', 'backend\UserController@dsThanhVien');
        Route::get('register', 'backend\UserController@dsDangKy');
        Route::get('change-password', 'backend\UserController@doiMatKhau');

    });
});
