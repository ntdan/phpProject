
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Đăng nhập</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link type="text/css" rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
        <link type="text/css" rel="stylesheet" href="../public/css/login-bootstrap.css">
        <script src="../public/js/login-bootstrap.js"></script>
        <script src="../bootstrap/js/jquery-1.11.3.min.js"></script>
        <script src="../bootstrap/js/bootstrap.min.js"></script> 
</head>

<?php 
    include_once '../chucnang/dangnhap.php';
    session_start();
    $_SESSION['user'] = null;
 
    
    if(isset($_POST['btnDangNhap'])){
      // Xử lý để tránh MySQL injection
        $ten = strip_tags($_POST['txtTenDangNhap']);
        $ten = addslashes($_POST['txtTenDangNhap']);
        $matkhau = strip_tags($_POST['txtMatKhau']);
        $matkhau = addslashes($_POST['txtMatKhau']); 
        
        $dn_gv = gv_dangnhap($ten, $matkhau);    
        $dn_sv = sv_dangnhap($ten, $matkhau);
                
        if($dn_gv != ""){ 
            $_SESSION['user'] = $dn_gv;
            $gv = $dn_gv;
            $_SESSION['quyen'] = 'gv';
            if($gv['quantri'] == 1){
                $_SESSION['user'] = $dn_gv;
                $_SESSION['quyen'] = 'qt';
                echo "<script>window.location.href = '../quantri_home.php?cn=ttgv';</script>";
            }
            echo "<script>window.location.href = '../giangvien_home.php?cn=ttgv';</script>";
        }
        else if($dn_sv != ""){
            $_SESSION['user'] = $dn_sv;
            unset($_SESSION['quyen']);
            echo "<script>window.location.href = '../sinhvien_home.php?cn=ttsv';</script>";            
        }
        else        
            echo "<script>alert('Tài khoản và mật khẩu không đúng!');</script>";
            
    }
        
?>

<body>
	<!--
    you can substitue the span of reauth email for a input with the email and
    include the remember me checkbox
    -->        
        <div class="container">
            <div class="page-header">
                <h2 style="color: darkblue;">HỆ THỐNG QUẢN LÝ NHÓM LÀM NIÊN LUẬN</h2>
            </div> 
            <div class="card card-container"> 
                <img id="profile-img" class="profile-img-card" src="../images/User-image.png" />
<!--                <p id="profile-name" class="profile-name-card"></p>-->
                <form class="form-signin" action="" method="post">
                    <span id="reauth-email" class="reauth-email"></span>
                    <label for="inputUsername" >Tên đăng nhập:</label>
                    <input type="text" id="txtTenDangNhap" name="txtTenDangNhap" class="form-control" placeholder="Tài khoản đăng nhập" required autofocus>
                    <label for="inputPassword" >Mật khẩu:</label>
                    <input type="password" id="txtMatKhau" name="txtMatKhau" class="form-control" placeholder="Mật khẩu" required>
                    <div id="remember" class="checkbox">
                        <label>
                            <input type="checkbox" value="remember-me"> Nhớ mật khẩu
                        </label>
                    </div>
                    <button type="submit" name="btnDangNhap" class="btn btn-lg btn-primary btn-block btn-signin">Đăng nhập</button>
                </form><!-- /form -->
                <a href="#" class="forgot-password">
                    Quên mật khẩu?
                </a>
            </div><!-- /card-container -->
        </div><!-- /container -->   
</body>
</html>
