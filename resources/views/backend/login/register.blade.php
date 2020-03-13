<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Đăng ký</title>
    <base href="/backend/">
	<link href="css/bootstrap.min.css" rel="stylesheet">

	<link href="css/styles.css" rel="stylesheet">
</head>

<body>

	<div class="row">
		<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
			<div class="login-panel panel panel-default">
				<div class="panel-heading">Đăng ký</div>
				<div class="panel-body">
					<form role="form">
						<fieldset>
							<div class="form-group">
                                <p><span><strong>Email</strong></span></p>
								<input class="form-control" placeholder="E-mail" name="email" type="email" autofocus="">
							</div>
							<div class="form-group">
                                <p><span><strong>Password</strong></span></p>
								<input class="form-control" placeholder="Password" name="password" type="password" value="">
							</div>
							<div class="form-group">
                                <p><span><strong>Nhập lại Password</strong></span></p>
								<input class="form-control" placeholder="Nhập lại Password" name="password_conf" type="password" value="">
                            </div>
                            <div class="form-group">
                                <p><span><strong>Họ tên</strong></span></p>
								<input class="form-control" placeholder="Họ tên" name="ho_ten" type="text" value="">
							</div>
							<div class="row">
								<div class="col-md-4">
									<a href="login.html" class="btn btn-success">Quay lại login</a>

								</div>
								<div class="col-md-8 text-right">
									<a href="index.html" class="btn btn-primary">Đăng ký </a>

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
