@extends('backend.master.master')
@section('title','Thành viên đăng ký')
@section('user','active')
@section('content')
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked home">
							<use xlink:href="#stroked-home"></use>
						</svg></a></li>
				<li class="active">Danh sách đăng ký</li>
			</ol>
		</div>
		<!--/.row-->

		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Danh sách đăng ký</h1>
			</div>
		</div>
		<!--/.row-->

		<div class="row">
			<div class="col-xs-12 col-md-12 col-lg-12">

				<div class="panel panel-primary">

					<div class="panel-body">
						<div class="bootstrap-table">
							<div class="table-responsive">

								<table class="table table-bordered" style="margin-top:20px;">

									<thead>
										<tr class="bg-primary">
											<th>ID</th>
											<th>Email</th>
											<th>Họ tên</th>
											<th width='20%'>Tùy chọn</th>
										</tr>
									</thead>
									<tbody>
                                        @foreach ($user as $item)
										<tr>
                                            <td>{{$item->id}}</td>
                                            <td>{{$item->email}}</td>
                                            <td>{{$item->ho_ten}}</td>
											<td>
												<a href="admin/user/accept/{{$item->id}}" class="btn btn-primary"><i class="fa fa-pencil"
														aria-hidden="true"></i> Xác nhận</a>
												<a href="admin/user/del/{{$item->id}}" class="btn btn-danger"><i class="fa fa-trash"
														aria-hidden="true"></i> Xóa</a>
											</td>
                                        </tr>
                                        @endforeach

									</tbody>
								</table>
								<div align='right'>
									<ul class="pagination">
										{{$user->links()}}
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
