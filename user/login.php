<!DOCTYPE html>
<html>

<head>
	<title>Timviec365.com</title>
	<!-- Latest compiled and minified CSS & JS -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"
		integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="../asset/css/style.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
		integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>

<body id="bg-blue">
	<div class="container-fluid">
		<div class="row arrow-left">
			<i class="fa fa-2x fa-long-arrow-alt-left"></i>
		</div>
		<div class="row login-main">
			<div class="col-md-4 login-main-left">
				<img src="../asset/images/Group.png" class="img-main-left-top" alt="">
				<img src="../asset/images/Frame.png" class="img-main-left-bot" alt="">
			</div>
			<div class="col-md-8">
				<img src="../asset/images/Gia Sư 365.png" class="img-main-right-top" alt="">
				<h2 class="title-main-right">Đăng nhập</h2>
				<div class="row btn-tabs-login">
					<ul class="nav nav-tabs">
						<li class="nav-item active"><a href="#userlogin" class="btn-users active" data-toggle="tab">Phụ
								huynh</a></li>
						<li class="nav-item"><a href="#teacherlogin" class="btn-teacher" data-toggle="tab">Gia sư</a>
						</li>
					</ul>
				</div>
				<div class="row tab-content">
					<div class="tab-pane fade in active" id="userlogin">
						<form action="" method="POST" role="form" class="form-user-login">
							<div class="row input-border">
								<div class="col-md-11">
									<input class="form-group" type="text" name="user-email"
										placeholder="Nhập địa chỉ Email">
								</div>
								<div class="col-md-1">
									<i class="far fa-envelope icons"></i>
								</div>
							</div>
							<div class="row input-border">
								<div class="col-md-11 ">
									<input class="form-group" type="password" name="user-password"
										placeholder="Nhập mật khẩu">
								</div>
								<div class="col-md-1">
									<i class="fas fa-eye-slash icons"></i>
								</div>
							</div>
						</form>
						<a href="#" class="btn-login">Đăng nhập</a>
						<a href="#" class="btn-forget-pw">Quên mật khẩu?</a>
						<span class="sp-register">Bạn chưa có tài khoản? <a href="#" class="btn-register">ĐĂNG KÝ
								NGAY</a></span>
					</div>
					<div class="tab-pane" id="teacherlogin">
						<form action="" method="POST" role="form" class="form-user-login">
							<div class="row input-border">
								<div class="col-md-11">
									<input class="form-group" type="text" name="user-email"
										placeholder="Nhập địa chỉ Email">
								</div>
								<div class="col-md-1">
									<i class="far fa-envelope"></i>
								</div>
							</div>
							<div class="row input-border">
								<div class="col-md-11">
									<input class="form-group" type="password" name="user-password"
										placeholder="Nhập mật khẩu">
								</div>
								<div class="col-md-1">
									<i class="fas fa-eye-slash"></i>
								</div>
							</div>
						</form>
						<a href="#" class="btn-login">Đăng nhập</a>
						<a href="#" class="btn-forget-pw">Quên mật khẩu?</a>
						<span class="sp-register">Bạn chưa có tài khoản? <a href="#" class="btn-register">ĐĂNG KÝ
								NGAY</a></span>
					</div>
				</div>
			</div>
		</div>
	</div>

</body>

<script src="https://code.jquery.com/jquery.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"
	integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS"
	crossorigin="anonymous"></script>
<script src='https://kit.fontawesome.com/a076d05399.js'></script>

<script>
	$(document).ready(function () {
		$('body').on('click', '.btn-teacher', function (event) {
			$('.btn-teacher').addClass('active');
			$('.btn-users').removeClass('active');
		});
		$('body').on('click', '.btn-users', function (event) {
			$('.btn-users').addClass('active');
			$('.btn-teacher').removeClass('active');
		});
	});
</script>

</html>