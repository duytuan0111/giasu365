<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gia sư đã lưu</title>

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
                <p>Danh sách gia sư đã lưu</p>
            </div>
            <div class="invited-teach2-v2">
                <hr class="hr1">
                <hr class="hr2">
            </div>
            <div class="manager-table2">
                <table class="table table-hover content-teacher2-v2">
                    <thead>
                        <tr>
                            <th class="text-teach">Họ tên gia sư</th>
                            <th class="text-teach">Môn dạy</th>
                            <th class="text-teach">Hình thức</th>
                            <th class="text-teach">Địa chỉ</th>
                            <th class="text-teach">Mời dạy</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="table-td">Nguyễn Mạnh Huy</td>
                            <td class="table-td">Toán</td>
                            <td class="table-td">
                                <div class="select" id="trangthai">
                                    <select name="status" id="trangthai" placeholder="trạng thái" class="trangthai">
                                        <option value="1" style="color:#1574D0;">Online</option>
                                        <option value="2" style="color:#29C667;">Gặp mặt</option>
                                    </select>
                                </div>
                            </td>
                            <td class="table-td">342 Khương Đình, Thanh Xuân, Hà Nội</td>
                            <td class="table-td">
                                <div class="moiday">
                                    <a data-toggle="modal" href='#popup-moiday'>Mời dạy</a>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div class="manager5">
                    <div class="manager4-v1">
                        <div class="manager4-v1-1">
                            <p>Nguyễn Văn Trọng</p>
                        </div>
                        <div class="moiday">
                            <a data-toggle="modal" href='#popup-moiday'>Mời dạy</a>
                        </div>

                    </div>
                    <div class="manager4s">
                        <div class="manager4-v2s">
                            <a href="#">Gặp mặt</a>
                        </div>
                        <div class="manager4-v3s">
                            <div class="manager4-v3-1">
                                <i class="fa fa-clock-o" aria-hidden="true"></i> 12/08/2020
                            </div>
                            <div class="manager4-v3-2">
                                <i class="fa fa-map-marker" aria-hidden="true"></i> 342 Khương Đình, Thanh Xuân, Hà
                                Nội
                            </div>
                        </div>
                    </div>
                    <div class="manager4-v4">
                        <div class="manager4-v4a">
                            <a href="#">Gặp mặt</a>
                        </div>
                        <div class="manager4-v4b">
                            <a data-toggle="modal" href="#popup-moiday">Mời dạy</a>
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