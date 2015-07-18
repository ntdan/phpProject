<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Thêm sinh viên</title>
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
        
        
        include_once 'chucnang/sv_thongtin.php';

        $mssv = $_POST['txtMaSV'];
        $ten = $_POST['txtHoTen'];
        $gt = $_POST['rdGioiTinh'];
        $ns = $_POST['txtNamSinh'];
        $email = $_POST['txtEmail'];
        $khoahoc = $_POST['txtKhoaHoc'];
        $matkhau1 = $_POST['txtMatKhau1'];
        $matkhau2 = $_POST['txtMatKhau2'];
        //($mssv, $ten, $gt, $ngaysinh, $khoahoc, $email, $sdt, $hinh, $congnghe, $laptrinh, $kinhnghiem, $matkhau, $khoa)
        sv_them($mssv, $ten, $gt, $ns, $khoahoc, $email, 'NULL', '', '', '', '', $matkhau1,0);

        echo "<script>window.location.href='?cn=qtsv'</script>";
    }

?>

    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-4">  <!-- Upload hình đại diện --> 
                    <h3 style="color: darkblue; font-weight: bold;">THÊM DANH SÁCH SINH VIÊN</h3><br>
                    <form enctype="multipart/form-data" action="" method="post">
                        <input type="hidden" name="MAX_FILE_SIZE" value="2000000"/>
                        <div align="center"><input type="file" name="fDanhSach" id="fDanhSach" /></div><br>
                        <div align="center">
                            <button  type="submit" class="btn btn-info">
                                <img src="images/excel-icon.png"> Thêm
                            </button>
                        </div>
                    </form>                                    
                </div>
                <div class="col-md-8">
                    <h3 style="color: darkblue; font-weight: bold;">THÊM SINH VIÊN</h3>
                    <form action="" method="post" name="frm" class="form-horizontal">
                        <table class="table" cellpadding="0px" cellspacing="0px" align='center'>
                            <tr>
                                <td>Mã số sinh viên:</td>
                                <td>
                                    <input type="text" size="2" value="" name="txtMaSV" class="form-control"> 
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
                                <td>Năm sinh:</td>
                                <td>
                                    <input type="text" size="2" value="" name="txtNamSinh" class="form-control"> 
                                </td>
                            </tr>
                            <tr>
                                <td>Email:</td>
                                <td>
                                    <input type="text" value="" name="txtEmail" class="form-control"> 
                                </td>
                            </tr>
                            <tr>
                                <td>Khóa:</td>
                                <td>
                                    <input type="text" value="" name="txtKhoaHoc" class="form-control"> 
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
                                    <button  type="submit" name="btnThem" class="btn btn-primary" style="width:30%;">
                                        <img src="images/save-as-icon.png"> Thêm
                                    </button>&nbsp;&nbsp;
                                    <a href="?" class="btn btn-warning" style="width:30%;">
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
