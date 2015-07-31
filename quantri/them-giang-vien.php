<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Thêm giảng viên</title>
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
    if (isset($_POST['btnThem'])) {
        
        
        include_once 'chucnang/gv_thongtin.php';

        $macb = $_POST['txtMaCB'];
        $ten = $_POST['txtHoTen'];
        $gt = $_POST['rdGioiTinh'];
        $ns = $_POST['txtNgaySinh'];
        $email = $_POST['txtEmail'];
        $sdt = $_POST['txtSDT'];
        $matkhau1 = $_POST['txtMatKhau1'];
        $matkhau2 = $_POST['txtMatKhau2'];
        //($macb,$ten,$gt,$ngaysinh,$email,$sdt,$hinh,$matkhau,$khoa,$quantri)
        gv_them($macb, $ten, $gt, $ns, $email, $sdt, '', $matkhau1, 0, 1);

        echo "<script>window.location.href='?cn=qtgv'</script>";
    }
?>

    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-4">  <!-- Upload file danh sách gv  -->                      
                    <h3 style="color: darkblue; font-weight: bold;">THÊM DANH SÁCH</h3><br>                    
                    <div align="center"><input type="file"  />Chọn hình</div><br>
                    <div align="center">
                        <button  type="submit" name="" class="btn btn-info">
                            <img src="images/excel-icon.png"> Thêm
                        </button>
                    </div>
                </div>
                <div class="col-md-8">
                    <h3 style="color: darkblue; font-weight: bold;">THÊM NGƯỜI DÙNG</h3>
                    <form action="" method="post" name="frm" class="form-horizontal">
                        <table class="table" cellpadding="0px" cellspacing="0px" align='center'>
                            <tr>
                                <td>Mã cán bộ:</td>
                                <td>
                                    <input type="text" size="2" value="" name="txtMaCB" class="form-control"> 
                                </td>
                            </tr>
                            <tr>
                                <td>Họ và tên:</td>
                                <td>
                                    <input type="text" size="2" value="" name="txtHoTen" class="form-control"> 
                                </td>
                            </tr>
                            <tr>
                                <td>Giới tính:</td>
                                <td>
                                    Nam: <input type="radio" size="2" value="Nam" name="rdGioiTinh" checked="true"/> ;&nbsp;
                                    Nữ: <input type="radio" size="2" value="Nữ" name="rdGioiTinh"/> 
                                </td>
                            </tr>
                            <tr>
                                <td>Ngày sinh:</td>
                                <td>
                                    <input type="text" size="2" value="" id="txtNgaySinh" name="txtNgaySinh" class="form-control"> 
                                </td>
                            </tr>
                            <tr>
                                <td>Email:</td>
                                <td>
                                    <input type="text" value="" name="txtEmail" class="form-control"> 
                                </td>
                            </tr>
                            <tr>
                                <td>Số điện thoại:</td>
                                <td>
                                    <input type="text" value="" name="txtSDT" class="form-control"> 
                                </td>
                            </tr>
                            <tr></tr> 
                            <tr>
                                <td>Mật khẩu:</td>
                                <td>
                                    <input type="text" value="" name="txtMatKhau1" class="form-control">
                                </td>
                            </tr>
                            <tr>
                                <td>Nhập lại mật khẩu:</td>
                                <td>
                                    <input type="text" value="" name="txtMatKhau2" class="form-control">
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>
                                    <button  type="submit" name="btnThem" class="btn btn-primary" style="width:20%;">
                                        <img src="images/save-as-icon.png"> Thêm
                                    </button> &nbsp;&nbsp;
                                    <a href="?" class="btn btn-warning" style="width:20%;">
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
