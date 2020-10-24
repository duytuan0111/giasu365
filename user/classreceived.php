<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lớp Đã Nhận Dạy</title>

    <!-- Latest compiled and minified CSS & JS -->
    <link rel="stylesheet" media="screen" href="https://netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <link rel="stylesheet" href="../asset/css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery.js"></script>
    <script src="https://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
    <script>
    function myFunction3() {
        document.getElementById("click-v3").classList.toggle("show3");
    }

    window.onclick = function(event) {
        if (!event.target.matches('.click2')) {
            var dropdowns = document.getElementsByClassName("click2");
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
    <div class="received-class">
        <?php
            include_once "../inc_nav-bar.php";
        ?>
        <div class="received-class-content">
            <div class="received-content1">
                <p>Danh sách lớp đã nhận dạy</p>
            </div>
            <div class="invited-teach2-v2">
                <hr class="hr1">
                <hr class="hr2">
            </div>
            <div class="received-content2">
                <table class="table table-hover content-teacher2-v2">
                    <thead>
                        <tr>
                            <th class="text-teach">Mã lớp</th>
                            <th class="text-teach">Môn học</th>
                            <th class="text-teach">Hình thức</th>
                            <th class="text-teach">Học phí</th>
                            <th class="text-teach">Ngày nhận</th>
                            <th class="text-teach">Trạng thái</th>
                            <th class="text-teach">Xóa</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="table-td">
                                <div class="table-td1">
                                    <p>12345</p>
                                    <a href="#">(Xem chi tiết)</a>
                                </div>
                            </td>
                            <td class="table-td">Tiếng Anh</td>
                            <td class="table-td">Gia sư tại nhà</td>
                            <td class="table-td" style="color: #FF0000;">120.000vnđ/giờ</td>
                            <td class="table-td">12/08/2020</td>
                            <td class="table-td">
                                <div class="select" id="trangthai">
                                    <select name="status" id="trangthai" data-placeholder="trạng thái"
                                        class="trangthai">
                                        <option value="1" style="color: #1574D0;">Kết thúc</option>
                                        <option value="2" style="color:#F8971C;">Đang dạy</option>
                                    </select>
                                </div>
                            </td>
                            <td class="table-td">
                                <a href="#"><i class="fa fa-trash" aria-hidden="true"></i></a>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div class="received-content3">
                    <div class="received-content3-v1">
                        <div class="received-content3-v1-1">
                            <p>Mã lớp: 12345 <a href="#">(Xem chi tiết)</a></p>
                        </div>
                        <button class="click2" onclick="myFunction3()">
                            <a href="#"><span class="fa fa-chevron-down" aria-hidden="true"></span></a>
                        </button>
                        <div class="received-content3-v1-2">
                            <select name="status" id="trangthai" data-placeholder="trạng thái" class="trangthai">
                                <option value="1" style="color: #1574D0;">Kết thúc</option>
                                <option value="2" style="color:#F8971C;">Đang dạy</option>
                            </select>
                        </div>
                    </div>
                    <div class="received-content3-v2">
                        <div class="received-content3-v2-1">
                            <div class="received-content3-v2-1a">
                                <p>Tiếng Anh</p>
                            </div>
                            <div class="received-content3-v2-1b">
                                <p>Gia sư tại nhà</p>
                            </div>
                            <div class="received-content3-v2-1c">
                                <p><img src="../asset/images/clock-circular-outline 1.png" alt=""> 12/07/2020</p>
                            </div>
                            <div class="received-content3-v2-1d">
                                <p><img src="../asset/images/Group (3).png" alt=""> 120.000 vnđ/giờ</p>
                            </div>
                        </div>
                        <div class="received-content3-v3s">
                            <div class="received-content3-v2-1c">
                                <p><img src="../asset/images/clock-circular-outline 1.png" alt=""> 12/07/2020</p>
                            </div>
                            <div class="received-content3-v2-1d">
                                <p><img src="../asset/images/Group (3).png" alt=""> 120.000 vnđ/giờ</p>
                            </div>
                        </div>
                        <div class="received-content3-v3" id="click-v3">
                            <div class="received-content3-v3-1">
                                <div class="received-content3-v2-1a">
                                    <p>Tiếng Anh</p>
                                </div>
                                <div class="received-content3-v2-1b">
                                    <p>Gia sư tại nhà</p>
                                </div>
                            </div>
                            <div class="received-content3-v3-2">
                                <select name="status" id="trangthai" data-placeholder="trạng thái" class="trangthai">
                                    <option value="1" style="color: #1574D0;">Kết thúc</option>
                                    <option value="2" style="color:#F8971C;">Đang dạy</option>
                                </select>
                                <div class="clicka">
                                    <a href="#"><i class="fa fa-trash" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="received-content3-v2-2">
                            <a href="#"><i class="fa fa-trash" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
                <div class="pagination">
                    <ul class="pagination1" id="pagination-1">
                        <li class="left"><a href="#"><i class="fa fa-angle-double-left" aria-hidden="true"></i></a></li>
                        <li class="number"><a href="#">1</a></li>
                        <li class="number"><a href="#">2</a></li>
                        <li class="number"><a href="#">3</a></li>
                        <li class="number"><a href="#">4</a></li>
                        <li class="number"><a href="#">5</a></li>
                        <li class="right"><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
    </div>
    <?php include_once "../inc_footer.php"; ?>
</body>

</html>