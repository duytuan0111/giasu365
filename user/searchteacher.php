<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng tin tim gia sư</title>
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
    <div id="search-teacher">
        <?php include_once "../nav-bar-parent.php"; ?>
        <div class="manager" id="search-teacher-1">
            <div class="invited-teach2-v1">
                <p>Thông tin lớp học</p>
            </div>
            <div class="invited-teach2-v2">
                <hr class="hr1">
                <hr class="hr2">
            </div>
            <div class="search-teacher">
                <form action="" method="POST" role="form" class="row search-teacher-form">
                    <div class="form-group information-input1 col-md-12 col-sm-12 col-xs-12">
                        <label for="">Tóm tắt yêu cầu tìm gia sư (1 câu, tối đa 100 ký tự) <span
                                class="red">*</span></label>
                        <input type="text" class="form-control" id=""
                            placeholder="VD: Tìm gia sư tiếng Anh lớp 7, tại Hoàn Kiếm, Hà Nội">
                    </div>
                </form>
            </div>
            <div class="information3" id="search-teacher1">
                <form action="" method="POST" role="form" class="row form">
                    <div class="form-group information-input1 col-sm-12 col-xs-12 label-form">
                        <label for="">Lựa chọn môn học <span class="red">*</span></label>
                        <select name="sex" id="" class="form-control">
                            <option value="1">Chọn môn học</option>
                            <option value="2">Văn</option>
                        </select>
                    </div>
                    <div class="form-group information-input1 col-md-12 col-sm-12 col-xs-12 right1 input-label">
                        <label for="">Số giờ học 1 buổi <span class="red">*</span></label>
                        <select name="sex" id="" class="form-control">
                            <option value="1">Chọn giờ học</option>
                            <option value="2">4H</option>
                        </select>
                    </div>
                    <div class="form-group information-input1 col-md-12 col-sm-12 col-xs-12 label-form">
                        <label for="">Số buổi học trong tuần</label>
                        <select name="sex" id="" class="form-control">
                            <option value="1">Chọn số buổi học</option>
                            <option value="2">4/7</option>
                        </select>
                    </div>
                    <div class="form-group information-input1 col-md-12 col-sm-12 col-xs-12 right1 input-label">
                        <label for="">Ngày dự kiến học</label>
                        <input type="date" class="form-control" id="" placeholder="chọn ngày">
                    </div>
                    <div class="form-group information-input1 col-md-12 col-sm-12 col-xs-12 label-form">
                        <label for="">Địa điểm diễn ra lớp học <span class="red">*</span></label>
                        <select name="" id="" class="form-control">
                            <option value="1">Chọn tỉnh thành</option>
                            <option value="1">Hà Nội</option>
                            <option value="2">Thái Bình</option>
                        </select>
                    </div>
                </form>

                <form action="" method="POST" role="form" class="form1 row" id="search-teacher-form1">
                    <div class="form-group information-input2 col-sm-12 col-xs-12 form-label">
                        <label for="">Hình thức học <span class="red">*</span></label>
                        <select name="" id="" class="form-control" placeholder="Chọn hình thức">
                            <option value="1">Chọn hình thức</option>
                        </select>
                    </div>
                    <div class="form-group information-input2 col-sm-12 col-xs-12 form-label">
                        <label for="">Số học viên</label>
                        <input type="text" class="form-control" id="" placeholder="Nhập số học viên">
                    </div>
                    <div class="form-group information-input2 col-md-12 col-sm-12 col-xs-12 form-label">
                        <label for="">Giới tính gia sư</label>
                        <select name="sex" id="" class="form-control" placeholder="Chọn giới tính">
                            <option value="0">Chọn giới tính</option>
                            <option value="1">Nam</option>
                            <option value="2">Nữ</option>
                        </select>
                    </div>
                    <div class="form-group information-input2 col-md-12 col-sm-12 col-xs-12 form-label">
                        <label for="">Số điện thoại liên hệ <span class="red">*</span></label>
                        <input type="text" class="form-control" id="" placeholder="Nhập số điện thoại liên hệ">
                    </div>
                    <div class="form-group information-input2 col-sm-12 col-xs-12 form-label">
                        <label for="">Địa chỉ cụ thể <span class="red">*</span></label>
                        <input type="text" class="form-control" id="" placeholder="Nhập địa chỉ cụ thể">
                    </div>
                </form>
            </div>
            <div class="search-teacher" id="search-teacher-textarea">
                <form action="" method="POST" role="form" class="row search-teacher-form">
                    <div class="form-group information-input1 col-md-12 col-sm-12 col-xs-12">
                        <label for="">Mô tả chi tiết nội dung muốn học <span class="red">*</span></label>
                        <textarea name="" id="" cols="30" rows="10"
                            placeholder="Mô tả các nội dung muốn học tại đây..."></textarea>
                    </div>
                </form>
            </div>
            <div class="search-teacher-v1">
                <div class="invited-teach2-v1">
                    <p>Lịch học dự kiến</p>
                </div>
                <div class="invited-teach2-v2">
                    <hr class="hr1">
                    <hr class="hr2">
                </div>
                <div class="table searcher-teacher-table">
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
                    <div class="col-md-1 col-xs-2 table-left input-row-3">
                        <p>Sáng</p>
                        <p>Chiều</p>
                        <p>Tối</p>
                    </div>
                    <div class="col-md-11 col-xs-10 table-right">
                        <div class="table searcher-teacher-table">
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
                <div class="row input-row-2 mobile-none information7-v1">
                    <p>Bấm để chọn lịch. Màu xanh là những buổi có thể dạy</p>
                </div>
                <div class="row input-row-1">
                    <div class="checkbox">
                        <label class="label-input label-input-checkbox">
                            <input type="checkbox" value="">
                            Tôi cam kết thông tin tạo lớp là thật và chấp nhận các quy định của Timviec365.com
                        </label>
                    </div>
                </div>
                <div class="div-reg">
                    <a href="#" class="btn-user-register">Đăng yêu cầu</a>
                </div>
            </div>
        </div>
    </div>
    <?php include_once "../inc_footer.php"; ?>
</body>

</html>