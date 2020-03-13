@extends('backend.master.master')
@section('title','Thêm sản phẩm')
@section('product','active')
@section('content')
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Thêm sản phẩm</h1>
            </div>
        </div>
        <!--/.row-->
        <div class="row">
            <div class="col-xs-6 col-md-12 col-lg-12">
                <div class="panel panel-primary">
                    <div class="panel-heading">Thêm sản phẩm</div>
                    <div class="panel-body">
                        <form action="" method="post" enctype="multipart/form-data">
                            @csrf
                        <div class="row" style="margin-bottom:40px">

                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label>Danh mục</label>
                                            <select name="danh_muc" class="form-control">
                                                <option value='1' selected>Sản phẩm</option>
                                                <option value='2'>---|Trái cây</option>
                                                <option value='3'>---|Nước ép</option>
                                                <option value='4'>---|Rau quả</option>
                                                <option value='5'>---|Hạt khô</option>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label>Tên sản phẩm</label>
                                            <input type="text" name="ten" class="form-control">
                                            {{hienLoi($errors,'ten')}}
                                        </div>
                                        <div class="form-group">
                                            <label>Giá sản phẩm</label>
                                            <input type="number" name="gia" class="form-control">
                                            {{hienLoi($errors,'gia')}}
                                        </div>
                                        <div class="form-group">
                                            <label>Số lượng</label>
                                            <input type="number" name="so_luong" class="form-control">
                                            {{hienLoi($errors,'so_luong')}}
                                        </div>
                                        <div class="form-group">
                                            <label>Mức giảm giá</label>
                                            <input type="number" name="giam_gia" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Sản phẩm nổi bật</label>
                                            <select name="featured" class="form-control">
                                                <option value="0">Không</option>
                                                <option value="1">Có</option>
                                            </select>
                                        </div>

                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Ảnh sản phẩm</label>
                                            <input id="img" type="file" name="anh" class="form-control hidden"
                                                onchange="changeImg(this)">
                                                {{hienLoi($errors,'anh')}}
                                            <img id="avatar" class="thumbnail" width="100%" height="350px" src="upload/import-img.png">
                                        </div>
                                    </div>


                        </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Miêu tả</label>
                                        <textarea id="editor" name="mieu_ta" style="width: 100%;height: 100px;"></textarea>
                                    </div>
                                    <button class="btn btn-success" name="add-product" type="submit">Thêm sản phẩm</button>
                                    <button class="btn btn-danger" type="reset">Huỷ bỏ</button>
                                </div>
                            </div>
                        </form>
                        <div class="clearfix"></div>
                    </div>
                </div>

            </div>
        </div>

        <!--/.row-->
    </div>
@endsection
@section('script')
    @parent
    <script>
        function changeImg(input) {
            //Nếu như tồn thuộc tính file, đồng nghĩa người dùng đã chọn file mới
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                //Sự kiện file đã được load vào website
                reader.onload = function (e) {
                    //Thay đổi đường dẫn ảnh
                    $('#avatar').attr('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }
        $(document).ready(function () {
            $('#avatar').click(function () {
                $('#img').click();
            });
        });
    </script>
@endsection
