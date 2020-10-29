<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cập nhật thông tin</title>
    <link rel="stylesheet" href="../asset/css/style.css">
    <link rel="stylesheet" media="screen" href="https://netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery.js"></script>
    <script src="https://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>


</head>

<body>
    <?php include_once "../inc_header.php"; ?>
    <div class="update-information">
        <?php include_once "../inc_nav-bar.php"; ?>
        <div class="information1">
            <div class="received-content1">
                <p>Thông tin đăng nhập</p>
            </div>
            <div class="invited-teach2-v2">
                <hr class="hr1">
                <hr class="hr2">
            </div>
            <div class="information2">
                <div class="information-form">
                    <form action="" method="POST" role="form" class="row">
                        <div class="form-group information-input col-sm-9 col-xs-12">
                            <label for="">Số điện thoại đăng nhập <span class="red">*</span></label>
                            <input type="text" class="form-control" id="">
                        </div>
                        <div class="form-group information-input col-sm-9 col-xs-12">
                            <label for="">Mật khẩu <span class="red">*</span></label>
                            <i class="fa fa-eye-slash icon-information" aria-hidden="true"></i>
                            <input type="password" class="form-control" id="">
                        </div>
                    </form>
                </div>
                <div class="input-row row-file infomation2-v1">
                    <a href="#" id="file-img"><img src="../asset/images/Group 2764.png" alt=""></a>
                    <input type="file" id="img-avt" name="img-avt" style="display: none">
                </div>
            </div>
            <div class="received-content1">
                <p>Thông tin cá nhân</p>
            </div>
            <div class="invited-teach2-v2">
                <hr class="hr1">
                <hr class="hr2">
            </div>
            <div class="information3">
                <form action="" method="POST" role="form" class="row form">
                    <div class="form-group information-input1 col-sm-12 col-xs-12 label-form">
                        <label for="">Họ và tên <span class="red">*</span></label>
                        <input type="text" class="form-control" id="">
                    </div>
                    <div class="form-group information-input1 col-md-12 col-sm-6 col-xs-12 right1">
                        <label for="">Giới tính <span class="red">*</span></label>
                        <select name="sex" id="" class="form-control">
                            <option value="1">Nam</option>
                            <option value="2">Nữ</option>
                        </select>
                    </div>
                    <div class="form-group information-input1 col-md-12 col-sm-6 col-xs-12 label-form">
                        <label for="">Ngày sinh <span class="red">*</span></label>
                        <input type="date" class="form-control" id="">
                    </div>
                    <div class="form-group information-input1 col-md-12 col-sm-6 col-xs-12 right1">
                        <label for="">Tình trạng hôn nhân <span class="red">*</span></label>
                        <select name="" id="" class="form-control">
                            <option value="1">Độc thân</option>
                            <option value="2">Ly hôn</option>
                        </select>
                    </div>
                    <div class="form-group information-input1 col-md-12 col-sm-6 col-xs-12 label-form">
                        <label for="">Tỉnh/thành phố <span class="red">*</span></label>
                        <select name="" id="" class="form-control">
                            <option value="1">Chọn tỉnh thành</option>
                            <option value="1">Hà Nội</option>
                            <option value="2">Thái Bình</option>
                        </select>
                    </div>
                </form>

                <form action="" method="POST" role="form" class="form1 row">
                    <div class="form-group information-input2 col-sm-12 col-xs-12">
                        <label for="">Kiểu gia sư <span class="red">*</span></label>
                        <select name="" id="" class="form-control">
                            <option value="1">Giáo viên</option>
                        </select>
                    </div>
                    <div class="form-group information-input2 col-sm-12 col-xs-12">
                        <label for="">Học trường</label>
                        <input type="text" class="form-control" id="">
                    </div>
                    <div class="form-group information-input2 col-md-12 col-sm-6 col-xs-12">
                        <label for="">Chuyên ngành</label>
                        <input type="text" class="form-control" id="">
                    </div>
                    <div class="form-group information-input2 col-md-12 col-sm-6 col-xs-12">
                        <label for="">Năm tốt nghiệp <span class="gray">(nếu đã tốt nghiệp)</span></label>
                        <input type="text" class="form-control" id="">
                    </div>
                    <div class="form-group information-input2 col-sm-12 col-xs-12">
                        <label for="">Nơi công tác <span class="gray">(nếu đã đi làm)</span></label>
                        <input type="text" class="form-control" id="">
                    </div>
                </form>
            </div>
            <div class="information4">
                <form action="" method="POST" role="form">
                    <div class="form-group information-input4">
                        <label for="">Địa chỉ hiện tại <span class="red">*</span></label>
                        <input type="text" class="form-control" id="">
                    </div>
                </form>
            </div>
            <div class="information5">
                <form action="" method="POST" role="form">
                    <div class="form-group information-input4">
                        <label for="">Giới thiệu về bản thân <span class="red">*</span></label>
                        <textarea name="" id="" cols="30" rows="10"></textarea>
                    </div>
                    <div class="form-group information-input4">
                        <label for="">Thành tích</label>
                        <textarea name="" id="" cols="30" rows="10"></textarea>
                    </div>
                    <div class="form-group information-input">
                        <label for="">Số năm kinh nghiệm <span class="red">*</span></label>
                        <input type="text" class="form-control" id="">
                    </div>
                </form>
            </div>
            <div class="information6">
                <div class="information6-v1">
                    Kinh nghiệm giảng dạy <span class="red">*</span>
                </div>
                <div class="information6-v1s">
                    <div class="information6-v2">
                        <div class="information6-v2-img">
                            <img src="../asset/images/Ellipse 73.png" alt="">
                        </div>
                        <div class="information6-v2s">
                            <p>Giáo viên toán tại trường tiểu học Hạ Đình</p>
                        </div>
                    </div>
                    <div class="information6-time">
                        <p>10/9/2019 - đến nay</p>
                    </div>
                    <div class="information6-v2-1">
                        Mình học Chuyên Anh của trường THPT chuyên Phan Bội Châu Nghệ An , đạt học sinh giỏi tỉnh môn
                        tiếng anh. Thi ielts được 6.0 năm lớp 11 . Hiện đang là sinh viên năm ba khoa kiểm toán chất
                        lượng cao ( học 30% bằng tiếng anh ) trường đại học Kinh tế quốc dân . Đã có 3 năm dạy kèm cho
                        học sinh lớp 10.
                    </div>
                    <div class="information6-setting">
                        <a href="#"><i class="fa fa-cogs" aria-hidden="true"></i> Chỉnh sửa</a>
                    </div>
                </div>
                <div class="information6-v3">
                    <input type="text" placeholder="Tiêu đề">
                </div>
                <div class="information6-v4 row">
                    <div class="col-md-6 col-sm-6 col-xs-12 row-input-v1">
                        <input type="text" placeholder="Thời gian bắt đầu" class="information6-input1">
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12 row-input-v2">
                        <input type="text" placeholder="Thời gian bắt đầu" class="information6-input2">
                    </div>
                </div>
                <div class="information6-v5">
                    <textarea name="" id="" cols="30" rows="10" placeholder="Mô tả ngắn về quá trình đi dạy"></textarea>
                </div>
                <div class="information6-add">
                    <a href="#"><img src="../asset/images/Group 2745 (1).png" alt=""> Thêm kinh nghiệm</a>
                </div>
            </div>
            <div class="information7">
                <div class="received-content1">
                    <p>Thông tin giảng dạy</p>
                </div>
                <div class="invited-teach2-v2">
                    <hr class="hr1">
                    <hr class="hr2">
                </div>
                <div class="row input-row">
                    <div class="col-md-6 col-sm-6">
                        <label for="" class="label-input">Môn học giảng dạy<span class="red">*</span></label>
                        <select class="form-control" name="sex">
                            <option selected="">Môn học giảng dạy</option>

                        </select>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <label for="" class="label-input">Hình thức giảng dạy<span class="red">*</span></label>
                        <select class="form-control" name="sex">
                            <option selected="">Chọn hình thức</option>

                        </select>
                    </div>
                </div>
                <div class="row input-row-1 cost-price">
                    <label for="" class="label-input">Học phí dự kiến:<span class="red">*</span>
                        <div class="nav-inline">
                            <ul class="nav nav-tabs">
                                <li><a href="#home" data-toggle="tab" class="btn-cost-1">Cố định</a></li>
                                <li><a href="#info" data-toggle="tab" class="btn-cost-1">Ước lượng</a></li>
                            </ul>
                        </div>
                    </label>
                </div>
                <div class="tab-content">
                    <div class="tab-pane active" id="home">
                        <div class="row input-row">
                            <div class="col-md-7 col-xs-6">
                                <span class="money-right">VND</span>
                                <input type="text" name="school" class="form-control input-icon"
                                    placeholder="1.000.000">
                            </div>
                            <div class="col-md-1 col-xs-2">
                                <span>/</span>
                            </div>
                            <div class="col-md-4 col-xs-4">
                                <select class="form-control" name="sex">
                                    <option selected="">Tháng</option>

                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="info">
                        <div class="row input-row">
                            <div class="col-md-5 col-lg-6 col-sm-6 col-xs-7 row-border">
                                <!-- <span class="money-right">VND</span>
								<input type="text" name="school" class="form-control input-icon"  placeholder="2.500.000"> -->
                                <div class="row">
                                    <div class="col-md-5 col-lg-5 col-sm-5 col-xs-4 mobile-border">
                                        <input type="text" name="school" class="form-control input-no-border"
                                            placeholder="1.00.000">
                                    </div>
                                    <div class="col-md-1 col-lg-1 co-sm-1 col-xs-2 mobile-border">
                                        <span>-</span>
                                    </div>
                                    <div class="col-md-5 col-lg-5 col-sm-5 col-xs-4 mobile-border">
                                        <span class="money-right money-right-2">VND</span>
                                        <input type="text" name="school" class="form-control input-no-border"
                                            placeholder="6.000.000">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-1 col-lg-1 col-sm-1 col-xs-1">
                                <span>/</span>
                            </div>
                            <div class="col-md-3 col-lg-3 col-sm-3 col-xs-3 no-padding">
                                <select class="form-control" name="sex">
                                    <option selected="">Giờ</option>

                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row input-row">
                    <div class="col-md-6">
                        <label for="" class="label-input">Khu vực giảng dạy <span class="red">*</span></label>
                        <select class="form-control" name="sex">
                            <option selected="">Hà Nội</option>

                        </select>
                    </div>
                </div>
                <div class="row input-row-1">
                    <select class="form-control" name="sex">
                        <option selected="">Chọn tối đa 3 quận/huyện</option>
                    </select>
                </div>
                <div class="row input-row-1">
                    <label for="" class="label-input">Buổi có thể dạy <span class="red">*</span></label>
                    <div class="table">
                        <table class="table" id="table-teach">
                            <thead>
                                <tr>
                                    <th class="th-cl">Thứ 2</th>
                                    <th class="th-cl">Thứ 3</th>
                                    <th class="th-cl">Thứ 4</th>
                                    <th class="th-cl">Thứ 5</th>
                                    <th class="th-cl">Thứ 6</th>
                                    <th class="th-cl">Thứ 7</th>
                                    <th class="th-cl">Chủ nhật</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-center"><a href="#">Sáng</a></td>
                                    <td class="text-center"><a href="#">Sáng</a></td>
                                    <td class="text-center"><a href="#">Sáng</a></td>
                                    <td class="text-center"><a href="#">Sáng</a></td>
                                    <td class="text-center"><a href="#">Sáng</a></td>
                                    <td class="text-center"><a href="#">Sáng</a></td>
                                    <td class="text-center"><a href="#">Sáng</a></td>
                                </tr>
                                <tr>
                                    <td class="text-center"><a href="#">Chiều</a></td>
                                    <td class="text-center"><a href="#">Chiều</a></td>
                                    <td class="text-center"><a href="#">Chiều</a></td>
                                    <td class="text-center"><a href="#">Chiều</a></td>
                                    <td class="text-center"><a href="#">Chiều</a></td>
                                    <td class="text-center"><a href="#">Chiều</a></td>
                                    <td class="text-center"><a href="#">Chiều</a></td>
                                </tr>
                                <tr>
                                    <td class="text-center"><a href="#">Tối</a></td>
                                    <td class="text-center"><a href="#">Tối</a></td>
                                    <td class="text-center"><a href="#">Tối</a></td>
                                    <td class="text-center"><a href="#">Tối</a></td>
                                    <td class="text-center"><a href="#">Tối</a></td>
                                    <td class="text-center"><a href="#">Tối</a></td>
                                    <td class="text-center"><a href="#">Tối</a></td>
                                </tr>


                            </tbody>
                        </table>
                    </div>
                    <div class="row table-moblie" style="display: none">
                        <div class="col-md-1 col-xs-2 table-left">
                            <p>Sáng</p>
                            <p>Chiều</p>
                            <p>Tối</p>
                        </div>
                        <div class="col-md-11 col-xs-10 table-right">
                            <div class="table">
                                <table class="table" id="table-teach-mobile">
                                    <thead>
                                        <tr>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-center td-mobile"><a href="#">T2</a></td>
                                            <td class="text-center td-mobile"><a href="#">T3</a></td>
                                            <td class="text-center td-mobile"><a href="#">T4</a></td>
                                            <td class="text-center td-mobile"><a href="#">T5</a></td>
                                            <td class="text-center td-mobile"><a href="#">T6</a></td>
                                            <td class="text-center td-mobile"><a href="#">T7</a></td>
                                            <td class="text-center td-mobile"><a href="#">CN</a></td>
                                        </tr>
                                        <tr>
                                            <td class="text-center td-mobile"><a href="#">T2</a></td>
                                            <td class="text-center td-mobile"><a href="#">T3</a></td>
                                            <td class="text-center td-mobile"><a href="#">T4</a></td>
                                            <td class="text-center td-mobile"><a href="#">T5</a></td>
                                            <td class="text-center td-mobile"><a href="#">T6</a></td>
                                            <td class="text-center td-mobile"><a href="#">T7</a></td>
                                            <td class="text-center td-mobile"><a href="#">CN</a></td>
                                        </tr>
                                        <tr>
                                            <td class="text-center td-mobile"><a href="#">T2</a></td>
                                            <td class="text-center td-mobile"><a href="#">T3</a></td>
                                            <td class="text-center td-mobile"><a href="#">T4</a></td>
                                            <td class="text-center td-mobile"><a href="#">T5</a></td>
                                            <td class="text-center td-mobile"><a href="#">T6</a></td>
                                            <td class="text-center td-mobile"><a href="#">T7</a></td>
                                            <td class="text-center td-mobile"><a href="#">CN</a></td>
                                        </tr>


                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row input-row-2 mobile-none information7-v1">
                    <p>Bấm để chọn lịch. Màu xanh là những buổi có thể dạy</p>
                </div>
                <div class="div-reg">
                    <a href="#" class="btn-user-register">Cập nhật</a>
                </div>
            </div>
        </div>
    </div>
    <?php include_once "../inc_footer.php"; ?>
</body>

</html>