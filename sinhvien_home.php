<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Sinh viên</title>
        <!-- Bootstrap -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link type="text/css" rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="bootstrap/css/signin.css">
        <script src="bootstrap/js/jquery-1.11.3.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="scripts/ckeditor/ckeditor.js"></script>
    </head>    
    <body>
        <div class="container body-content">  
            <div class="page-header">
                <h2 style="color: darkblue;">HỆ THỐNG QUẢN LÝ NHÓM LÀM NIÊN LUẬN</h2>
            </div> <!-- /page-header -->       
            <!-- Static navbar -->       
            <nav class="navbar navbar-default">
                <div class="container">                
                    <div id="navbar" class="navbar-collapse collapse">
                        <ul class="nav navbar-nav">
                            <li class="dropdown active">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    Thông tin sinh viên
                                    <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="?cn=ttsv">Thông tin cá nhân</a></li>
                                    <li class="divider"></li>
                                    <li><a href="?cn=xemcv">Xem công việc</a></li>
                                    <hr style="margin-bottom: 7px; margin-top: 7px;">
                                    <li><a href="?cn=dmk">Đổi mật khẩu</a></li>

                                </ul>
                            </li>
                            <li><a href="?cn=dknl">Đăng ký niên luận</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    Quản lý công việc
                                    <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="?cn=dscv">Danh sách các nhiệm vụ</a></li>
                                    <li class="divider"></li>                                
                                    <li><a href="?cn=congviec">Phân nhiệm vụ</a></li>
                                    <hr style="margin-bottom: 7px;margin-top: 10px;">                               
                                    <li><a href="?cn=noptl">Nộp tài liệu</a></li>                               
                                </ul>
                            </li>                        
                            <li><a href="?cn=xemdiem">Xem kết quả</a></li>
                            <li><a href="?cn=diendan">Diễn đàn</a></li>    
                            <li><a href="?cn=dangnhap">Đăng nhập</a></li>
                            <li><a href="../navbar-static/">Đăng xuất</a></li>
                        </ul>
                    </div><!--/.nav-collapse -->
                </div>
            </nav>
            <div class="row">    
                <div class="col-md-12" style="text-align: right;">
                    <form action="" id="" method="post" class="form-inline">
                        <div class="form-group">
                            <input type="text" name="" id="" value="" class="form-control" style="width: 500px;"> 
                            <button type="button" class="btn btn-info" style="padding: 0px 0px;">
                                <img src="images/Search.png">
                            </button>
                        </div>                                          
                    </form>

                </div>

                <?php
                    if (isset($_GET['cn'])) {
                        if ($_GET['cn'] == "ttsv")
                            include("sinhvien/thong-tin-sinh-vien.php");
                        if ($_GET['cn'] == "dmk")
                            include("sinhvien/doi-mat-khau.php");
                        if ($_GET['cn'] == "xemcv")
                            include("giaodien/xem-cong-viec-duoc-giao.php");

                        if ($_GET['cn'] == "dknl")
                            include("giaodien/dang-ky-de-tai.php");

                        if ($_GET['cn'] == "diendan")
                            include("giaodien/dien-dang-thao-luan.php");
                        if ($_GET['cn'] == "themthaoluan")
                            include("giaodien/them-chu-de-thao-luan.php");
                        if ($_GET['cn'] == "thaoluan")
                            include("giaodien/chu-de-thao-luan.php");
                        if ($_GET['cn'] == "phucdap")
                            include("giaodien/them-chu-de-thao-luan.php");

                        if ($_GET['cn'] == "dscv")
                            include("giaodien/danh-sach-cong-viec.php");
                        if ($_GET['cn'] == "congviec")
                            include("giaodien/phan-cong-nhiem-vu.php");
                        if ($_GET['cn'] == "themcv")
                            include("giaodien/them-cong-viec.php");
                        if ($_GET['cn'] == "capnhatcv")
                            include("giaodien/cap-nhat-cong-viec.php");
                        if ($_GET['cn'] == "noptl")
                            include("giaodien/nop-tai-lieu.php");

                        if ($_GET['cn'] == "xemdiem")
                            include("giaodien/xem-diem.php");

                        if ($_GET['cn'] == "dangnhap")
                            include("giaodien/dang-nhap.php");
                    }
                ?>

            </div> <!-- /container -->

            <hr>
            <footer class="footer">
                <p style="margin-left: 20px;">&copy; Company 2015</p>
            </footer>
        </div>
    </body>
</html>
