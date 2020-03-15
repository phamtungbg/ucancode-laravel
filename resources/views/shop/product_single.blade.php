@extends('master.master')
@section('title','Chi tiết sản phẩm')
@section('content')
    <div class="hero-wrap hero-bread" style="background-image: url('images/bg_1.jpg');">
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center">
                <div class="col-md-9 ftco-animate text-center">
                    <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Trang chủ</a></span> <span
                            class="mr-2"><a href="index.html">Sản phẩm</a></span> <span>Chi tiết sản phẩm</span></p>
                    <h1 class="mb-0 bread">Chi tiết sản phẩm</h1>
                </div>
            </div>
        </div>
    </div>

    <section class="ftco-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mb-5 ftco-animate">
                    <a href="/{{$sanPham->link_anh}}" class="image-popup"><img src="/{{$sanPham->link_anh}}" class="img-fluid"
                            alt="Colorlib Template"></a>
                </div>
                <div class="col-lg-6 product-details pl-md-5 ftco-animate">
                    <h3>{{$sanPham->ten}}</h3>
                    <div class="rating d-flex">
                        <p class="text-left mr-4">
                            <a href="#" class="mr-2">5.0</a>
                            <a href="#"><span class="ion-ios-star-outline"></span></a>
                            <a href="#"><span class="ion-ios-star-outline"></span></a>
                            <a href="#"><span class="ion-ios-star-outline"></span></a>
                            <a href="#"><span class="ion-ios-star-outline"></span></a>
                            <a href="#"><span class="ion-ios-star-outline"></span></a>
                        </p>
                        <p class="text-left mr-4">
                            <a href="#" class="mr-2" style="color: #000;">100 <span
                                    style="color: #bbb;">Rating</span></a>
                        </p>
                        <p class="text-left">
                            <a href="#" class="mr-2" style="color: #000;">500 <span style="color: #bbb;">Sold</span></a>
                        </p>
                    </div>
                    <p class="price"><span>{{number_format($sanPham->gia-($sanPham->gia*$sanPham->giam_gia/100),0,'','.')}} VND</span></p>
                    <p>{{$sanPham->mieu_ta}}
                    </p>
                    <form action="/cart/add" method="get" id="them-gio">
                    <div class="row mt-4">
                        <div class="col-md-6">
                            <div class="form-group d-flex">
                                <!-- <div class="select-wrap">
	                  <div class="icon"><span class="ion-ios-arrow-down"></span></div>
	                  <select name="" id="" class="form-control">
	                  	<option value="">Nhỏ</option>
	                    <option value="">Trung bình</option>
	                    <option value="">Lớn</option>
	                    <option value="">Rất lớn</option>
	                  </select>
	                </div> -->
                            </div>
                        </div>
                        <div class="w-100"></div>
                        <div class="input-group col-md-6 d-flex mb-3">
                            <span class="input-group-btn mr-2">
                                <button type="button" class="quantity-left-minus btn" data-type="minus" data-field="">
                                    <i class="ion-ios-remove"></i>
                                </button>
                            </span>
                            <input type="text" id="quantity" name="quantity" class="form-control input-number" value="1"
                                min="1" max="100">
                            <span class="input-group-btn ml-2">
                                <button type="button" class="quantity-right-plus btn" data-type="plus" data-field="">
                                    <i class="ion-ios-add"></i>
                                </button>
                            </span>
                        </div>
                        <div class="w-100"></div>
                        <div class="col-md-12">
                            @if ($sanPham->so_luong==0)
                        <p style="color: red;">Sản phẩm đã hết hàng</p>
                        @else
                        <p style="color: #000;">{{$sanPham->so_luong}} kg trong kho</p>
                        @endif
                        </div>
                        <input type="hidden" name="id" value="{{$sanPham->id}}">
                    </div>
                    <p><a onclick="return themGio()" class="btn btn-black py-3 px-5">Thêm vào giỏ</a></p>
                </form>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center mb-3 pb-3">
                <div class="col-md-12 heading-section text-center ftco-animate">
                    <span class="subheading">Danh sách sản phẩm</span>
                    <h2 class="mb-4">Sản phẩm liên quan</h2>
                    <p>Đằng sau những ngọn núi, nơi chứa những sản phẩm tốt</p>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                @foreach ($spLq as $item)
                <div class="col-md-6 col-lg-3 ftco-animate">
                    <div class="product">
                        <a href="/{{$item->link_slug}}-{{$item->id}}.html" class="img-prod"><img class="img-fluid" src="/{{$item->link_anh}}"
                                alt="Colorlib Template">
                                @if ($item->giam_gia!='')
                                <span class="status">{{$item->giam_gia}}%</span>
                                @endif
                            <div class="overlay"></div>
                        </a>
                        <div class="text py-3 pb-4 px-3 text-center">
                            <h3><a href="/{{$item->link_slug}}-{{$item->id}}.html">{{$item->ten}}</a></h3>
                            <div class="d-flex">
                                <div class="pricing">
                                    <p class="price"><span @if ($item->giam_gia!='') class="mr-2 price-dc" @endif>{{number_format($item->gia,0,'','.')}} VND</span>
                                        @if ($item->giam_gia!='')
                                        <span class="price-sale">{{number_format($item->gia*(100-$item->giam_gia)/100,0,'','.')}} VND</span>
                                        @endif
                                    </p>

                                </div>
                            </div>
                            <div class="bottom-area d-flex px-3">
                                <div class="m-auto d-flex">
                                    <a href="/{{$item->link_slug}}-{{$item->id}}.html"
                                        class="add-to-cart d-flex justify-content-center align-items-center text-center">
                                        <span><i class="ion-ios-menu"></i></span>
                                    </a>
                                    <a onclick="return buyNow('{{$item->id}}','{{$item->ten}}')" href="/" class="buy-now d-flex justify-content-center align-items-center mx-1">
                                        <span><i class="ion-ios-cart"></i></span>
                                    </a>
                                    <a onclick="return wishlist('{{$item->ten}}','{{$item->id}}')" href="/" class="heart d-flex justify-content-center align-items-center ">
                                        <span><i class="ion-ios-heart"></i></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-no-pt ftco-no-pb py-5 bg-light">
        <div class="container py-4">
            <div class="row d-flex justify-content-center py-5">
                <div class="col-md-6">
                    <h2 style="font-size: 22px;" class="mb-0">Đăng ký để nhận những sản phẩm mới</h2>
                    <span>Cập nhật cửa hàng mới , sản phẩm mới</span>
                </div>
                <div class="col-md-6 d-flex align-items-center">
                    <form action="#" class="subscribe-form">
                        <div class="form-group d-flex">
                            <input type="text" class="form-control" placeholder="Email của bạn">
                            <input type="submit" value="Đăng ký" class="submit px-3">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('script')
    @parent
    <script>
        $(document).ready(function(){

        var quantitiy=0;
            $('.quantity-right-plus').click(function(e){

                // Stop acting like a button
                e.preventDefault();
                // Get the field name
                var quantity = parseInt($('#quantity').val());

                // If is not undefined

                    $('#quantity').val(quantity + 1);


                    // Increment

            });

                $('.quantity-left-minus').click(function(e){
                // Stop acting like a button
                e.preventDefault();
                // Get the field name
                var quantity = parseInt($('#quantity').val());

                // If is not undefined

                    // Increment
                    if(quantity>0){
                    $('#quantity').val(quantity - 1);
                    }
            });

        });
    </script>
    <script>
        function themGio() {
            return document.getElementById("them-gio").submit();
        }
    </script>

<script>
    function wishlist(ten,id) {
        localStorage.setItem(ten, id);
        alert('Đã thêm vào wishlist');

        var id = [];
        for ( var i = 0, leng = localStorage.length; i < leng; i++ ) {
            id.push(localStorage.getItem(localStorage.key(i))) ;
            }
            console.log(id);

        $.post(
            "/shop/wishlist",
            {id:id,
            "_token": "{{ csrf_token() }}"},
            function(data){
                // window.location.reload();
            }
        )
        return false;
    }
</script>
<script>
    function buyNow(id,ten){
    $.get(
        "/cart/buy-now",
        {id:id},
        function(data) {
            if (data=='add success') {
                alert('Đã thêm sản phẩm '+ten+ ' vào giỏ hàng!');
                window.location.reload();
            }else{
                alert('Mua nhanh thất bại');

            }
        }
    )
    return false;
}
</script>
@endsection
