<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chi tiết gia sư</title>


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"
        integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="../asset/css/style.css">
    <link rel="stylesheet" href="../asset/css/header-home.css">

</head>

<body>
    <div class="container-fluid">
        <?php include_once "../header-home.php"; ?>
        <div class="row" id="menu-bottom1">
            <div class="col-md-8 d-home d-home-search">
                <div class="d-search-input d-home-search-input">
                    <div class="row t-input-search d-input-search3">
                        <div class="col-md-8 col-sm-12 col-xs-12 t-input-keywork">
                            <input type="text" class="form-control d-search" name="keywork" id="d-search"
                                placeholder="Nhập từ khóa tìm kiếm...">
                        </div>
                        <div class="col-md-3 col-sm-8 col-xs-8 t-input-city">
                            <img src="../asset/images/down.png" alt="">
                            <input type="text" class="form-control d-search-city" name="city" id="d-search-city"
                                placeholder="Chọn tỉnh thành">
                        </div>
                        <div class="col-md-1 col-sm-4 col-xs-4 t-input-icon" class="form-control">
                            <a href="#"><i class="fa fa-search"></i></a>
                        </div>
                    </div>
                    <p class="t-recomend-search d-recomend-search">
                        <a href="">Gia sư tiếng Anh</a>
                        <a href="">Gia sư tiếng Pháp</a>
                        <a href="">Gia sư tiếng Hàn</a>
                        <a href="">Gia sư toán lớp 2</a>
                        <a href="">Gia sư toán lớp 10</a>
                    </p>
                    <div class="d-input-none d-search-header" id="d-input-none">
                        <div class="d-input-search">
                            <div class="d-input-search1">
                                <h4>dành cho phụ huynh</h4>
                                <p class="d-input-search-v1 row d-top">
                                    <a class="col-md-6 col-sm-6 col-xs-6 click-a" href="javascript:void(0)">Gia sư môn
                                        toán</a>
                                    <a class="col-md-6 col-sm-6 col-xs-6 click-a" href="javascript:void(0)">Gia sư
                                        cấp1</a>
                                    <a class="col-md-6 col-sm-6 col-xs-6 click-a" href="javascript:void(0)">Gia sư môn
                                        Tiếng Anh</a>
                                    <a class="col-md-6 col-sm-6 col-xs-6 click-a" href="javascript:void(0)">Gia sư cấp
                                        2</a>
                                    <a class="col-md-6 col-sm-6 col-xs-6 click-a" href="javascript:void(0)">Gia sư môn
                                        Ngữ văn</a>
                                    <a class="col-md-6 col-sm-6 col-xs-6 click-a" href="javascript:void(0)">Gia sư lớp
                                        10</a>
                                    <a class="col-md-6 col-sm-6 col-xs-6 click-a" href="javascript:void(0)">Gia sư môn
                                        Địa lý</a>
                                    <a class="col-md-6 col-sm-6 col-xs-6 click-a" href="javascript:void(0)">Gia sư lớp
                                        11</a>
                                    <a class="col-md-6 col-sm-6 col-xs-6 click-a" href="javascript:void(0)">Gia sư môn
                                        Lịch sử</a>
                                    <a class="col-md-6 col-sm-6 col-xs-6 click-a" href="javascript:void(0)">Gia sư lớp
                                        12</a>
                                </p>
                            </div>
                            <div class="d-input-search2">
                                <h4>dành cho gia sư</h4>
                                <p class="d-input-search-v2 row d-top">
                                    <a class="col-md-12 col-sm-12 col-xs-1 click-a" href="javascript:void(0)">Việc làm
                                        gia sư tiếng Anh</a>
                                    <a class="col-md-12 col-sm-12 col-xs-1 click-a" href="javascript:void(0)">Việc làm
                                        gia sư tiếng Pháp</a>
                                    <a class="col-md-12 col-sm-12 col-xs-1 click-a" href="javascript:void(0)">Việc làm
                                        gia sư tiếng Hàn</a>
                                    <a class="col-md-12 col-sm-12 col-xs-1 click-a" href="javascript:void(0)">Việc làm
                                        gia sư toán lớp 2</a>
                                    <a class="col-md-12 col-sm-12 col-xs-1 click-a" href="javascript:void(0)">Việc làm
                                        gia sư toán lớp 10</a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="d-select-none d-search-header" id="d-select-none">
                        <div class="d-select-search">
                            <div class="d-select-search1">
                                <h4>dành cho phụ huynh</h4>
                                <p class="d-input-search-v1 row d-top">
                                    <a class="col-md-12 col-sm-12 col-xs-12 click-2" href="javascript:void(0)">Tìm gia
                                        sư tại Hà Nội</a>
                                    <a class="col-md-12 col-sm-12 col-xs-12 click-2" href="javascript:void(0)">Tìm gia
                                        sư tại Hồ Chí Minh</a>
                                    <a class="col-md-12 col-sm-12 col-xs-12 click-2" href="javascript:void(0)">Tìm gia
                                        sư tại Đà Nẵng</a>
                                    <a class="col-md-12 col-sm-12 col-xs-12 click-2" href="javascript:void(0)">Tìm gia
                                        sư tại Cần Thơ</a>
                                    <a class="col-md-12 col-sm-12 col-xs-12 click-2" href="javascript:void(0)">Tìm gia
                                        sư tại Bình Dương</a>
                                </p>
                            </div>
                            <div class="d-select-search2">
                                <h4>dành cho gia sư</h4>
                                <p class="d-input-search-v2 row d-top">
                                    <a class="col-md-12 col-sm-12 col-xs-12 click-2" href="javascript:void(0)">Việc làm
                                        cho gia sư tại Hà Nội</a>
                                    <a class="col-md-12 col-sm-12 col-xs-12 click-2" href="javascript:void(0)">Việc làm
                                        cho gia sư tại Hồ Chí Minh</a>
                                    <a class="col-md-12 col-sm-12 col-xs-12 click-2" href="javascript:void(0)">Việc làm
                                        cho gia sư tại Đà Nẵng</a>
                                    <a class="col-md-12 col-sm-12 col-xs-12 click-2" href="javascript:void(0)">Việc làm
                                        cho gia sư tại Cần Thơ</a>
                                    <a class="col-md-12 col-sm-12 col-xs-12 click-2" href="javascript:void(0)">Việc làm
                                        cho gia sư tại Bình Dương</a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="d-search-city-none d-search-header" id="d-search-city-none">
                        <div class="d-input-search-city">
                            <div class="d-input-search1-city">
                                <p class="d-input-search-v1 row d-top">
                                    <a href="javascript:void(0)" class="col-md-3 col-sm-3 col-xs-3 click-3">Hà Nội</a>
                                    <a href="javascript:void(0)" class="col-md-3 col-sm-3 col-xs-3 click-3"> Phòng</a>
                                    <a href="javascript:void(0)" class="col-md-3 col-sm-3 col-xs-3 click-3">Hưng Yên</a>
                                    <a href="javascript:void(0)" class="col-md-3 col-sm-3 col-xs-3 click-3">Cà Mau</a>
                                    <a href="javascript:void(0)" class="col-md-3 col-sm-3 col-xs-3 click-3">Hồ Chí
                                        Minh</a>
                                    <a href="javascript:void(0)" class="col-md-3 col-sm-3 col-xs-3 click-3">Đà Nẵng</a>
                                    <a href="javascript:void(0)" class="col-md-3 col-sm-3 col-xs-3 click-3">Cần Thơ</a>
                                    <a href="javascript:void(0)" class="col-md-3 col-sm-3 col-xs-3 click-3">Bình
                                        Dương</a>
                                    <a href="javascript:void(0)" class="col-md-3 col-sm-3 col-xs-3 click-3">Ninh
                                        Bình</a>
                                    <a href="javascript:void(0)" class="col-md-3 col-sm-3 col-xs-3 click-3">Thái
                                        Bình</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="parent-detail parent-detail-01 d-detail ">
            <div class="parent-detail1">
                <p class="blue">Gia sư 365 / Tìm gia sư / <span class="black">Nguyễn Thanh Huyền</span></p>
            </div>
            <div class="d-teacher-detail">
                <div class="d-teacher-detail-img">
                    <img src="../asset/images/Group 2389.png" alt="">
                </div>
                <div class="class-detail-v1 d-teacher-detail-v1">
                    <div class="infor-class">
                        <p>Nguyễn Thanh Huyền
                            <span class="d-span-star">
                                <i class="fa fa-star-o d-vote-hover" aria-hidden="true"></i>
                                <i class="fa fa-star-o d-vote-hover" aria-hidden="true"></i>
                                <i class="fa fa-star-o d-vote-hover" aria-hidden="true"></i>
                                <i class="fa fa-star-o d-vote-hover" aria-hidden="true"></i>
                                <i class="fa fa-star-o d-vote-hover" aria-hidden="true"></i></span>
                        </p>
                    </div>

                    <p class="d-span-teacher">
                        <span class="green"> ID gia sư : 12345</span>
                    </p>

                    <div class="d-none d-none-teacher">
                        <button class="d-infor-class-detail" id="infor-detail-v3-1" onclick="clickFunction()">
                            <p><i class="fa fa-heart-o" aria-hidden="true"></i> Lưu gia sư</p>
                        </button>
                        <div class="saved-class2-v2 div-class-detail d-infor-class-detail" id="btn2">
                            <a data-toggle="modal" href='#popup-moiday'><img src="../asset/images/send 1.png" alt="">
                                Mời dạy</a>
                        </div>
                    </div>
                    <div class="infor-detail-v2 infor-detail-padding d-infor-class1">
                        <p style="margin-right:0">Toán, Tiếng Anh, Ngữ văn
                        </p>
                    </div>
                    <div class="d-detail4-v3 infor-class2">
                        <span class="green">ID gia sư : 12345</span>
                    </div>
                </div>
                <div class="class-detail-v2 d-teacher-detail-v2">
                    <div class="infor-detail-class d-infor-detail-teacher">
                        <div class="d-detail4-v3 d-class-detail">
                            <span class="green">ID gia sư : 12345</span>
                        </div>
                        <button class="infor-detail-v3-1 d-infor-class-detail" id="infor-detail-v3-1"
                            onclick="clickFunction()">
                            <p><i class="fa fa-heart-o" aria-hidden="true"></i> Lưu gia sư</p>
                        </button>
                        <div class="saved-class2-v2 infor-detail-v3-1 div-class-detail d-infor-class-detail" id="btn2">
                            <a data-toggle="modal" href='#popup-moiday'><img src="../asset/images/send 1.png" alt="">
                                Mời dạy</a>
                        </div>
                    </div>
                    <div class="infor-detail-v2 infor-detail-class1 d-info-detail-teacher">

                        <p class="infor-class-p gray"><img src="../asset/images/Group 2492 (1).png" alt="">
                            Địa chỉ: Hà Nội</p>
                        <p class="infor-class-p gray"><img src="../asset/images/Vector (1).png" alt="">
                            3 năm kinh nghiệm</p>
                        <p class="infor-class-p orange"><img src="../asset/images/wallet (2) 1.png" alt="">
                            26.000vnđ/giờ</p>
                    </div>
                    <div class="infor-detail1 d-infor-detail1">
                        <div class="infor-detail1-v2">
                            <a class="white">Lượt xem: 3</a>
                        </div>
                        <div class="infor-detail1-v1">
                            <a><img src="../asset/images/like 1.png" alt=""> Thích</a>
                        </div>
                        <div class="infor-detail-img">
                            <a href="#"><img src="../asset/images/twittermini.png" alt=""></a>
                        </div>
                        <div class="infor-detail-img">
                            <a href="https://fb.com"><img src="../asset/images/fbmini.png" alt=""></a>
                        </div>
                        <div class="infor-detail-img">
                            <a href="#"><img src="../asset/images/instar.png" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="class-detail2">
                <div class="class-detail2-v1">
                    <div class="d-css-class-detail2-infor">
                        <div class="received-content1">
                            <p>Thông tin gia sư</p>
                        </div>
                        <div class="invited-teach2-v2">
                            <hr class="hr1">
                            <hr class="hr2">
                        </div>
                        <div class="d-css-class-detail d-css-teacher-detail1 row">
                            <div class="d-css-class-detail1 col-md-6 col-sm-6 col xs-12">
                                <img src="../asset/images/Group 2204 (6).png" alt="">
                                <div class="d-css-class-detail2">
                                    <p class="gray">Ngày sinh</p>
                                    <p class="black">12/07/1997</p>
                                </div>
                            </div>
                            <div class="d-css-class-detail1 col-md-6 col-sm-6 col xs-12">
                                <img src="../asset/images/Group 2204 (7).png" alt="">
                                <div class="d-css-class-detail2">
                                    <p class="gray">Ngày cập nhật</p>
                                    <p class="black">12/9/2020</p>
                                </div>
                            </div>
                            <div class="d-css-class-detail1 col-md-6 col-sm-6 col xs-12">
                                <img src="../asset/images/gioitinh.png" alt="">
                                <div class="d-css-class-detail2">
                                    <p class="gray">Giới tính</p>
                                    <p class="black">Nữ</p>
                                </div>
                            </div>
                            <div class="d-css-class-detail1 col-md-6 col-sm-6 col xs-12">
                                <img src="../asset/images/Group 2204 (4).png" alt="">
                                <div class="d-css-class-detail2">
                                    <p class="gray">Hình thức dạy</p>
                                    <p class="black">Gia sư tại nhà</p>
                                </div>
                            </div>
                            <div class="d-css-class-detail1 col-md-6 col-sm-6 col xs-12">
                                <img src="../asset/images/Group 2204.png" alt="">
                                <div class="d-css-class-detail2">
                                    <p class="gray">Tình trạng hôn nhân</p>
                                    <p class="black">Độc thân</p>
                                </div>
                            </div>
                            <div class="d-css-class-detail1 col-md-6 col-sm-6 col xs-12">
                                <img src="../asset/images/Group 2204 (5).png" alt="">
                                <div class="d-css-class-detail2">
                                    <p class="gray">Kiểu giáo viên</p>
                                    <p class="black">Giáo viên</p>
                                </div>
                            </div>
                            <div class="d-css-class-detail1 col-md-6 col-sm-6 col xs-12">
                                <img src="../asset/images/Group 2204 (8).png" alt="">
                                <div class="d-css-class-detail2">
                                    <p class="gray">Kinh nghiệm</p>
                                    <p class="black">3 năm</p>
                                </div>
                            </div>
                            <div class="d-css-class-detail1 col-md-6 col-sm-6 col xs-12">
                                <img src="../asset/images/Group 2204 (2).png" alt="">
                                <div class="d-css-class-detail2">
                                    <p class="gray">Địa chỉ</p>
                                    <p class="black">342 Khương Đình, Thanh Xuân, Hà Nội</p>
                                </div>
                            </div>
                            <div class="d-css-class-detail1 col-md-6 col-sm-6 col xs-12">
                                <img src="../asset/images/Group 2204 (1).png" alt="">
                                <div class="d-css-class-detail2 d-login-seen">
                                    <p class="gray">SĐT</p>
                                    <p data-toggle="modal" href='#modal-login' class="yellow d-click-1">Đăng nhập để xem
                                        SĐT
                                    </p>
                                </div>
                                <div class="d-css-class-detail2 d-seen-info">
                                    <p class="gray">SĐT</p>
                                    <p data-toggle="modal" href='#d-point' class="yellow d-click-1">Xem liên hệ</p>
                                </div>
                            </div>
                            <div class="d-css-class-detail1 col-md-6 col-sm-6 col xs-12">
                                <img src="../asset/images/Group 2204 (3).png" alt="">
                                <div class="d-css-class-detail2 d-login-seen">
                                    <p class="gray">Email</p>
                                    <p data-toggle="modal" href='#modal-login' class="yellow d-click-1">Đăng nhập để xem
                                        Email</p>
                                </div>
                                <div class="d-css-class-detail2 d-seen-info">
                                    <p class="gray">Email</p>
                                    <p data-toggle="modal" href='#d-point' class="yellow d-click-1">Xem liên hệ</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-css-class-detail2-infor1">
                        <div class="received-content1">
                            <p>Giới thiệu chung</p>
                        </div>
                        <div class="invited-teach2-v2">
                            <hr class="hr1">
                            <hr class="hr2">
                        </div>
                        <div class="d-css-class-detail-text">
                            <p>Mình học Chuyên Anh của trường THPT chuyên Phan Bội Châu Nghệ An , đạt học sinh giỏi tỉnh
                                môn
                                tiếng anh . Thi ielts được 6.0 năm lớp 11 . Hiện đang là sinh viên năm ba khoa kiểm toán
                                chất lượng cao ( học 30% bằng tiếng anh ) trường đại học Kinh tế quốc dân . Đã có 3 năm
                                dạy
                                kèm cho học sinh lớp 10.</p>
                        </div>
                    </div>
                    <div class="d-css-class-detail2-infor1">
                        <div class="received-content1">
                            <p>Kinh nghiệm giảng dạy</p>
                        </div>
                        <div class="invited-teach2-v2">
                            <hr class="hr1">
                            <hr class="hr2">
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
                                Mình học Chuyên Anh của trường THPT chuyên Phan Bội Châu Nghệ An , đạt học sinh giỏi
                                tỉnh môn
                                tiếng anh. Thi ielts được 6.0 năm lớp 11 . Hiện đang là sinh viên năm ba khoa kiểm toán
                                chất
                                lượng cao ( học 30% bằng tiếng anh ) trường đại học Kinh tế quốc dân . Đã có 3 năm dạy
                                kèm cho
                                học sinh lớp 10.
                            </div>
                        </div>
                    </div>
                    <div class="d-css-class-detail2-infor1">
                        <div class="received-content1">
                            <p>Thành tích đạt được</p>
                        </div>
                        <div class="invited-teach2-v2">
                            <hr class="hr1">
                            <hr class="hr2">
                        </div>
                        <div class="d-css-class-detail-text">
                            <p>- Giải nhất <br>
                                - Giải nhất <br>
                                - Giải nhất </p>
                        </div>
                    </div>
                    <div class="d-css-class-detail2-infor1">
                        <div class="received-content1">
                            <p>Lịch dạy gia sư</p>
                        </div>
                        <div class="invited-teach2-v2">
                            <hr class="hr1">
                            <hr class="hr2">
                        </div>
                        <div class="row input-row-1 d-css-class-detail-table">
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
                    </div>
                    <div class="d-css-class-detail2-infor1">
                        <div class="d-login-vote d-vote-pc">
                            <a data-toggle="modal" href='#modal-login'>Đăng nhập để đánh giá</a>
                        </div>
                        <div class="received-content1">
                            <p>Đánh giá gia sư</p>
                        </div>
                        <div class="invited-teach2-v2">
                            <hr class="hr1">
                            <hr class="hr2">
                        </div>
                        <div class="d-cmt-vote">
                            <div class="d-cmt-vote1">
                                <div class="d-cmt-vote-img">
                                    <img src="../asset/images/Ellipse 71 (1).png" alt="">
                                </div>
                                <div class="d-cmt-vote-name">
                                    <p class="d-css-class-detail2 d-vote-name-p">Hoàng Minh Đạt</p>
                                    <p class="d-css-class-detail2 d-vote-cmt-time">23 ngày trước</p>
                                    <div class="d-vote-cmt">
                                        <i class="fa fa-star-o d-vote-hover" aria-hidden="true"></i>
                                        <i class="fa fa-star-o d-vote-hover" aria-hidden="true"></i>
                                        <i class="fa fa-star-o d-vote-hover" aria-hidden="true"></i>
                                        <i class="fa fa-star-o d-vote-hover" aria-hidden="true"></i>
                                        <i class="fa fa-star-o d-vote-hover" aria-hidden="true"></i>
                                    </div>
                                    <p class="d-css-class-detail2 d-vote-name-cmt">Mình rất hài lòng với gia sư này.
                                        Mình có 3 con học lớp 10, lớp 5, lớp 2 đều đang tin tưởng sử dụng gia sư của
                                        Timviec365.com</p>
                                </div>
                            </div>
                            
                            <div class="d-cmt-vote2">
                                <p class="d-css-class-detail2 d-vote-cmt2" data-toggle="collapse" data-target="#reply">2 phản hồi <i class="fa fa-chevron-down"
                                        aria-hidden="true"> </i></p>
                            </div>
                            <div class="d-cmt-vote2 d-cmt-vote3 collapse" id="reply">

                                <div class="d-cmt-vote-img">
                                    <img src="{../asset/images/Ellipse 71 (1).png}" alt="error">
                                </div>
                                <div class="d-cmt-vote-name">
                                    <p class="d-css-class-detail2 d-vote-name-p">Hoàng Minh Đạt</p>
                                    <p class="d-css-class-detail2 d-vote-cmt-time">23 ngày trước</p>
                                    <p class="d-css-class-detail2 d-vote-name-cmt">Cảm ơn bạn đã tin tưởng
                                        Timviec365.com
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="d-login-vote d-login-vote-2">
                            <a data-toggle="modal" href='#modal-login'>Đăng nhập để đánh giá</a>
                        </div>
                        <div class=" d-vote">
                            <div class="d-vote-img d-star">
                                <i class="star" aria-hidden="true"></i>
                                <i class="star" aria-hidden="true"></i>
                                <i class="star" aria-hidden="true"></i>
                                <i class="star" aria-hidden="true"></i>
                                <i class="star" aria-hidden="true"></i>
                            </div>
                            <div class="d-css-class-detail-text d-your-vote">
                                <p>Đánh giá của bạn</p>
                            </div>
                            <div class="d-text-vote">
                                <textarea name="" id="" cols="10" rows="10"
                                    placeholder="Hãy chia sẻ những điểm tốt và điểm chưa tốt của gia sư này nhé!"></textarea>
                            </div>
                            <div class="d-login-vote d-voter">
                                <a href="#">Gửi đánh giá của bạn</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="class-detail2-v2">
                    <div class="d-css-class-detail2-bar row">
                        <div class="received-content1 d-css-class-bar">
                            <p>Gia sư tương tự</p>
                            <hr class="hr2 hr3">
                        </div>
                        <div class="d-css-class-detail2-bar2 d-teacher-bar2 col-md-12 col-sm-6 col-xs-12">
                            <div class="d-teacher-img">
                                <img src="../asset/images/Ellipse 71 (1).png" alt="">
                            </div>
                            <div class="d-teacher">
                                <div class="infor-detail-v2 d-class-detail1">
                                    <p class="blue">
                                        Nguyễn Thanh Hằng
                                    </p>
                                </div>
                                <div class="d-css-type">
                                    <p>
                                        Toán, Tiếng Anh, Ngữ văn</p>
                                </div>
                                <div class="d-css-type">
                                    <p><img src="../asset/images/pin 1.png" alt="">
                                        Hồ Chí Minh</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="content-teacher2-v3 parent-detail-a">
                        <a href="#">Xem tất cả lớp học <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                    </div>
                    <div class="d-teacher-detail-signin">
                        <div class="d-css-class-detail-signin1 d-css-banner-detail">
                            <img src="../asset/images/Group.png" alt="">
                        </div>
                        <div class="d-css-teacher-detail">
                            <div class="d-css-detail-signup1 d-banner-detail">
                                <img src="../asset/images/Group 2602.png" alt="">
                            </div>
                            <div class="d-css-detail-signup-text d-banner-detail-text">
                                <p>Hàng trăm học viên đã đạt được kết quả cao như mong muốn</p>
                            </div>
                        </div>
                        <div class="forget-password-v2-5 d-teacher-signup">
                            <a href="#">Đăng tin tìm gia sư ngay</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="modal fade" id="modal-login">
            <div class="modal-dialog">
                <div class="modal-content modal-content-detail">
                    <div class="modal-header modal-header-detail">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title">
                            <div id="content-h4" style="text-align:center; color:#FFFFFF">Đăng nhập để xem liên hệ</div>
                        </h4>
                    </div>
                    <div class="modal-body">

                        <form action="" method="POST" role="form" class="modal-form-detail">
                            <div class="form-group form-parent-detail">
                                <i class="fa fa-phone icon-input-detail" aria-hidden="true"></i>
                                <input type="text" class="form-control input-detail" id=""
                                    placeholder="Nhập số điện thoại">
                            </div>
                            <div class="form-group form-parent-detail">
                                <i class="fa fa-unlock-alt icon-input-detail1" aria-hidden="true"></i>
                                <input type="text" class="form-control input-detail" id="" placeholder="**********">
                            </div>
                        </form>

                    </div>
                    <div class="modal-footer modal-footer1 modal-footer-login">
                        <a href="#" class="btn-forget-pw blue">Quên mật khẩu?</a>
                        <a href="teacherdetail.php" class="btn-login modal-footer-login1 d-click-login">Đăng nhập</a>
                        <span class="sp-register">Bạn chưa có tài khoản? <a href="#" class="btn-register">ĐĂNG KÝ
                                NGAY</a></span>
                    </div>
                </div>
            </div>
        </div>
        <!-- POPUP MỜI DẠY -->
        <div class="modal fade" id="popup-moiday">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title blue">MỜI GIÁO VIÊN</h4>
                    </div>
                    <div class="modal-body" id="modal-body">
                        <div class="modal-body1">
                            <img src="../asset/images/Group 2728.png" alt="">
                            <div class="modal-body1-v1">
                                Nguyễn Thanh Huyền
                            </div>
                        </div>
                        <div class="modal-body2">
                            Chọn lớp mà bạn muốn mời giáo viên dạy
                        </div>
                        <div class="modal-body3">
                            <div class="checkbox checkbox1">
                                <label>
                                    <input type="checkbox" value="">
                                    <p>[ML:12345] <span>Tìm gia sư môn tiếng Anh lớp 7 tại Hà Nội</span></p>
                                </label>
                            </div>

                        </div>
                    </div>
                    <div class="modal-footer modal-footer1">
                        <button type="button" class="btn btn-footer">Gửi lời mời</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- popup trừ điểm -->
        <div class="modal fade" id="d-point">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header modal-header-logout">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title">Thông báo </h4>
                    </div>
                    <div class="modal-body modal-infor">
                        <img src="../asset/images/Group 1463 (1).png" alt="" style="width:30px; height:30px">
                        <div class="modal-body-infor">
                            Bạn có <span class="orange">10</span> điểm hôm nay. Bạn có muốn dùng <span
                                class="red">1</span>
                            điểm để xem liên hệ với gia sư này không?
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary btn-ok">OK</button>
                        <button type="button" class="btn btn-default btn-close" data-dismiss="modal">HỦY</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include_once "../inc_footer.php"; ?>
</body>

<script src="https://code.jquery.com/jquery.js"></script>
<script src="https://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<script src="../asset/js/header-home.js"></script>
<script type="text/javascript">
$(document).ready(function() {
    //click

    $('.d-vote-hover').mouseenter(function() {
        $(this).css('color', '#FFC700');
    });
    $('.d-vote-hover').mouseleave(function() {
        $(this).css('color', '#FFC700');
    });

    // vote star
    var star = ".star",
        selected = '.selected';
    $(star).on('click', function() {
        $(selected).each(function() {
            $(this).removeClass('selected');
        });
        $(this).addClass('selected');
    });

});
</script>

</html>