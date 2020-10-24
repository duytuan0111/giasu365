<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lớp đã lưu</title>
    <link rel="stylesheet" media="screen" href="https://netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <link rel="stylesheet" href="../asset/css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery.js"></script>
    <script src="https://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
    
    <script>
    function myFunction4() {
        document.getElementById("click-v4").classList.toggle("show4");
    }

    window.onclick = function(event) {
        if (!event.target.matches('.click4')) {
            var dropdowns = document.getElementsByClassName("click4");
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
    <?php include_once "../inc_header.php"; ?>
    <div class="saved-class">
        <?php include_once "../inc_nav-bar.php"; ?>
        <div class="saved-class1">
            <div class="received-content1">
                <p>Danh sách lớp đã lưu</p>
            </div>
            <div class="invited-teach2-v2">
                <hr class="hr1">
                <hr class="hr2">
            </div>
            <div class="offer-teach2">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th class="text-teach">Mã lớp</th>
                            <th class="text-teach">Lịch học dự kiến</th>
                            <th class="text-teach">Môn học</th>
                            <th class="text-teach">Học phí</th>
                            <th class="text-teach">Đề nghị dạy</th>
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
                            <td class="table-td">
                                <p><span style="color: #1574D0;">Sáng:</span> T2</p>
                                <p><span style="color: #1574D0;">Chiều:</span> T2</p>
                                <p><span style="color: #1574D0;">Tối:</span> T2</p>
                            </td>
                            <td class="table-td">
                                <p>Toán</p>
                                <p>Tiếng Anh</p>
                                <p>Tiếng Trung</p>
                            </td>
                            <td class="table-td"><p class="red">120.000vnđ/giờ </p></td>
                            <td class="table-td">
                                <div class="saved-class2">
                                        <p><span style="color: #1574D0;">3</span>  lượt đề nghị</p>
                                   
                                    <div class="saved-class2-v2">
                                        <a href="#">Đề nghị dạy</a>
                                    </div>
                                </div>
                            </td>
                            <td class="table-td">
                                <a href="#" class="gray"><i class="fa fa-trash" aria-hidden="true"></i></a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="saved-class3">
                <div class="saved-class3-v1">
                    <p>Mã lớp: 12345 <a href="#">(Xem chi tiết)</a></p>
                    
                </div>
                <div class="received-content3-v2-2" id="trash">
                        <a href="#"><i class="fa fa-trash" aria-hidden="true"></i></a>
                    </div>
                <button class="click4" onclick="myFunction4()">
                    <a><span class="fa fa-chevron-down" aria-hidden="true"></span></a>
                </button>
                <div class="saved-class3-v2">
                    <i class="fa fa-book" aria-hidden="true"></i>
                    <p> Toán,Tiếng Anh,Tiếng Trung</p>
                </div>
                <div class="saved-class3-v3" id="click-v4">
                <div class="saved-class3-v3-1">
                    <div class="saved-class3-v3-1a">
                        Lịch học dự kiến:
                    </div>
                    <div class="saved-class3-v3-1s">
                        <p><span>Sáng:</span> T2</p>
                        <p><span>Chiều:</span> T2</p>
                        <p><span>Tối:</span> T2</p>
                    </div>
                </div>
                <div class="saved-class3-v3-2">
                    <div class="saved-class3-v3-2a">
                        <p>120.000vnđ/giờ </p>
                        <a href="#"><i class="fa fa-trash" aria-hidden="true"></i></a>
                    </div>
                    <div class="saved-class3-v3-3">
                            <p><span style="color: #1574D0;">3</span>  lượt đề nghị</p>
                        <div class="saved-class2-v2">
                            <a href="#">Đề nghị dạy</a>
                        </div>
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
    <?php include_once "../inc_footer.php"; ?>
</body>

</html>