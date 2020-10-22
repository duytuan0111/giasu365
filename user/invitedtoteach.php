<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>phụ huynh mời dạy</title>
    
    <!-- Latest compiled and minified CSS & JS -->
    <link rel="stylesheet" media="screen" href="https://netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="../asset/css/style.css">
    <script src="https://code.jquery.com/jquery.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    
    
    <script>
        function myFunction2() {
            document.getElementById("click-v2").classList.toggle("show2");
        }
    
        window.onclick = function (event) {
            if (!event.target.matches('.click1')) {
                var dropdowns = document.getElementsByClassName("click1");
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
      <div class="invited-teach">
          <?php
            include_once "../inc_nav-bar.php";
          ?>
          <div class="invited-teach2">
              <div class="invited-teach2-v1">
                  <p>Danh sách phụ huynh mời dạy</p>
              </div>
              <div class="invited-teach2-v2">
                    <hr class="hr1">
                    <hr class="hr2">
              </div>
              <div class="invited-teach2-v3">
                  <table class="table table-hover content-teacher2-v2">
                      <thead>
                          <tr>
                              <th class="text-teach">Họ tên phụ huynh</th>
                              <th class="text-teach">Mã lớp</th>
                              <th class="text-teach">Địa chỉ</th>
                              <th class="text-teach">Ngày mời dạy</th>
                              <th class="text-teach">Nhận dạy</th>
                              <th class="text-teach">Xóa</th>
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
                              <td class="table-td">12/08/2020</td>
                              <td class="table-td">
                                  <div class="table-yes">
                                      <div class="yes"><a href="#">Nhận lớp</a></div>
                                      <div class="no"><a href="#">Từ chối</a></div>
                                  </div>
                              </td>
                              <td class="table-td">
                                  <a href="#"><i class="fa fa-trash" aria-hidden="true"></i></a>
                              </td>
                          </tr>
                      </tbody>
                  </table>
                  <div class="invited-teach2-v4">
                      <div class="invited-teach2-v4-1">
                            <div class="invited-teach2-v4-1a">
                                <p>Nguyễn Mạnh Huy</p>
                                <button class="click1" onclick="myFunction2()">
                                    <a href="#"><span class="fa fa-chevron-circle-down" aria-hidden="true"></span></a>
                                </button>
                                
                                <div class="invited-teach2-v4-2s">
                                    <p>Mã lớp: 12345 <a href="#">(Xem chi tiết)</a></p>
                                </div>
                            </div>
                            <div class="invited-teach2-v4-1b">
                                <a href="#"><i class="fa fa-trash" aria-hidden="true"></i></a>
                            </div>
                            <div class="invited-teach2-v4-1c">
                                <div class="yes">
                                    <a href="#">Nhận lớp</a>
                                </div>
                                <div class="no">
                                    <a href="#">Từ chối</a>
                                </div>
                            </div>
                        </div>
                        <div class="invited-teach2-v4-2">
                            <p>Mã lớp: 12345 <a href="#">(Xem chi tiết)</a></p>
                        </div>
                        <div class="invited-teach2-v4-3" id="click-v2">
                            <div class="invited-teach2-v4-3a">
                                <i class="fa fa-clock-o"></i>12/08/2020
                            </div>
                            <div class="invited-teach2-v4-3b">
                                <i class="fa fa-map-marker"></i>342 Khương Đình, Thanh Xuân, Hà Nội
                            </div>
                            <div class="click-v2">
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
              </div>
                <div class="pagination">
                    <ul class="pagination1">
                        <li class="left"><a href="#"><i class="fa fa-angle-double-left" aria-hidden="true"></i></a></li>
                        <li class="number"><a href="#">1</a></li>
                        <li class="number"><a href="#">2</a></li>
                        <li class="number"><a href="#">3</a></li>
                        <li class="number"><a href="#">4</a></li>
                        <li class="number"><a href="#">5</a></li>
                        <li class="right"><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i></a></li>
                    </ul>
              </div>
          </div>
      </div>  
    <?php
        include_once "../inc_footer.php"
    ?>
</body>
</html>