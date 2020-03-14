@extends('backend.master.master')
@section('title','Danh sách thành viên')
@section('user','active')
@section('content')
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked home">
							<use xlink:href="#stroked-home"></use>
						</svg></a></li>
				<li class="active">Danh sách thành viên</li>
			</ol>
		</div>
		<!--/.row-->

		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Danh sách thành viên</h1>
			</div>
		</div>
		<!--/.row-->

		<div class="row">
			<div class="col-xs-12 col-md-12 col-lg-12">

				<div class="panel panel-primary">

					<div class="panel-body">
						<div class="bootstrap-table">
							<div class="table-responsive">
                                @if (session('thongBao'))
								<div class="alert bg-success" role="alert">
									<svg class="glyph stroked checkmark">
										<use xlink:href="#stroked-checkmark"></use>
									</svg>{{session('thongBao')}}<a href="#" class="pull-right"><span
											class="glyphicon glyphicon-remove"></span></a>
                                </div>
                                @endif
								<a href="/admin/user/register" class="btn btn-primary">Danh sách đăng ký</a>
								<table class="table table-bordered" style="margin-top:20px;">

									<thead>
										<tr class="bg-primary">
											<th>ID</th>
											<th>Email</th>
											<th>Họ tên</th>
											<th>Quyền</th>
											<th width='20%'>Tùy chọn</th>
										</tr>
									</thead>
									<tbody>
                                        @foreach ($user as $item)
										<tr>
											<td>{{$item->id}}</td>
                                            <td>{{$item->email}}</td>
                                            <td>{{$item->ho_ten}}</td>
                                            <td>{{$item->quyen}}</td>
											<td>
												<a href="/admin/user/change-password/{{$item->id}}" class="btn btn-warning"><i class="fa fa-pencil"
														aria-hidden="true"></i> Đổi mật khẩu</a>
												<a href="admin/user/del/{{$item->id}}" class="btn btn-danger"><i class="fa fa-trash"
														aria-hidden="true"></i> Xóa</a>
											</td>
										</tr>
                                        @endforeach
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
@endsection

@section('script')
    @parent
@endsection
