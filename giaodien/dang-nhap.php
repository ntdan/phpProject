
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
<body>
	<!--
    you can substitue the span of reauth email for a input with the email and
    include the remember me checkbox
    -->        
        <div class="container">
            <div class="page-header">
                <h2 style="color: aqua;">HỆ THỐNG QUẢN LÝ NHÓM LÀM NIÊN LUẬN</h2>
            </div> 
            <div class="card card-container">                
                <img id="profile-img" class="profile-img-card" src="../images/User-image.png" />
<!--                <p id="profile-name" class="profile-name-card"></p>-->
                <form class="form-signin">
                    <span id="reauth-email" class="reauth-email"></span>
                    <label for="inputUsername" >Tên đăng nhập:</label>
                    <input type="email" id="inputEmail" class="form-control" placeholder="Tài khoản đăng nhập" required autofocus>
                    <label for="inputPassword" >Mật khẩu:</label>
                    <input type="password" id="inputPassword" class="form-control" placeholder="Mật khẩu" required>
                    <div id="remember" class="checkbox">
                        <label>
                            <input type="checkbox" value="remember-me"> Nhớ mật khẩu
                        </label>
                    </div>
                    <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">Đăng nhập</button>
                </form><!-- /form -->
                <a href="#" class="forgot-password">
                    Quên mật khẩu?
                </a>
            </div><!-- /card-container -->
        </div><!-- /container -->   
</body>
</html>
