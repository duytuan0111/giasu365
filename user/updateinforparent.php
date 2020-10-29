<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cập nhật thông tin phụ huynh</title>

    <!-- Latest compiled and minified CSS & JS -->
    <link rel="stylesheet" href="../asset/css/style.css">
    <link rel="stylesheet" media="screen" href="https://netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery.js"></script>
    <script src="https://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

</head>

<body>
    <?php include_once "../header-parent.php"; ?>
    <div id="manager">
        <?php include_once "../nav-bar-parent.php"; ?>
        <div class="manager">
            <div class="received-content1">
                <p>Thông tin cá nhân</p>
            </div>
            <div class="invited-teach2-v2">
                <hr class="hr1">
                <hr class="hr2">
            </div>
            <div class="infor-parent">
                <div class="input-row row-file infor-parent-v1">
                    <a href="#" id="file-img" class="file-img"><img src="../asset/images/Group 2764 (1).png" alt=""></a>
                    <input type="file" id="img-avt" name="img-avt" style="display: none">
                </div>
                <div class="infor-parent-form">
                    <form action="" method="POST" role="form" class="row">
                        <div class="form-group information-input col-md-12 col-sm-12">
                            <label for="">Số điện thoại đăng nhập <span class="red">*</span></label>
                            <input type="text" class="form-control" id="">
                        </div>
                        <div class="form-group information-input col-md-12 col-sm-12">
                            <label for="">Email</label>
                            <input type="text" class="form-control" id="">
                        </div>
                        <div class="form-group information-input col-md-12 col-sm-12">
                            <label for="">Mật khẩu <span class="red">*</span></label>
                            <i class="fa fa-eye-slash icon-infor" aria-hidden="true"></i>
                            <input type="password" class="form-control" id="">
                        </div>
                    </form>
                </div>
            </div>
            <div id="infor-parent">
                <div class="infor-parent-form">
                    <form action="" method="POST" role="form" class="row">
                        <div class="form-group information-input col-md-12 col-sm-12 col-xs-12">
                            <label for="">Số điện thoại đăng nhập <span class="red">*</span></label>
                            <input type="text" class="form-control" id="">
                        </div>
                        <div class="form-group information-input col-md-12 col-sm-12 col-xs-12">
                            <label for="">Mật khẩu <span class="red">*</span></label>
                            <input type="password" class="form-control" id="">
                        </div>
                    </form>
                </div>
                <div class="input-row row-file infor-parent-v1">
                    <a href="#" id="file-img" class="file-img"><img src="../asset/images/Group 2764 (1).png" alt=""></a>
                    <input type="file" id="img-avt" name="img-avt" style="display: none">
                </div>
            </div>
            <div class="infor-parent-form2">
                <form action="" method="POST" role="form" class="row">
                    <div class="form-group information-input col-md-6 col-sm-6 col-xs-12">
                        <label for="">Họ và tên <span class="red">*</span></label>
                        <input type="text" class="form-control" id="" placeholder="Nhập họ và tên">
                    </div>
                    <div class="form-group information-input infor-input  col-sm-6 col-xs-12">
                        <label for="">Email</label>
                        <input type="email" class="form-control" id="" placeholder="Nhập địa chỉ Email">
                    </div>
                    <div class="form-group information-input col-md-6 col-sm-6 col-xs-12">
                        <label for="">Giới tính <span class="red">*</span></label>
                        <select name="sex" id="" class="form-control">
                            <option value="1">Chọn giới tính</option>
                            <option value="1">Nam</option>
                            <option value="2">Nữ</option>
                        </select>
                    </div>
                    <div class="form-group information-input col-md-6 col-sm-6 col-xs-12">
                        <label for="">Ngày sinh <span class="red">*</span></label>
                        <input type="date" class="form-control" id="" name="">
                    </div>
                    <div class="form-group information-input col-md-6 col-sm-12 col-xs-12">
                        <label for="">Tỉnh/ thành phố <span class="red">*</span></label>
                        <select class="form-control" name="sex">
                            <option selected="">Chọn Tỉnh/ thành phố</option>
                        </select>
                    </div>
                    <div class="form-group information-input col-md-12 col-sm-12 col-xs-12">
                        <label for="">Địa chỉ cụ thể <span class="red">*</span></label>
                        <input type="text" class="form-control" id="" placeholder="Nhập địa chỉ cụ thể">
                    </div>
                </form>
            </div>
            
            <div class="div-reg">
                <a href="#" class="btn-user-register">Cập nhật</a>
            </div>
        </div>
    </div>
    <?php include_once "../inc_footer.php"; ?>
</body>
</html>