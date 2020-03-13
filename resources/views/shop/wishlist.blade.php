@extends('master.master')
@section('title','Sản phẩm yêu thích')
@section('content')
    <div class="hero-wrap hero-bread" style="background-image: url('images/bg_1.jpg');">
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center">
                <div class="col-md-9 ftco-animate text-center">
                    <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Trang chủ</a></span> <span>Danh sách
                            yêu thích</span></p>
                    <h1 class="mb-0 bread">Danh sách bạn yêu thích</h1>
                </div>
            </div>
        </div>
    </div>

    <section class="ftco-section ftco-cart">
        <div class="container">
            <div class="row">
                <div class="col-md-12 ftco-animate">
                    <div class="cart-list">
                        <table class="table">
                            <thead class="thead-primary">
                                <tr class="text-center">
                                    <th>&nbsp;</th>
                                    <th>Product List</th>
                                    <th>&nbsp;</th>
                                    <th>Price</th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr class="text-center">
                                    <td class="product-remove"><a href="#"><span class="ion-ios-close"></span></a></td>

                                    <td class="image-prod">
                                        <div class="img" style="background-image:url(images/product-1.jpg);"></div>
                                    </td>

                                    <td class="product-name">
                                        <h3>Ớt chuông</h3>
                                        <p>100% Thực phẩm sạch, tập trung chủ yếu với dòng hữu cơ,,thuận tự nhiên được
                                            chọn lọc từ nguồn cung cấp uy tín</p>
                                    </td>

                                    <td class="price">$4.90</td>


                                </tr><!-- END TR-->

                                <tr class="text-center">
                                    <td class="product-remove"><a href="#"><span class="ion-ios-close"></span></a></td>

                                    <td class="image-prod">
                                        <div class="img" style="background-image:url(images/product-1.jpg);"></div>
                                    </td>

                                    <td class="product-name">
                                        <h3>Ớt chuông</h3>
                                        <p>100% Thực phẩm sạch, tập trung chủ yếu với dòng hữu cơ,,thuận tự nhiên được
                                            chọn lọc từ nguồn cung cấp uy tín</p>
                                    </td>

                                    <td class="price">$4.90</td>


                                </tr><!-- END TR-->
                                <tr class="text-center">
                                    <td class="product-remove"><a href="#"><span class="ion-ios-close"></span></a></td>

                                    <td class="image-prod">
                                        <div class="img" style="background-image:url(images/product-1.jpg);"></div>
                                    </td>

                                    <td class="product-name">
                                        <h3>Ớt chuông</h3>
                                        <p>100% Thực phẩm sạch, tập trung chủ yếu với dòng hữu cơ,,thuận tự nhiên được
                                            chọn lọc từ nguồn cung cấp uy tín</p>
                                    </td>

                                    <td class="price">$4.90</td>


                                </tr><!-- END TR-->
                                <tr class="text-center">
                                    <td class="product-remove"><a href="#"><span class="ion-ios-close"></span></a></td>

                                    <td class="image-prod">
                                        <div class="img" style="background-image:url(images/product-1.jpg);"></div>
                                    </td>

                                    <td class="product-name">
                                        <h3>Ớt chuông</h3>
                                        <p>100% Thực phẩm sạch, tập trung chủ yếu với dòng hữu cơ,,thuận tự nhiên được
                                            chọn lọc từ nguồn cung cấp uy tín</p>
                                    </td>

                                    <td class="price">$4.90</td>


                                </tr><!-- END TR-->
                            </tbody>
                        </table>
                    </div>
                </div>
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
@endsection
