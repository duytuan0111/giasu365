<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lý gia sư</title>
    <link rel="stylesheet" href="../asset/css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"
        integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
    <script>
    function myFunction1() {
        document.getElementById("click-v1").classList.toggle("show1");
    }

    window.onclick = function(event) {
        if (!event.target.matches('.click')) {
            var dropdowns = document.getElementsByClassName("click");
            var i;
            for (i = 0; i < dropdowns.length; i++) {
                var openDropdown = dropdowns[i];
                if (openDropdown.classList.contains('show')) {
                    openDropdown.classList.remove('show');
                }
            }
        }
    }
    </script>
</head>

<body>
    <?php
        include_once "../inc_header.php";
    ?>
    <div id="ad-teacher">
        <?php
            include_once "../inc_nav-bar.php";        
        ?>
        <div class="content-teacher">
            <div class="content-teacher1 row">
                <div class="content-teacher1-v1 col-sm-4 cod-xs-4">
                    <div class="content-teacher1-v1-1">
                        <p>3</p>
                    </div>
                    <div class="hr">
                        <hr>
                    </div>
                    <div class="content-teacher1-v1-2">
                        <a href="#">Lớp mời dạy</a>
                    </div>
                </div>
                <div class="content-teacher1-v2 col-sm-4 cod-xs-4">
                    <div class="content-teacher1-v2-1">
                        <p>5</p>
                    </div>
                    <div class="hr">
                        <hr>
                    </div>
                    <div class="content-teacher1-v2-2">
                        <a href="#">Lớp đã nhận dạy</a>
                    </div>
                </div>
                <div class="content-teacher1-v3 col-sm-4 cod-xs-4">
                    <div class="content-teacher1-v3-1">
                        <p>2</p>
                    </div>
                    <div class="hr">
                        <hr>
                    </div>
                    <div class="content-teacher1-v3-2">
                        <a href="#">Lớp đã đề nghị dạy</a>
                    </div>
                </div>
                <div class="content-teacher1-v4 col-sm-4 cod-xs-4">
                    <div class="content-teacher1-v4-1">
                        <p>8</p>
                    </div>
                    <div class="hr">
                        <hr>
                    </div>
                    <div class="content-teacher1-v4-2">
                        <a href="#">Lớp đã lưu</a>
                    </div>
                </div>
                <div class="content-teacher1-v5 col-sm-4 cod-xs-4">
                    <div class="content-teacher1-v5-1">
                        <p>10</p>
                    </div>
                    <div class="hr">
                        <hr>
                    </div>
                    <div class="content-teacher1-v5-2">
                        <a href="#">Lượt xem hồ sơ</a>
                    </div>
                </div>
                <div class="content-teacher1-v6 col-sm-4 cod-xs-4">
                    <div class="content-teacher1-v6-1">
                        <p>1</p>
                    </div>
                    <div class="hr">
                        <hr>
                    </div>
                    <div class="content-teacher1-v6-2">
                        <a href="#">Số lần làm mới</a>
                    </div>
                </div>
            </div>
            <div class="content-teacher2">
                <div class="content-teacher2-v1">
                    <p>Danh sách phụ huynh mời dạy mới nhất</p>
                </div>
                <div class="hhr">
                    <hr>
                    <hr>
                </div>
                <div class="table-teacher">
                    <table class="content-teacher2-v2">
                        <tr>
                            <th class="text-teach">Họ tên phụ huynh</th>
                            <th class="text-teach">Mã lớp</th>
                            <th class="text-teach">Địa chỉ</th>
                            <th class="text-teach">Ngày mời dạy</th>
                            <th class="text-teach">Nhận dạy</th>
                            <th class="text-teach">Xóa</th>
                        </tr>
                        <tr>
                            <td class="teacher-v1">Nguyễn Mạnh Huy</td>
                            <td class="teacher">
                                <div class="teacher1">
                                    <p>12345</p>
                                </div>
                                <a href="#">(Xem chi tiết)</a>
                            </td>
                            <td class="teacher">342 Khương Đình, Thanh Xuân, Hà Nội
                            </td>
                            <td class="teacher">12/08/2020</td>
                            <td class="teacher">
                                <div class="teacher-yes">
                                    <div class="yes">
                                        <a href="#">Nhận lớp</a>
                                    </div>
                                    <div class="no">
                                        <a href="#">Từ chối</a>
                                    </div>
                                </div>
                            </td>
                            <td class="teacher2"><a href="#"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
                        </tr>
                    </table>
                    <div class="content-teacher2-v4">
                        <div class="content-teacher2-v4-1">
                            <div class="content-teacher2-v4-1a">
                                <p>Nguyễn Mạnh Huy</p>
                                <button class="click" onclick="myFunction1()">
                                    <a href="#"><i class="fa fa-chevron-down" aria-hidden="true"></i></a>
                                </button>
                                <div class="content-teacher2-v4-2s">
                                    <p>Mã lớp: 12345 <a href="#">(Xem chi tiết)</a></p>
                                </div>
                            </div>
                            <div class="content-teacher2-v4-1b">
                                <a href="#"><i class="fa fa-trash" aria-hidden="true"></i></a>
                            </div>
                            <div class="content-teacher2-v4-1c">
                                <div class="yes">
                                    <a href="#">Nhận lớp</a>
                                </div>
                                <div class="no">
                                    <a href="#">Từ chối</a>
                                </div>
                            </div>
                        </div>
                        <div class="content-teacher2-v4-2">
                            <p>Mã lớp: 12345 <a href="#">(Xem chi tiết)</a></p>
                        </div>
                        <div class="content-teacher2-v4-3" id="click-v1">
                            <div class="content-teacher2-v4-3a">
                                <i class="far fa-clock"></i>12/08/2020
                            </div>
                            <div class="content-teacher2-v4-3b">
                                <i class="fa fa-map-marker-alt"></i>342 Khương Đình, Thanh Xuân, Hà Nội
                            </div>
                            <div class="click-v1">
                                <div class="yes">
                                    <a href="#">Nhận lớp</a>
                                </div>
                                <div class="no">
                                    <a href="#">Từ chối</a>
                                </div>
                                <div class="clicka">
                                    <a href="#"><i class="fa fa-trash" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="content-teacher2-v3">
                        <a href="#">Xem tất cả >></a>
                    </div>
                </div>
            </div>
            <div class="content-teacher3">
                <div class="content-teacher3-v1">
                    <p>Danh sách lớp đã đề nghị dạy mới nhất</p>
                </div>
                <div class="hhr">
                    <hr>
                    <hr>
                </div>
                <div class="table-teacher">
                    <table class="content-teacher2-v2">

                        <tr>
                            <th class="text-teach">STT</th>
                            <th class="text-teach">Mã lớp</th>
                            <th class="text-teach">Môn học</th>
                            <th class="text-teach">Ngày gửi</th>
                            <th class="text-teach">Trạng thái</th>
                            <th class="text-teach">Xóa</th>
                        </tr>

                        <tr>
                            <td class="teacher">1</td>
                            <td class="teacher">
                                <div class="teacher1">
                                    <p>12345</p>
                                </div>
                                <a href="#">(Xem chi tiết)</a>
                            </td>
                            <td class="teacher-v1"><i class="fa fa-book"></i>Toán lớp 2</td>
                            <td class="teacher-v1"><i class="far fa-clock"></i>12/08/2020</td>
                            <td class="teacher">
                                <div class="select" id="select2">
                                    <select name="status" id="select2" data-placeholder="trạng thái">
                                        <option value="1" style="color:#29C667;">Chưa liên hệ</option>
                                        <option value="2" style="color:#1574D0;">Đang dạy</option>
                                        <option value="3" style="color:#FF0000;">Không mời dạy</option>
                                    </select>
                                </div>
                            </td>
                            <td class="teacher2"><a href="#"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
                        </tr>
                    </table>
                    <div class="content-teacher3-v2">
                        <div class="content-teacher3-v2-1">
                            <div class="content-teacher3-v2-1a">
                                <p>Mã lớp: 12345 <a href="#">(Xem chi tiết)</a></p>
                            </div>

                            <div class="content-teacher3-v2-2">
                                <div class="content-teacher3-v2-2a">
                                    <i class="far fa-clock"></i>12/08/2020
                                </div>
                                <div class="content-teacher3-v2-2b">
                                    <i class="fa fa-book"></i>Hóa học lớp 9
                                </div>
                            </div>
                        </div>
                        <div class="content-teacher3-v2-3">
                            <div class="select">
                                <select name="status" id="select2-1" class="select2">
                                    <option value="1" style="color:#29C667;">Chưa liên hệ</option>
                                    <option value="2" style="color:#1574D0;">Đang dạy</option>
                                    <option value="3" style="color:#FF0000;">Không mời dạy</option>
                                </select>
                            </div>

                            <div class="content-teacher3-v2-3a">
                                <a href="#"><i class="fa fa-trash" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="content-teacher2-v3">
                        <a href="#">Xem tất cả >></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php 
        include_once "../inc_footer.php";
    ?>
    <script>
    $('#select2').select2({
        tags: true,
        placeholder = "trạng thái"

    });
    </script>
</body>

</html>