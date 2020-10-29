<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giáo viên đề nghị dạy</title>

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
            <div class="manager-table">
                <table class="table table-hover content-teacher2-v2">
                    <thead>
                        <tr>
                            <th class="text-teach">Họ tên gia sư</th>
                            <th class="text-teach">Mã lớp</th>
                            <th class="text-teach">Môn học</th>
                            <th class="text-teach">Học phí</th>
                            <th class="text-teach">Hình thức</th>
                            <th class="text-teach">Hành động</th>
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
                            <td class="table-td">Toán</td>
                            <td class="table-td"><span class="red">120.000vnđ/giờ</span></td>
                            <td class="table-td">
                                <div class="select green" id="trangthai">
                                    Online
                                </div>
                            </td>
                            <td class="table-td">
                                <div class="table-yes">
                                    <div class="yes bluebg"><a data-toggle="modal" href='#yes-suggested'>Đồng ý</a>
                                    </div>
                                    <div class="no"><a data-toggle="modal" href='#no-suggested'>Từ chối</a></div>
                                </div>
                            </td>
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
                        <div class="manager4-v3 div-manager4">
                            <div class="manager4-v3-1 manager4-v2 div-manager">
                                <p>Toán</p>
                            </div>
                            <div class="manager4-v3-2s div-manager1">
                                <i class="fa fa-book" aria-hidden="true"></i>Toán</p>
                            </div>
                            <div class="manager4-v3-2 div">
                                <img src="../asset/images/Group (3).png" alt=""> <span class="red">120.000vnđ/giờ</span>
                            </div>
                        </div>
                        <div class="manager4-v3-3">
                            <div class="yes bluebg">
                                <a data-toggle="modal" href='#yes-suggested'>Đồng ý</a>
                            </div>
                            <div class="no">
                                <a data-toggle="modal" href='#no-suggested'>Từ chối</a>
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
        <div class="modal fade" id="yes-suggested">
            <div class="modal-dialog modal-dialog1">
                <div class="modal-content modal-content1">
                    <div class="modal-header modal-header-logout">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title">Thông báo </h4>
                    </div>
                    <div class="modal-body modal-infor">
                        <img src="../asset/images/Group 1463 (1).png" alt="" style="width:30px; height:30px">
                        <div class="modal-body-infor">
                            Bạn chắc chắn muốn đồng ý lời đề nghị dạy này?
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary btn-ok">OK</button>
                        <button type="button" class="btn btn-default btn-close" data-dismiss="modal">HỦY</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="no-suggested">
            <div class="modal-dialog modal-dialog1">
                <div class="modal-content modal-content1">
                    <div class="modal-header modal-header-logout">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title">Thông báo </h4>
                    </div>
                    <div class="modal-body modal-infor">
                        <img src="../asset/images/Group 1463 (1).png" alt="" style="width:30px; height:30px">
                        <div class="modal-body-infor">
                            Bạn chắc chắn muốn từ chối lời đề nghị dạy này?
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

</html>