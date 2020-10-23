<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đề nghị dạy</title>
    <link rel="stylesheet" media="screen" href="https://netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <link rel="stylesheet" href="../asset/css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery.js"></script>
    <script src="https://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>

</head>

<body>
    <?php include_once "../inc_header.php"; ?>
    <div class="offer-teach">
        <?php include_once "../inc_nav-bar.php"; ?>
        <div class="offer-teach1">
            <div class="received-content1">
                <p>Danh sách lớp đã đề nghị dạy</p>
            </div>
            <div class="invited-teach2-v2">
                <hr class="hr1">
                <hr class="hr2">
            </div>
            <div class="offer-teach2">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th class="text-teach">STT</th>
                            <th class="text-teach">Mã lớp</th>
                            <th class="text-teach">Môn học</th>
                            <th class="text-teach">Ngày gửi</th>
                            <th class="text-teach">Trạng thái</th>
                            <th class="text-teach">Xóa</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="table-td">1</td>
                            <td class="table-td">
                                <div class="table-td1">
                                    <p>12345</p>
                                    <a href="#">(Xem chi tiết)</a>
                                </div>
                            </td>
                            <td class="table-td">Toán lớp 2</td>
                            <td class="table-td">12/09/2020</td>
                            <td class="table-td">
                                <div class="select" id="">
                                    <select name="status" id="" data-placeholder="trạng thái">
                                        <option value="1" style="color:#29C667;">Chưa liên hệ</option>
                                        <option value="2" style="color:#1574D0;">Đang dạy</option>
                                        <option value="3" style="color:#FF0000;">Không mời dạy</option>
                                    </select>
                                </div>
                            </td>
                            <td class="table-td">
                                <a href="#"><i class="fa fa-trash" aria-hidden="true"></i></a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="offer-teach3">
                <div class="content-teacher3-v2-1">
                    <div class="content-teacher3-v2-1a">
                        <p>Mã lớp: 12345 <a href="#">(Xem chi tiết)</a></p>
                    </div>

                    <div class="content-teacher3-v2-2">
                        <div class="content-teacher3-v2-2a">
                            <i class="fa fa-clock-o"></i>12/08/2020
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
    <?php include_once "../inc_footer.php"; ?>
</body>

</html>