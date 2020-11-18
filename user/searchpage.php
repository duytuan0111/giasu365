<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tìm gia sư</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"
        integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../asset/css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="../asset/css/header-home.css">

</head>

<body>
    <div class="container-fluid">
        <?php include_once "../header-home.php"; ?>
        <div class="row" id="menu-bottom1">
            <div class="col-md-8 d-home d-home-search">
                <h1 class="d-h1">Tìm gia sư</h1>
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
        <div class="parent-detail parent-detail-01 d-detail">
            <div class="parent-detail1">
                <p class="blue">Gia sư 365 / Tìm gia sư / <span class="black">Nguyễn Thanh Huyền</span></p>
            </div>
            <div class="d-main-subject">
                <div class="d-main-title">
                    <h1 class="t-h1-inline">Danh sách gia sư mới nhất</h1>
                    <div class="t-yellow-under d-yellow-search-page">

                    </div>
                </div>
            </div>
        </div>
        <div class="d-detail-teacher">
            <div class="row d-detail-teacher1">
                <div class="col-md-3 col-sm-4 col-xm-12 d-detail-teacher2">
                    <img src="../asset/images/B.jpg" alt="" class="d-detail-teacher-img">
                    <p class="d-name">
                        Ngọc Bích
                    </p>
                    <p class="d-name d-name-subject">
                        Toán, Tiếng Anh, Ngữ văn
                    </p>
                    <p class="d-name d-name-address">
                        <img src="../asset/images/pin 1.png" alt="">
                        Hà Nội
                    </p>
                    <p class="d-name d-vnd">
                        130.000vnđ/giờ
                    </p>
                    <div class="d-name-invited">
                        <div class="d-invited">
                            <a data-toggle="modal" href='#modal-login' class="d-name d-invited-a"><img
                                    src="../asset/images/send 1.png" alt="">
                                Mời dạy</a>
                        </div>
                        <div class="d-invited-p">
                            <p class="d-name d-save"><i class="fa fa-heart-o" aria-hidden="true"></i> Lưu</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row d-detail-teacher1">
                <div class="col-md-3 col-sm-4 col-xm-12 d-detail-teacher2">
                    <img src="../asset/images/B.jpg" alt="" class="d-detail-teacher-img">
                    <p class="d-name">
                        Ngọc Bích
                    </p>
                    <p class="d-name d-name-subject">
                        Toán, Tiếng Anh, Ngữ văn
                    </p>
                    <p class="d-name d-name-address">
                        <img src="../asset/images/pin 1.png" alt="">
                        Hà Nội
                    </p>
                    <p class="d-name d-vnd">
                        130.000vnđ/giờ
                    </p>
                    <div class="d-name-invited">
                        <div class="d-invited">
                            <a data-toggle="modal" href='#modal-login' class="d-name d-invited-a"><img
                                    src="../asset/images/send 1.png" alt="">
                                Mời dạy</a>
                        </div>
                        <div class="d-invited-p">
                            <p class="d-name d-save"><i class="fa fa-heart-o" aria-hidden="true"></i> Lưu</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row d-detail-teacher1">
                <div class="col-md-3 col-sm-4 col-xm-12 d-detail-teacher2">
                    <img src="../asset/images/B.jpg" alt="" class="d-detail-teacher-img">
                    <p class="d-name">
                        Ngọc Bích
                    </p>
                    <p class="d-name d-name-subject">
                        Toán, Tiếng Anh, Ngữ văn
                    </p>
                    <p class="d-name d-name-address">
                        <img src="../asset/images/pin 1.png" alt="">
                        Hà Nội
                    </p>
                    <p class="d-name d-vnd">
                        130.000vnđ/giờ
                    </p>
                    <div class="d-name-invited">
                        <div class="d-invited">
                            <a data-toggle="modal" href='#modal-login' class="d-name d-invited-a"><img
                                    src="../asset/images/send 1.png" alt="">
                                Mời dạy</a>
                        </div>
                        <div class="d-invited-p">
                            <p class="d-name d-save"><i class="fa fa-heart-o" aria-hidden="true"></i> Lưu</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row d-detail-teacher1">
                <div class="col-md-3 col-sm-4 col-xm-12 d-detail-teacher2">
                    <img src="../asset/images/B.jpg" alt="" class="d-detail-teacher-img">
                    <p class="d-name">
                        Ngọc Bích
                    </p>
                    <p class="d-name d-name-subject">
                        Toán, Tiếng Anh, Ngữ văn
                    </p>
                    <p class="d-name d-name-address">
                        <img src="../asset/images/pin 1.png" alt="">
                        Hà Nội
                    </p>
                    <p class="d-name d-vnd">
                        130.000vnđ/giờ
                    </p>
                    <div class="d-name-invited">
                        <div class="d-invited">
                            <a data-toggle="modal" href='#modal-login' class="d-name d-invited-a"><img
                                    src="../asset/images/send 1.png" alt="">
                                Mời dạy</a>
                        </div>
                        <button class="d-invited-p">
                            <p class="d-name d-save"><i class="fa fa-heart-o" aria-hidden="true"></i> Lưu</p>
                        </button>
                    </div>
                </div>
            </div>

        </div>
        <div class="d-main-subject">
            <div class="d-main-title">
                <h1 class="t-h1-inline">Gia sư theo môn học</h1>
                <div class="t-yellow-under d-yellow-search-page2">

                </div>
            </div>
            <div class="d-detail-teacher-key">
                <div class="d-class-detail-keyword">
                    <div class="d-teacher-key col-md-2 col-sm-4 col-xs-6">
                        <a href="#" class="d-name d-name-key">Gia sư môn toán lớp 1</a>
                    </div>
                    <div class="d-teacher-key col-md-2 col-sm-4 col-xs-6">
                        <a href="#" class="d-name d-name-key">Gia sư môn toán lớp 1</a>
                    </div>
                    <div class="d-teacher-key col-md-2 col-sm-4 col-xs-6">
                        <a href="#" class="d-name d-name-key">Gia sư môn toán lớp 1</a>
                    </div>
                    <div class="d-teacher-key col-md-2 col-sm-4 col-xs-6">
                        <a href="#" class="d-name d-name-key">Gia sư môn toán lớp 1</a>
                    </div>
                    <div class="d-teacher-key col-md-2 col-sm-4 col-xs-6">
                        <a href="#" class="d-name d-name-key">Gia sư môn toán lớp 1</a>
                    </div>
                    <div class="d-teacher-key col-md-2 col-sm-4 col-xs-6">
                        <a href="#" class="d-name d-name-key">Gia sư môn toán lớp 1</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-main-subject">
            <div class="d-main-title">
                <h1 class="t-h1-inline">Gia sư theo lớp học</h1>
                <div class="t-yellow-under d-yellow-search-page3">

                </div>
            </div>
            <div class="d-detail-teacher-key">
                <div class="d-class-detail-keyword">
                    <div class="d-teacher-key col-md-2 col-sm-4 col-xs-6">
                        <a href="#" class="d-name d-name-key">Gia sư môn toán lớp 1</a>
                    </div>
                    <div class="d-teacher-key col-md-2 col-sm-4 col-xs-6">
                        <a href="#" class="d-name d-name-key">Gia sư môn toán lớp 1</a>
                    </div>
                    <div class="d-teacher-key col-md-2 col-sm-4 col-xs-6">
                        <a href="#" class="d-name d-name-key">Gia sư môn toán lớp 1</a>
                    </div>
                    <div class="d-teacher-key col-md-2 col-sm-4 col-xs-6">
                        <a href="#" class="d-name d-name-key">Gia sư môn toán lớp 1</a>
                    </div>
                    <div class="d-teacher-key col-md-2 col-sm-4 col-xs-6">
                        <a href="#" class="d-name d-name-key">Gia sư môn toán lớp 1</a>
                    </div>
                    <div class="d-teacher-key col-md-2 col-sm-4 col-xs-6">
                        <a href="#" class="d-name d-name-key">Gia sư môn toán lớp 1</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-main-subject">
            <div class="d-main-title">
                <h1 class="t-h1-inline">Gia sư theo tỉnh thành</h1>
                <div class="t-yellow-under d-yellow-search-page4">

                </div>
            </div>
            <div class="d-detail-teacher-key">
                <div class="d-class-detail-keyword">
                    <div class="d-teacher-key col-md-2 col-sm-4 col-xs-6">
                        <a href="#" class="d-name d-name-key">Gia sư môn toán lớp 1</a>
                    </div>
                    <div class="d-teacher-key col-md-2 col-sm-4 col-xs-6">
                        <a href="#" class="d-name d-name-key">Gia sư môn toán lớp 1</a>
                    </div>
                    <div class="d-teacher-key col-md-2 col-sm-4 col-xs-6">
                        <a href="#" class="d-name d-name-key">Gia sư môn toán lớp 1</a>
                    </div>
                    <div class="d-teacher-key col-md-2 col-sm-4 col-xs-6">
                        <a href="#" class="d-name d-name-key">Gia sư môn toán lớp 1</a>
                    </div>
                    <div class="d-teacher-key col-md-2 col-sm-4 col-xs-6">
                        <a href="#" class="d-name d-name-key">Gia sư môn toán lớp 1</a>
                    </div>
                    <div class="d-teacher-key col-md-2 col-sm-4 col-xs-6">
                        <a href="#" class="d-name d-name-key">Gia sư môn toán lớp 1</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="d-main-subject">
            <div class="d-main-title">
                <h1 class="t-h1-inline">Danh sách gia sư</h1>
                <div class="t-yellow-under d-yellow-search-page5">

                </div>
            </div>
            <div class="d-select-search-page">
                <div>
                    <li class="nav-item active"><a href="#topnews" class="d-top-news active" data-toggle="tab">Hàng
                            đầu</a>
                    </li>
                    <li class="nav-item"><a href="#views" class="d-views" data-toggle="tab">Xem nhiều</a></li>
                </div>
            </div>
            <div class="row tab-content">
                <div class="tab-pane fade in active d-padding-search" id="topnews">
                    <div class="tab-content-top-news d-background-gray">
                        <img src="../asset/images/B.jpg" alt="" class="d-detail-teacher-img d-img-search">
                        <div class="d-list">
                            <p class="d-name d-name-search">
                                Ngọc Bích
                            </p>
                            <p class="d-name d-name-subject d-name-search d-left">
                                Toán, Tiếng Anh, Ngữ văn
                            </p>
                            <p class="d-name d-vnd d-vnd-search">
                                130.000vnđ/giờ
                            </p>
                            <p class="d-name d-name-address ">
                                <img src="../asset/images/pin 1.png" alt="">
                                Hà Nội
                            </p>
                        </div>
                        <div class="d-heart">
                            <li class="heart"></li>
                        </div>
                    </div>
                    <div class="tab-content-top-news">
                        <img src="../asset/images/B.jpg" alt="" class="d-detail-teacher-img d-img-search">
                        <div class="d-list">
                            <p class="d-name d-name-search">
                                Ngọc Bích
                            </p>
                            <p class="d-name d-name-subject d-name-search d-left">
                                Toán, Tiếng Anh, Ngữ văn
                            </p>
                            <p class="d-name d-vnd d-vnd-search">
                                130.000vnđ/giờ
                            </p>
                            <p class="d-name d-name-address ">
                                <img src="../asset/images/pin 1.png" alt="">
                                Hà Nội
                            </p>
                        </div>
                        
                        <div class="d-heart">
                            <li class="heart"></li>
                        </div>
                    </div>
                    <div class="tab-content-top-news">
                        <img src="../asset/images/B.jpg" alt="" class="d-detail-teacher-img d-img-search">
                        <div class="d-list">
                            <p class="d-name d-name-search">
                                Ngọc Bích
                            </p>
                            <p class="d-name d-name-subject d-name-search d-left">
                                Toán, Tiếng Anh, Ngữ văn
                            </p>
                            <p class="d-name d-vnd d-vnd-search">
                                130.000vnđ/giờ
                            </p>
                            <p class="d-name d-name-address ">
                                <img src="../asset/images/pin 1.png" alt="">
                                Hà Nội
                            </p>
                        </div>
                        
                        <div class="d-heart">
                            <li class="heart"></li>
                        </div>
                    </div>
                    <div class="tab-content-top-news d-background-gray">
                        <img src="../asset/images/B.jpg" alt="" class="d-detail-teacher-img d-img-search">
                        <div class="d-list">
                            <p class="d-name d-name-search">
                                Ngọc Bích
                            </p>
                            <p class="d-name d-name-subject d-name-search d-left">
                                Toán, Tiếng Anh, Ngữ văn
                            </p>
                            <p class="d-name d-vnd d-vnd-search">
                                130.000vnđ/giờ
                            </p>
                            <p class="d-name d-name-address ">
                                <img src="../asset/images/pin 1.png" alt="">
                                Hà Nội
                            </p>
                        </div>
                        
                        <div class="d-heart">
                            <li class="heart"></li>
                        </div>
                    </div>
                    
                </div>
                <div class="tab-pane d-padding-search" id="views">
                    <div class="tab-content-top-news d-background-gray">
                        <img src="../asset/images/B.jpg" alt="" class="d-detail-teacher-img d-img-search">
                        <div class="d-list">
                            <p class="d-name d-name-search">
                                Ngọc Bích
                            </p>
                            <p class="d-name d-name-subject d-name-search d-left">
                                Toán, Tiếng Anh, Ngữ văn
                            </p>
                            <p class="d-name d-vnd d-vnd-search">
                                130.000vnđ/giờ
                            </p>
                            <p class="d-name d-name-address ">
                                <img src="../asset/images/pin 1.png" alt="">
                                Hà Nội
                            </p>
                        </div>
                        
                        <div class="d-heart">
                            <li class="heart"></li>
                        </div>
                    </div>
                
                    <div class="tab-content-top-news">
                        <img src="../asset/images/B.jpg" alt="" class="d-detail-teacher-img d-img-search">
                        <div class="d-list">
                            <p class="d-name d-name-search">
                                Ngọc Bích
                            </p>
                            <p class="d-name d-name-subject d-name-search d-left">
                                Toán, Tiếng Anh, Ngữ văn
                            </p>
                            <p class="d-name d-vnd d-vnd-search">
                                130.000vnđ/giờ
                            </p>
                            <p class="d-name d-name-address ">
                                <img src="../asset/images/pin 1.png" alt="">
                                Hà Nội
                            </p>
                        </div>
                        
                        <div class="d-heart">
                            <li class="heart"></li>
                        </div>
                    </div>
                    <div class="tab-content-top-news">
                        <img src="../asset/images/B.jpg" alt="" class="d-detail-teacher-img d-img-search">
                        <div class="d-list">
                            <p class="d-name d-name-search">
                                Ngọc Bích
                            </p>
                            <p class="d-name d-name-subject d-name-search d-left">
                                Toán, Tiếng Anh, Ngữ văn
                            </p>
                            <p class="d-name d-vnd d-vnd-search">
                                130.000vnđ/giờ
                            </p>
                            <p class="d-name d-name-address ">
                                <img src="../asset/images/pin 1.png" alt="">
                                Hà Nội
                            </p>
                        </div>
                        
                        <div class="d-heart">
                            <li class="heart"></li>
                        </div>
                    </div>
                    <div class="tab-content-top-news d-background-gray">
                        <img src="../asset/images/B.jpg" alt="" class="d-detail-teacher-img d-img-search">
                        <div class="d-list">
                            <p class="d-name d-name-search">
                                Ngọc Bích
                            </p>
                            <p class="d-name d-name-subject d-name-search d-left">
                                Toán, Tiếng Anh, Ngữ văn
                            </p>
                            <p class="d-name d-vnd d-vnd-search">
                                130.000vnđ/giờ
                            </p>
                            <p class="d-name d-name-address ">
                                <img src="../asset/images/pin 1.png" alt="">
                                Nam Định
                            </p>
                        </div>
                        
                        <div class="d-heart">
                            <li class="heart"></li>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-banner-search-page">
            <img src="../asset/images/Tìm gia sư hàng đầu tại Timviec365.com.png" alt="" class="d-banner-search-img">
            <div class="d-signin">
                <a href="#" class="d-signin-teacher">Đăng tin tìm gia sư miễn phí</a>
            </div>
        </div>
    <div class="modal fade" id="modal-login">
        <div class="modal-dialog">
            <div class="modal-content modal-content-detail">
                <div class="modal-header modal-header-detail">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">
                        <div id="content-h4" style="text-align:center; color:#FFFFFF">Đăng nhập để mời dạy</div>
                    </h4>
                </div>
                <div class="modal-body">

                    <form action="" method="POST" role="form" class="modal-form-detail">
                        <div class="form-group form-parent-detail">
                            <i class="fa fa-phone icon-input-detail" aria-hidden="true"></i>
                            <input type="text" class="form-control input-detail" id="" placeholder="Nhập số điện thoại">
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
    <?php include_once "../inc_footer.php"; ?>
</body>

<script src="https://code.jquery.com/jquery.js"></script>
<script src="https://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<script src="../asset/js/header-home.js"></script>
<script type="text/javascript">
$(function (){
  var heart = '.heart',
      selected = '.selected';
  
  $(heart).on('change', function(){
    $(selected).each(function(){
      $(this).removeClass('selected');
    });
    $(this).addClass('selected');
  });
 
});
</script>

</html>