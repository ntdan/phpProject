<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Cập nhật giảng viên</title>
        <!-- Bootstrap -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link type="text/css" rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="../bootstrap/css/signin.css">
        <script type="text/javascript" src="../scripts/ckeditor/ckeditor.js"></script>
        <script src="../bootstrap/js/bootstrap.js"></script>
    </head>

    <style type="text/css">
        td:first-child{
            text-align: right;
            color: darkblue;
        }
    </style>

    <?php
    if (isset($_POST['btnCapNhat'])) {


        include 'chucnang/thongtingiangvien.php';

        $macb = $_POST['txtMaCB'];
        $ten = $_POST['txtHoTen'];
        $gt = $_POST['rdGioiTinh'];
        $email = $_POST['txtEmail'];
        $sdt = $_POST['txtSDT'];
        $matkhau1 = $_POST['txtMatKhau1'];
        $matkhau2 = $_POST['txtMatKhau2'];
        //($macb,$ten,$gt,$email,$sdt,$hinh,$matkhau,$ngaytao,$khoa,$quantri
        gv_sua($macb, $ten, $gt, $email, $sdt, '', $matkhau1, 0, 1);

        echo "<script>window.location.href='?cn=quantri'</script>";
    }
    ?>

    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-4">  <!-- Upload hình đại diện -->                      
                    <div align="center">
                        <?php
                        echo "<img src='images/User-image.png'>";
                        ?>
                    </div><br>
                    <div align="center"><input type="file"  />Chọn hình</div>
                </div>
                <div class="col-md-8">
                    <h3 style="color: darkblue; font-weight: bold;">CẬP NHẬT GIẢNG VIÊN</h3>
                    <form action="" method="post" name="frm" class="form-horizontal">
                        <table class="table" cellpadding="0px" cellspacing="0px" align='center'>
                            <tr>
                                <td width="30%">Mã cán bộ:</td>
                                <td colspan="2">
                                    <input type="text" size="2" value="" name="txtMaCB" class="form-control"> 
                                </td>
                            </tr>
                            <tr>
                                <td>Họ và tên:</td>
                                <td colspan="2">
                                    <input type="text" size="2" value="" name="txtHoTen" class="form-control"> 
                                </td>
                            </tr>
                            <tr>
                                <td>Giới tính:</td>
                                <td colspan="2">
                                    Nam: <input type="radio" size="2" value="Nam" name="rdGioiTinh" checked="true"/> ;&nbsp;
                                    Nữ: <input type="radio" size="2" value="Nữ" name="rdGioiTinh"/> 
                                </td>
                            </tr>
                            <tr>
                                <td>Email:</td>
                                <td colspan="2">
                                    <input type="text" value="" name="txtEmail" class="form-control"> 
                                </td>
                            </tr>
                            <tr>
                                <td>Số điện thoại:</td>
                                <td colspan="2">
                                    <input type="text" value="" name="txtSDT" class="form-control"> 
                                </td>
                            </tr>
                            <tr></tr> 
                            <tr>
                                <td>Mật khẩu:</td>
                                <td colspan="2">
                                    <input type="text" value="" name="txtMatKhau1" class="form-control">
                                </td>
                            </tr>
                            <tr>
                                <td>Nhập lại mật khẩu:</td>
                                <td colspan="2">
                                    <input type="text" value="" name="txtMatKhau2" class="form-control">
                                </td>
                            </tr>
                            <tr>
                                <td width="20%"><label>Quản trị:</label></td>
                                <td><input type="checkbox" name=""></td>                              
                            </tr>
                            <tr>
                                <td><label>Mở tài khoản:</label></td>
                                <td><input type="checkbox" name=""></td>                             
                            </tr>
                            <tr>
                                <td></td>
                                <td colspan="2">
                                    <button  type="submit" name="btnCapNhat" class="btn btn-primary">
                                        <img src="images/save-as-icon.png"> Cập nhật
                                    </button>
                                    <a href="?" class="btn btn-primary">
                                        <img src="images/delete-icon.png"> Hủy bỏ
                                    </a>                                
                                </td>
                            </tr>
                        </table>
                    </form>
                </div>
            </div><!-- /row -->

        </div> <!-- /container -->

    </body>
</html>
