<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Giảng viên</title>
        <!-- Bootstrap -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link type="text/css" rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="bootstrap/css/signin.css">
        <link rel="stylesheet" href="../scripts/jquery-ui-1.11.4/style.css">
        <link rel="stylesheet" href="../scripts/jquery-ui-1.11.4/jquery-ui.min.css">
        <script src="../jquery-ui-1.11.4/jquery-ui.min.js"></script>        
        <script src="bootstrap/js/jquery-1.11.3.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="scripts/ckeditor/ckeditor.js"></script>
        
        <script>
            $(function() {
              $( "#txtNgaySinh" ).datepicker();
            });
        </script>
    </head>
    <body>
        <div class="container body-content">
            <div class="page-header">
                <h2 style="color: darkblue;">
                    HỆ THỐNG QUẢN LÝ NHÓM LÀM NIÊN LUẬN</h2>
            </div> 
            <!-- Static navbar -->  
            <nav class="navbar navbar-default">
                <div class="container">                
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="navbar-collapse collapse">                        
                        <ul class="nav navbar-nav">
                            <li class="dropdown">
                                <a href="?cn=ttgv" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    Giảng viên
                                    <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="?cn=ttgv">Thông tin cá nhân</a></li>
                                    <li class="divider"></li>
                                    <li><a href="?cn=dmk">Đổi mật khẩu</a></li>
                                </ul>
                            </li>
                            <li><a href="?cn=kehoach">Kế hoạch</a></li>
                            <li><a href="?cn=dsdt">Đề tài</a></li>
                            <li><a href="?cn=khotl">Kho tài liệu</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    Chấm điểm
                                    <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="?cn=dstc">Tiêu chí</a></li>
                                    <li class="divider"></li>
                                    <li><a href="?cn=nhapdiem">Nhập điểm</a></li>

                                </ul>
                            </li>
                            <li><a href="?cn=qldiendan">Thảo luận</a></li>
                            <li><a href="giaodien/dang-nhap.php">Đăng xuất</a></li>                        
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                            <li> 
                                <button type="button" class="btn btn-link" data-toggle="modal" data-target=".bs-example-modal-lg" style="padding: 0px 0px; margin-top: 5px; margin-right: 40px;">
                                     <img src="images/search-icon(4).png">
                                </button>
                                <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                                    <div class="modal-dialog modal-lg">       
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                                <h4 class="modal-title" id="myLargeModalLabel" style="color: darkblue; font-weight: bold;">Thanh tìm kiếm</h4>
                                            </div>
                                            <div class="modal-body">
                                                <form action="" id="" method="post" class="form-inline" align="center">                         
                                                     <input type="text" name="" id="" value="" class="form-control" style="width: 90%">
                                                     <button type="button" class="btn btn-info" style="padding: 0px 0px;">
                                                         <img src="images/Search.png">
                                                     </button>                                         
                                                </form>                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>                        
                        </ul>
                    </div><!--/.nav-collapse -->
                </div><!--/container -->
            </nav>

            <div class="row">
                                
                <?php
                    if (isset($_GET['cn'])) {
                        if ($_GET['cn'] == "ttgv")
                            include("giangvien/thong-tin-giang-vien.php");
                        if ($_GET['cn'] == "dmk")
                            include("giangvien/doi-mat-khau.php");

                        if ($_GET['cn'] == "kehoach")
                            include("giangvien/theo-doi-ke-hoach.php");
                        if($_GET['cn'] == "chitietkehoach")
                            include("giangvien/ke-hoach-chi-tiet.php");

                        if ($_GET['cn'] == "dsdt")
                            include("giangvien/danh-sach-de-tai.php");
                        if ($_GET['cn'] == "themdt")
                            include("giangvien/them-de-tai.php");
                        if ($_GET['cn'] == "suadetai")
                            include("giangvien/sua-de-tai.php");

                        if ($_GET['cn'] == "khotl")
                            include("giangvien/kho-tai-lieu.php");

                        if ($_GET['cn'] == "dstc")
                            include("giangvien/quy-dinh-tieu-chi.php");
                        if ($_GET['cn'] == "themtieuchi")
                            include("giangvien/them-tieu-chi.php");
                         if ($_GET['cn'] == "capnhattieuchi")
                            include("giangvien/cap-nhat-tieu-chi.php");
                         
                        if ($_GET['cn'] == "nhapdiem")
                            include("giangvien/nhap-diem.php");

                        if ($_GET['cn'] == "qldiendan")
                            include("giaodien/quan-ly-dien-dan.php");
                        if ($_GET['cn'] == "thaoluan")
                            include("giaodien/chu-de-thao-luan.php");
                        if ($_GET['cn'] == "phucdap")
                            include("giaodien/them-chu-de-thao-luan.php");
                    }
                ?>
            </div> <!-- /container -->
            <hr>
            <footer class="footer">
                <p>&copy; Company 2015</p>
            </footer>                     
        </div>                   
    </body>
</html>
