<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Quản trị</title>
        <!-- Bootstrap -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link type="text/css" rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
        <link type="text/css" rel="stylesheet" href="bootstrap/css/signin.css">
        <link type="text/css" rel="stylesheet" href="scripts/jquery-ui-1.11.4/jquery-ui.min.css">
        <link type="text/css" rel="stylesheet" href="scripts/jquery-ui-1.11.4/style.css">
        <script type="text/javascript" src="scripts/jquery-ui-1.11.4/jquery-ui.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/jquery-1.11.3.min.js "></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="scripts/ckeditor/ckeditor.js"></script>
    </head>
    <body>
        <div class="container body-content">
            <div class="page-header">
                <h2 style="color: darkblue;">HỆ THỐNG QUẢN TRỊ WEBSITE</h2>               
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
                                    Thông tin giảng viên
                                    <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="?cn=ttgv">Thông tin cá nhân</a></li>
                                    <li class="divider"></li>
                                    <li><a href="?cn=dmk">Đổi mật khẩu</a></li>
                                </ul>
                            </li>  
                            <li class="dropdown">
                                <a href="?cn=ttgv" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    Quản trị
                                    <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="?cn=qtgv">Giảng viên</a></li>
                                    <li class="divider"></li>
                                    <li><a href="?cn=qtsv">Sinh viên</a></li>
                                </ul>
                            </li> 
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

                        if ($_GET['cn'] == "qtgv")
                            include("quantri/quan-tri-giang-vien.php");
                        if ($_GET['cn'] == "themgiangvien")
                            include("quantri/them-giang-vien.php");
                        if ($_GET['cn'] == "capnhatgiangvien")
                            include("quantri/cap-nhat-giang-vien.php");
                        
                        if ($_GET['cn'] == "qtsv")
                            include("quantri/quan-tri-sinh-vien.php");
                        if ($_GET['cn'] == "themsinhvien")
                            include("quantri/them-sinh-vien.php");
                        if ($_GET['cn'] == "capnhatsinhvien")
                            include("quantri/cap-nhat-sinh-vien.php");
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
