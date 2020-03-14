<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <base href="/backend/">
	<link href="css/bootstrap.min.css" rel="stylesheet">

	<link href="css/styles.css" rel="stylesheet">
</head>

<body>

	<div class="row">
		<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
			<div class="login-panel panel panel-default">
				<div class="panel-heading">Log in</div>
				<div class="panel-body">
                    @if (session('thongBao'))
                        <div class="alert alert-success" role="alert">
                            <strong>{{session('thongBao')}}</strong>
                        </div>
                    @endif
					<form role="form" method="POST">
                        @csrf
						<fieldset>
							<div class="form-group">
                                <input class="form-control" placeholder="E-mail" name="email" type="email" autofocus="" value="{{old('email')}}">
                                {{hienLoi($errors,'email')}}
							</div>
							<div class="form-group">
                                <input class="form-control" placeholder="Password" name="password" type="password" value="">
                                {{hienLoi($errors,'password')}}
							</div>
							<div class="checkbox">
								<label>
									<input name="remember" type="checkbox" value="Remember Me">Remember Me
								</label>
							</div>
							<div class="row">
								<div class="col-md-4">
									<button type="submit" class="btn btn-primary">Login</button>

								</div>
								<div class="col-md-8 text-right">
									<a href="/register" class="btn btn-success">Đăng ký</a>
									<a href="/forget-password" class="btn btn-danger">Quên mật khẩu</a>
								</div>
							</div>


							</div>


						</fieldset>
					</form>
				</div>
			</div>
		</div><!-- /.col-->
	</div><!-- /.row -->
</body>

</html>
