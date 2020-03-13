<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Quản trị - Store</title>
    <base href="/backend/">
    <!-- css -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href="css/styles.css" rel="stylesheet">
    <!--Icons-->
    <script src="js/lumino.glyphs.js"></script>
    <link rel="stylesheet" href="Awesome/css/all.css">
</head>

<body>
    <!-- header -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="#"><span>UCANCODE </span>Admin</a>
                <ul class="user-menu">
                    <li class="dropdown pull-right">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><svg class="glyph stroked male-user">
                                <use xlink:href="#stroked-male-user"></use>
                            </svg> admin <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#"><svg class="glyph stroked male-user">
                                        <use xlink:href="#stroked-male-user"></use>
                                    </svg>Thông tin</a></li>
                            <li><a href="login.html"><svg class="glyph stroked cancel">
                                        <use xlink:href="#stroked-cancel"></use>
                                    </svg> Logout</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div><!-- /.container-fluid -->
    </nav>
    <!-- header -->
    <!-- sidebar left-->
    <div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
        <form role="search">
        </form>
        <ul class="nav menu">
            <li class="active"><a href="index.html"><svg class="glyph stroked dashboard-dial">
                        <use xlink:href="#stroked-dashboard-dial"></use>
                    </svg> Tổng quan</a></li>
            <li><a href="category.html"><svg class="glyph stroked clipboard with paper">
                        <use xlink:href="#stroked-clipboard-with-paper" /></svg> Danh Mục</a></li>
            <li><a href="blog.html"><svg class="glyph stroked app window with content">
                        <use xlink:href="#stroked-app-window-with-content" /></svg> Tin tức</a></li>
            <li><a href="listproduct.html"><svg class="glyph stroked bag">
                        <use xlink:href="#stroked-bag"></use>
                    </svg> Sản phẩm</a></li>
            <li><a href="order.html"><svg class="glyph stroked notepad ">
                        <use xlink:href="#stroked-notepad" /></svg> Đơn hàng</a></li>
            <li role="presentation" class="divider"></li>
            <li><a href="listuser.html"><svg class="glyph stroked male-user">
                        <use xlink:href="#stroked-male-user"></use>
                    </svg> Quản lý thành viên</a></li>

        </ul>

    </div>
    <!--/. end sidebar left-->

    <!--main-->
    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
        <div class="row">
            <ol class="breadcrumb">
                <li><a href="#"><svg class="glyph stroked home">
                            <use xlink:href="#stroked-home"></use>
                        </svg></a></li>
                <li class="active">Danh sách tin tức</li>
            </ol>
        </div>
        <!--/.row-->

        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Danh sách tin tức</h1>
            </div>
        </div>
        <!--/.row-->

        <div class="row">
            <div class="col-xs-12 col-md-12 col-lg-12">

                <div class="panel panel-primary">

                    <div class="panel-body">
                        <div class="bootstrap-table">
                            <div class="table-responsive">
                                <a href="addblog.html" class="btn btn-primary">Thêm tin tức</a>
                                <div class="alert bg-success" role="alert">
                                    <svg class="glyph stroked checkmark">
                                        <use xlink:href="#stroked-checkmark"></use>
                                    </svg>Đã thêm thành công<a href="#" class="pull-right"><span
                                            class="glyphicon glyphicon-remove"></span></a>
                                </div>


                                <form method="POST">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label for="">Tìm theo danh mục: </label>
                                                <select class="form-control" name="danh_muc" id="">
                                                    <option>Tin tức</option>
                                                    <option>---|Trái cây</option>
                                                    <option>---|Nước ép</option>
                                                    <option>---|Rau củ</option>
                                                    <option>---|Đồ khô</option>
                                                </select>
                                            </div>
                                            <button type="submit" class="btn btn-primary">Tìm kiếm</button>
                                        </div>

                                    </div>
                                </form>

                                <table class="table table-bordered" style="margin-top:20px;">

                                    <thead>
                                        <tr class="bg-primary">
                                            <th>ID</th>
                                            <th>Thông tin tin tức</th>
                                            <th>Danh mục</th>
                                            <th>Người đăng</th>
                                            <th>Ngày đăng</th>
                                            <th width='18%'>Tùy chọn</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>
                                                <div class="row">
                                                    <div class="col-md-3"><img src="upload/dau-tay-1.jpg" alt="Áo đẹp"
                                                            width="100px" class="thumbnail"></div>
                                                    <div class="col-md-9">
                                                        <p> <strong>Những trái hoa quả tốt cho sức khỏe</strong> </p>
                                                        <p>Đằng sau những ngọn núi, nơi chứa những sản phẩm tốt</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>Trái cây</td>
                                            <td>Admin</td>
                                            <td>3-3-2020</td>
                                            <td>
                                                <a href="editblog.html" class="btn btn-warning"><i class="fa fa-pencil"
                                                        aria-hidden="true"></i> Sửa</a>
                                                <a href="#" class="btn btn-danger"><i class="fa fa-trash"
                                                        aria-hidden="true"></i> Xóa</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td>
                                                <div class="row">
                                                    <div class="col-md-3"><img src="upload/dau-tay-1.jpg" alt="Áo đẹp"
                                                            width="100px" class="thumbnail"></div>
                                                    <div class="col-md-9">
                                                        <p> <strong>Những trái hoa quả tốt cho sức khỏe</strong> </p>
                                                        <p>Đằng sau những ngọn núi, nơi chứa những sản phẩm tốt</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>Trái cây</td>
                                            <td>Admin</td>
                                            <td>3-3-2020</td>
                                            <td>
                                                <a href="#" class="btn btn-warning"><i class="fa fa-pencil"
                                                        aria-hidden="true"></i> Sửa</a>
                                                <a href="#" class="btn btn-danger"><i class="fa fa-trash"
                                                        aria-hidden="true"></i> Xóa</a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div align='right'>
                                    <ul class="pagination">
                                        <li class="page-item"><a class="page-link" href="#">Trở lại</a></li>
                                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item"><a class="page-link" href="#">tiếp theo</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>

                    </div>
                </div>
                <!--/.row-->


            </div>
        </div>
    </div>
    <!--end main-->

    <!-- javascript -->
    <script src="js/jquery-1.11.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/chart.min.js"></script>
    <script src="js/chart-data.js"></script>

</body>

</html>
