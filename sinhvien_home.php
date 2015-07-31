<!DOCTYPE html>
<html>    
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Sinh viên</title>
        <!-- Bootstrap -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link type="text/css" rel="stylesheet" href="../public/css/login-bootstrap.css">
        <link type="text/css" rel="stylesheet" href="bootstrap/css/bootstrap.min.css">        
        <link rel="stylesheet" href="scripts/jquery-ui-1.11.4/style.css">
        <link type="text/css" rel="stylesheet" href="scripts/jquery-ui-1.11.4/jquery-ui.min.css">
        <script src="bootstrap/js/jquery-1.11.3.min.js"></script>
        <script type="text/javascript" src="scripts/jquery-ui-1.11.4/jquery-ui.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="scripts/ckeditor/ckeditor.js"></script>
        
        <script type="text/javascript">
            $(document).ready(function(){
                $('[data-toggle="tooltip"]').tooltip();   
            });
        </script>
        
        <script type="text/javascript">
            $(function() {
              $( "#txtNgayBatDauKH" ).datepicker({
                  dateFormat: "yy-mm-dd"
              });
            });
            $(function() {
              $( "#txtNgayKetThucKH" ).datepicker({
                  dateFormat: "yy-mm-dd"
              });
            });
            $(function() {
              $( "#txtNgayBatDauThucTe" ).datepicker({
                  dateFormat: "yy-mm-dd"
              });
            });
            $(function() {
              $( "#txtNgayKTThucTe" ).datepicker({
                  dateFormat: "yy-mm-dd"
              });
            });
        </script>
        <script type="text/javascript">            
            $(document).ready(function(){
                $('[data-toggle="tooltip"]').tooltip();   
            });
        </script>
        
    </head>             
    <?php 
        session_start();
    ?>
    
    <body>
        <div class="container body-content">  
            <div class="page-header">
                <h2 style="color: darkblue;">HỆ THỐNG QUẢN LÝ NHÓM LÀM NIÊN LUẬN</h2>
            </div> <!-- /page-header -->       
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
                                    <li><a href="?cn=phancongcv">Phân công việc</a></li>
                                    <hr style="margin-bottom: 7px;margin-top: 10px;">                               
                                    <li><a href="?cn=noptl">Nộp tài liệu</a></li>                               
                                </ul>
                            </li>                        
                            <li><a href="?cn=xemdiem">Xem điểm</a></li>
                            <li><a href="?cn=diendan">Thảo luận</a></li>  
<!--                            
                            <li><a href="sinhvien/dang-nhap-sv.php">Đăng nhập</a></li>
                            <li><a href="sinhvien/dang-nhap-sv.php">Đăng xuất</a></li>
-->
                           <?php 
                                $dn = "";
                                if(isset($_SESSION['user']))
                                {
                                    $dn = $_SESSION['user'];
                                }                                
                           ?>    
                            <li><a href="giaodienchung/dang-nhap.php"><?php echo $dn; ?></a></li>
                            <li><a href="giaodienchung/dang-nhap.php">Đăng xuất</a></li>
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
                </div>
            </nav>
            <div class="row">    
               
                <?php
                    if (isset($_GET['cn'])) {
                        if ($_GET['cn'] == "ttsv")
                            include("sinhvien/thong-tin-sinh-vien.php");
                        if ($_GET['cn'] == "dmk")
                            include("sinhvien/doi-mat-khau-sv.php");
                        if ($_GET['cn'] == "xemcv")
                            include("sinhvien/xem-cong-viec-duoc-giao.php");

                        if ($_GET['cn'] == "dknl")
                            include("sinhvien/dang-ky-de-tai.php");

                        if ($_GET['cn'] == "diendan")
                            include("giaodien/dien-dang-thao-luan.php");
                        if ($_GET['cn'] == "themthaoluan")
                            include("giaodien/them-chu-de-thao-luan.php");
                        if ($_GET['cn'] == "thaoluan")
                            include("giaodien/chu-de-thao-luan.php");
                        if ($_GET['cn'] == "phucdap")
                            include("giaodien/them-chu-de-thao-luan.php");

                        if ($_GET['cn'] == "dscv")
                            include("sinhvien/danh-sach-cong-viec.php");
                        
                        if ($_GET['cn'] == "phancongcv")
                            include("sinhvien/phan-cong-nhiem-vu.php");
                        if ($_GET['cn'] == "themcv")
                            include("sinhvien/them-cong-viec.php");
                        if ($_GET['cn'] == "capnhatcv")
                            include("sinhvien/cap-nhat-cong-viec.php");
                        
                        if ($_GET['cn'] == "dschitietphancong")
                            include("sinhvien/phan-cong-chi-tiet-cv.php");
                        if ($_GET['cn'] == "capnhatchitietphancong")
                            include("sinhvien/cap-nhat-cong-viec-sv.php");
                        if ($_GET['cn'] == "themcvphuthuoc")
                            include("sinhvien/them-cong-viec-phu-thuoc.php");
                        
                        if ($_GET['cn'] == "noptl")
                            include("sinhvien/nop-tai-lieu.php");

                        if ($_GET['cn'] == "xemdiem")
                            include("sinhvien/xem-diem.php");
                        
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
