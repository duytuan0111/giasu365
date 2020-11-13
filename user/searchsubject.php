<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tìm gia sư theo môn</title>

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
                <h1 class="d-h1">Tìm gia sư môn toán</h1>
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
            </div>
        </div>
    </div>
    <?php include_once "../inc_footer.php"; ?>
</body>

<script src="https://code.jquery.com/jquery.js"></script>
<script src="https://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<script src="../asset/js/header-home.js"></script>

</html>