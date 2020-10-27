<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lý chung phụ huynh</title>

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
            <div class="manager1 row">
                <div class="manager1s col-md-3 col-sm-3 col-xs-6">
                    <div class="manager1-v1">
                        <p>21</p>
                    </div>
                    <div class="manager1-v2">
                        <hr>
                    </div>
                    <div class="manager1-v3">
                        <a href="">Gia sư phù hợp</a>
                    </div>
                </div>
                <div class="manager1a col-md-3 col-sm-3 col-xs-6">
                    <div class="manager1-v1">
                        <p>5</p>
                    </div>
                    <div class="manager1-v2">
                        <hr>
                    </div>
                    <div class="manager1-v3">
                        <a href="">Gia sư phù hợp</a>
                    </div>
                </div>
                <div class="manager1b col-md-3 col-sm-3 col-xs-6">
                    <div class="manager1-v1">
                        <p>22</p>
                    </div>
                    <div class="manager1-v2">
                        <hr>
                    </div>
                    <div class="manager1-v3">
                        <a href="">Gia sư phù hợp</a>
                    </div>
                </div>
                <div class="manager1c col-md-3 col-sm-3 col-xs-6">
                    <div class="manager1-v1">
                        <p>8</p>
                    </div>
                    <div class="manager1-v2">
                        <hr>
                    </div>
                    <div class="manager1-v3">
                        <a href="">Gia sư phù hợp</a>
                    </div>
                </div>
            </div>
            <div class="manager2">
                <div class="invited-teach2-v1">
                    <p>Danh sách gia sư đã mời dạy mới nhất</p>
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
                                <th class="text-teach">Địa chỉ</th>
                                <th class="text-teach">Hình thức</th>
                                <th class="text-teach">Ngày mời dạy</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="table-td">Nguyễn Mạnh Huy</td>
                                <td class="table-td">
                                    <div class="table-td1">
                                        <p>12345</p>
                                        <a href="#">(Xem chi tiết)</a>
                                    </div>
                                </td>
                                <td class="table-td">342 Khương Đình, Thanh Xuân, Hà Nội</td>
                                <td class="table-td">
                                    <div class="select" id="trangthai">
                                        <select name="status" id="trangthai" placeholder="trạng thái" class="trangthai">
                                            <option value="1" style="color:#1574D0;">Online</option>
                                            <option value="2" style="color:#29C667;">Gặp mặt</option>
                                        </select>
                                    </div>
                                </td>
                                <td class="table-td">12/08/2020</td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="manager4">
                        <div class="manager4-v1">
                            <div class="manager4-v1-1">
                                <p>Nguyễn Văn Trọng</p>
                            </div>
                            <div class="manager4-v1-2">
                                <p>Mã lớp: 12345 <a href="#">(Xem chi tiết)</a></p>
                            </div>
                        </div>
                        <div class="manager4s">
                            <div class="manager4-v2">
                                <a href="#">Gặp mặt</a>
                            </div>
                            <div class="manager4-v3">
                                <div class="manager4-v3-1">
                                    <i class="fa fa-clock-o" aria-hidden="true"></i>   12/08/2020
                                </div>
                                <div class="manager4-v3-2">
                                    <i class="fa fa-map-marker" aria-hidden="true"></i>    342 Khương Đình, Thanh Xuân, Hà Nội
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="content-teacher2-v3">
                        <a href="#">Xem tất cả >></a>
                    </div>
                </div>
            </div>
            <div class="manager3">
                <div class="invited-teach2-v1">
                    <p>Danh sách gia sư đã lưu mới nhất</p>
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
                                    <i class="fa fa-clock-o" aria-hidden="true"></i>   12/08/2020
                                </div>
                                <div class="manager4-v3-2">
                                    <i class="fa fa-map-marker" aria-hidden="true"></i>    342 Khương Đình, Thanh Xuân, Hà Nội
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
                    <div class="content-teacher2-v3">
                        <a href="#">Xem tất cả >></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
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
    
    <?php include_once "../inc_footer.php"; ?>
</body>

</html>