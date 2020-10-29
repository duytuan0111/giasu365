<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gia sư đang dạy</title>

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
            <div class="invited-teach2-v1">
                <p>Danh sách gia sư đang dạy</p>
            </div>
            <div class="invited-teach2-v2">
                <hr class="hr1">
                <hr class="hr2">
            </div>
            <div class="manager-table">
                <table class="table table-hover content-teacher2-v2">
                    <thead>
                        <tr>
                            <th class="text-teach">Họ tên gia sư</th>
                            <th class="text-teach">Mã lớp</th>
                            <th class="text-teach">Môn học</th>
                            <th class="text-teach">Học phí</th>
                            <th class="text-teach">Trạng thái</th>
                            <th class="text-teach">Hành động</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="table-td">Nguyễn Văn Trọng </td>
                            <td class="table-td">
                                <div class="table-td1">
                                    <p>12345</p>
                                    <a href="#">(Xem chi tiết)</a>
                                </div>
                            </td>
                            <td class="table-td">Toán</td>
                            <td class="table-td"><span class="red">120.000vnđ/giờ</span></td>
                            <td class="table-td">
                                <div class="select" id="trangthai">
                                    <select name="status" id="trangthai" placeholder="trạng thái" class="trangthai">
                                        <option value="1" style="color:#29C667;">Đang dạy</option>
                                        <option value="2" style="color:#F8971C;">Kết thúc</option>
                                    </select>
                                </div>
                            </td>
                            <td class="table-td">
                                <img src="../asset/images/Group 2554.png" alt="">
                                <span class="gray">(Đánh giá)</span>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div class="manager4">
                    <div class="manager4-v1">
                        <div class="manager4-v1-1">
                            <p>Nguyễn Văn Trọng </p>
                        </div>
                        <div class="manager4-v1-2">
                            <img src="../asset/images/Group 2554.png" alt="">
                            <span class="gray">(Đánh giá)</span>
                        </div>
                        <div class="teaching-select" id="trangthai">
                            <select name="status" id="trangthai" placeholder="trạng thái" class="trangthai">
                                <option value="1" style="color:#29C667;">Đang dạy</option>
                                <option value="2" style="color:#F8971C;">Kết thúc</option>
                            </select>
                        </div>
                    </div>
                    <div class="manager4s">
                        <div class="manager4-v2 manager4-select">
                            <select name="status" id="trangthai" placeholder="trạng thái" class="trangthai">
                                <option value="1" style="color:#29C667;">Đang dạy</option>
                                <option value="2" style="color:#F8971C;">Kết thúc</option>
                            </select>
                        </div>
                        <div class="manager4-v3 div-manager4 teaching1">
                            <div class="manager4-v3-1 manager4-v2 div-manager">
                                <p>Toán</p>
                            </div>
                            <div class="manager4-v1-2 manager4-malop">
                                <p>Mã lớp: 12345 <a href="#">(Xem chi tiết)</a></p>
                            </div>
                            <div class="manager4-v3-2s div-manager1 div-manager">
                                <i class="fa fa-book" aria-hidden="true"></i>Toán</p>
                            </div>
                            <div class="manager4-v3-2 div div-manager">
                                <img src="../asset/images/Group (3).png" alt=""> <span class="red">120.000vnđ/giờ</span>
                            </div>
                        </div>
                        <div class="manager4-v3-3 manager4-yes">
                            <div class="manager4-v3-2s">
                                <i class="fa fa-book" aria-hidden="true"></i>Toán</p>
                            </div>
                            <div class="manager4-v3-2 div">
                                <img src="../asset/images/Group (3).png" alt=""> <span class="red">120.000vnđ/giờ</span>
                            </div>
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