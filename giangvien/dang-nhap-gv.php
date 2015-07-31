
<!DOCTYPE html>
    <?php 
        include_once '../chucnang/dangnhap.php';

        if(isset($_POST['btnDangNhap'])){
            $tendn = $_POST['txtTenDangNhap'];
            $matkhau = $_POST['txtMatKhau']; 

            $dn_gv = gv_dangnhap($tendn, $matkhau);   

            if($dn_gv == ""){
                echo "<script>alert('Tài khoản và mật khẩu không đúng!');</script>";
            }
            else        
                echo "<script>window.location.href = '../giangvien_home.php?cn=ttgv';</script>";

        }

    ?>

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

