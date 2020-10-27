<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đổi mật khẩu</title>
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
    <?php require_once "../inc_header.php"; ?>
    <div class="reset-password">
        <?php require_once "../inc_nav-bar.php"; ?>
        <div class="reset-password1">
            <div class="received-content1">
                <p>Đổi mật khẩu</p>
            </div>
            <div class="invited-teach2-v2">
                <hr class="hr1">
                <hr class="hr2">
            </div>
            <div class="reset-password2">
                
                <form action="#" method="POST" role="form">
                    
                    <div class="form-group form-reset-password">
                        <label for="" class="label-input label"><span class="red">*</span> Mật khẩu hiện tại</label>
                        <i class="fa fa-eye-slash icon-input" aria-hidden="true"></i>
                        <input type="password" class="form-control" id="" placeholder="Input field">
                    </div>
                    <div class="form-group form-reset-password">
                        <label for="" class="label-input label"><span class="red">*</span> Mật khẩu mới</label>
                        <i class="fa fa-eye-slash icon-input icon-top1" aria-hidden="true"></i>
                        <input type="password" class="form-control" id="" placeholder="Input field">
                    </div>
                    <div class="form-group form-reset-password">
                        <label for="" class="label-input label"><span class="red">*</span> Nhập lại mật khẩu mới</label>
                        <i class="fa fa-eye-slash icon-input icon-top2" aria-hidden="true"></i>
                        <input type="password" class="form-control " id="" placeholder="Input field">
                    </div>             
                       
                   <div class="button">
                        <div class="button-submit">
                            <button type="submit" class="btn btn-primary">Đổi mật khẩu</button>
                        </div>
                        <div class="button-reset">
                            <button type="reset" class="btn btn-primary">Hủy</button>
                        </div>
                   </div>
                </form>
                
            </div>
        </div>
    </div>
    
    <div class="modal fade" id="modal-logout">
        <div class="modal-dialog modal-dialog1">
            <div class="modal-content modal-content1">
                <div class="modal-header modal-header-logout">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">Thông báo   </h4>
                </div>
                <div class="modal-body modal-infor">
                    <img src="../asset/images/Group 1463 (1).png" alt="" style="width:30px; height:30px">
                    <div class="modal-body-infor">
                        Bạn chắc chắn muốn đăng xuất khỏi hệ thống?
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary btn-ok">OK</button>
                    <button type="button" class="btn btn-default btn-close" data-dismiss="modal">HỦY</button>
                </div>
            </div>
        </div>
    </div>
    
    <?php require_once "../inc_footer.php" ?>
    <!-- <script>
        $(document).ready(function(){
            $('#modal-logout').modal('show');
        });
    </script> -->
</body>
</html>