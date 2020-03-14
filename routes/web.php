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
    Route::get('blog-single', 'BlogController@ctTinTuc');
});


//Shop
Route::group(['prefix' => 'shop'], function () {
    Route::get('', 'ShopController@cuaHang');
    Route::get('{dmSlug}/{dmId}', 'ShopController@dmCuaHang');
    Route::get('product-single', 'ShopController@ctSanPham');
    Route::get('wishlist','ShopController@spUaThich');
    Route::post('wishlist','ShopController@postUaThich');
});


//Cart
Route::group(['prefix' => 'cart'], function () {
    Route::get('','CartController@gioHang');
    Route::get('checkout', 'CartController@thanhToan');
    Route::post('checkout', 'CartController@postThanhToan');
    Route::get('complete', 'CartController@hoanThanh');
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
        Route::get('edit', 'backend\CategoryController@suaDanhMuc');
        Route::post('edit', 'backend\CategoryController@postSuaDanhMuc');
    });

    //product
    Route::group(['prefix' => 'product'], function () {
        Route::get('', 'backend\ProductController@sanPham');
        Route::get('add', 'backend\ProductController@themSanPham');
        Route::post('add', 'backend\ProductController@postThemSanPham');
        Route::get('edit', 'backend\ProductController@suaSanPham');
        Route::post('edit', 'backend\ProductController@postSuaSanPham');
    });

    //blog
    Route::group(['prefix' => 'blog'], function () {
        Route::get('', 'backend\BlogController@tinTuc');
        Route::get('add', 'backend\BlogController@themTinTuc');
        Route::post('add', 'backend\BlogController@postThemTinTuc');
        Route::get('edit', 'backend\BlogController@suaTinTuc');
        Route::post('edit', 'backend\BlogController@postSuaTinTuc');
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
        Route::post('change-password', 'backend\UserController@postDoiMatKhau');
    });
});
