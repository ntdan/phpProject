<!--
To change this template, choose Tools | Templates
and open the template in the editor.

-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Đăng nhập</title>
        <!-- Bootstrap -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link type="text/css" rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="../bootstrap/css/signin.css">
        <script src="../bootstrap/js/bootstrap.js"></script>
    </head>
    <body>
        <div class="container">
 
            <form class="form-signin">
                <h2 class="form-signin-heading">Vui lòng đăng nhập:</h2>
                <label for="inputUsername" >Tên đăng nhập:</label>
                <input type="username" id="inputEmail" class="form-control" placeholder="Tên đăng nhập" required autofocus><br>
                <label for="inputPassword" >Mật khẩu</label>
                <input type="password" id="inputPassword" class="form-control" placeholder="Mật khẩu" required>
                <div class="checkbox">
                    <label>
                        <input type="checkbox" value="remember-me"> Nhớ tài khoản
                    </label>
                </div>
                <button class="btn btn-lg btn-primary btn-block" type="submit">Đăng nhập</button>
            </form>

        </div> <!-- /container -->
    </body>
</html>
