<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh mục lớp học theo môn</title>

    <link rel="stylesheet" media="screen" href="https://netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <link rel="stylesheet" href="../asset/css/style.css">
    <link rel="stylesheet" href="../asset/css/header-home.css">

</head>

<body>
    <div class="container-fluid">
        <?php include_once "../header-home.php"; ?>
        <div class="row" id="menu-bottom1">
            <div class="col-md-8 d-home d-home-search">
                <h1 class="d-h1">Việc làm gia sư</h1>
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
        <div class="parent-detail parent-detail-01">
            <div class="parent-detail1">
                <p class="blue">Gia sư 365 / <span class="black">Việc làm gia sư</span></p>
            </div>
            <div class="parent-detail4">
                <div class="d-class-catelog">
                    <p>Danh sách lớp môn toán</p>
                </div>
                <div class="parent-detail4-v1">
                    <div class="parent-detail4-img">
                        <img src="../asset/images/Group 2385.png" alt="">
                    </div>
                    <div class="parent-detail4-v2">
                        <div class="detail4">
                            Tìm gia sư lớp 5
                        </div>
                        <div class="detail4-bonnus">
                            <div class="detail4-v3">
                                <span class="orange">130.000 vnđ/giờ</span>
                            </div>
                            <div class="detail4-v3s">
                                <p>3 lượt đề nghị</p>
                            </div>
                            <div class="detail-bonus">
                                <div class="bonus">
                                    <img src="../asset/images/agenda 1.png" alt="">
                                    <p>Toán</p>
                                </div>
                                <div class="bonus">
                                    <img src="../asset/images/pin 1.png" alt="">
                                    <p>Hồ Chí Minh</p>
                                </div>
                            </div>
                        </div>
                        <div class="detail4-v1">
                            Dạy học tiếng hàn theo các cấp từ cơ bản - sơ cấp đến trung cấp - cao cấp khóa học diên ra
                            trong
                            vòng 2 cao cấp khóa học diên ra trong vòng 2...
                        </div>
                        <div class="detail4-v2">
                            <div class="detail4 detail-border">
                                <p>Mã lớp: 12345</p>
                            </div>
                            <div class="detail4 detail4-border">
                                <p>Toán</p>
                            </div>
                            <div class="detail4 detail4-border">
                                <p>Hồ Chí Minh</p>
                            </div>
                            <div class="detail4 detail4-border">
                                <p>Gia sư tại nhà</p>
                            </div>
                        </div>
                    </div>
                    <div class="parent-detail4-v3">
                        <div class="detail4-v3">
                            <span class="orange">130.000 vnđ/giờ</span>
                        </div>
                        <div class="detail4-v3s">
                            <p>3 lượt đề nghị</p>
                            <div class="saved-class2-v2 detail4-border" id="btn2">
                                <a data-toggle="modal" href='#modal-login'>Đề nghị dạy</a>
                            </div>
                        </div>
                    </div>
                    <div class="parent-detail4-v4">
                        <a><i class="fa fa-heart-o" aria-hidden="true" class="icon-button"></i></a>
                    </div>
                </div>
                <div class="detail4-v2s">
                    <div class="detail4 detail-border">
                        <p>Mã lớp: 12345</p>
                    </div>
                    <div class="detail4 detail4-border">
                        <p>Toán</p>
                    </div>
                    <div class="detail4 detail4-border">
                        <p>Hồ Chí Minh</p>
                    </div>
                    <div class="detail4 detail4-border">
                        <p>Gia sư tại nhà</p>
                    </div>
                    <div class="saved-class2-v2 detail4-border" id="btn4">
                        <a data-toggle="modal" href='#modal-login'>Đề nghị dạy</a>
                    </div>
                </div>
                <div class="detail4-mobile">
                    <div class="detail4-mobile-v1">
                        <div class="received-content3-v1-1 detail4-mobile-ML">
                            <p>ML: 12345</p>
                        </div>

                        <div class="detail4 detail4-mobile-div">
                            <p>Gia sư tại nhà</p>
                        </div>
                        <div class="saved-class2-v2 detail4-border" id="btn5">
                            <a data-toggle="modal" href='#modal-login'>Đề nghị dạy</a>
                        </div>
                    </div>
                    <div class="detail4-v1 detail4-mobile-v2">
                        Dạy học tiếng hàn theo các cấp từ cơ bản - sơ cấp đến trung cấp - cao cấp khóa học diên ra trong
                        vòng 2...
                    </div>
                </div>
                <div class="content-teacher2-v3 parent-detail-a">
                    <a href="#">Xem thêm <i class="fa fa-angle-double-down" aria-hidden="true"></i></a>
                </div>
            </div>

            <div class="parent-detail4 d-class-catelog-ver1">
                <div class="d-class-catelog">
                    <p>Việc làm cho gia sư</p>
                </div>
                <div class="d-class-detail-keyword">
                    <div class="d-class-detail-key col-md-3 col-sm-5 col-xs-12">
                        <a href="#">Việc làm gia sư môn toán lớp 1</a>
                    </div>
                    <div class="d-class-detail-key col-md-3 col-sm-5 col-xs-12">
                        <a>Việc làm gia sư môn toán lớp 1</a>
                    </div>
                    <div class="d-class-detail-key col-md-3 col-sm-5 col-xs-12">
                        <a>Việc làm gia sư môn toán lớp 1</a>
                    </div>
                    <div class="d-class-detail-key col-md-3 col-sm-5 col-xs-12">
                        <a>Việc làm gia sư môn toán lớp 1</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-banner d-banner-teacher-detail">
            <div class="d-banner-teacher">
                <div class="d-banner-v1s d-banner-teacher-1s">
                    <img src="../asset/images/đăng ký làm gia sư ngay hôm nay.png" alt="" class="d-banner-img">
                    <img src="../asset/images/đăng ký làm gia sư ngay hôm nay (1).png" alt="" class="d-banner-img-v1">
                    <p class="d-banner-teacher-p d-banner-teacher-p1">
                        <i class="fa fa-check" aria-hidden="true"></i>
                        Chuyên nghiệp - uy tín
                    </p>
                    <p class="d-banner-teacher-p d-banner-teacher-p2">
                        <i class="fa fa-check" aria-hidden="true"></i>
                        Mức lương gia sư hấp dẫn
                    </p>
                    <p class="d-banner-teacher-p d-banner-teacher-p3">
                        <i class="fa fa-check" aria-hidden="true"></i>
                        Dễ dàng tìm lớp
                    </p>
                    <div class="d-banner-teacher-v1">
                        <a href="#" class="d-banner-teacher-a">
                            Đăng ký làm gia sư miễn phí
                        </a>
                    </div>
                </div>
            </div>
            <div class="d-banner-teacher2">
                <div class="d-banner-v2s">
                    <p class="d-banner--teacher">Một click nhanh - có ngay lớp dạy</p>
                    <p class="d-banner-teacher-a d-banner-teacher-p4">
                        Tìm lớp gia sư nhanh chóng, có ngay cơ hội việc làm gia sư
                    </p>

                    <div class="d-banner-teacher-v2">
                        <a href="#" class="d-banner-teacher-a d-banner-teacher-a2">
                            Đăng tin tìm gia sư
                        </a>
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
                            <div id="content-h4" style="text-align:center; color:#FFFFFF">Đăng nhập để đề nghị dạy</div>
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
                        <a href="#" class="btn-login modal-footer-login1">Đăng nhập</a>
                        <span class="sp-register">Bạn chưa có tài khoản? <a href="#" class="btn-register">ĐĂNG KÝ
                                NGAY</a></span>
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

</html>