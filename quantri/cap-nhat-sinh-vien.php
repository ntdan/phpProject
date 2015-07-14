<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Cập nhật sinh viên</title>
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
    include_once 'chucnang/thongtinsinhvien.php';
    $masv = $_GET['id'];
    $sv = sv_xem($masv);
    if($sv == null){
        return;
    }
    if (isset($_POST['btnCapNhat'])) {
        include_once 'chucnang/thongtinsinhvien.php';

        $masv = $_POST['txtMaSV'];
        $ten = $_POST['txtHoTen'];
        $ns = $_POST['txtNamSinh'];
        $gt = $_POST['rdGioiTinh'];
        $email = $_POST['txtEmail'];
        $khoahoc = $_POST['txtKhoaHoc'];
        $sdt = $_POST['txtSDT'];
        $matkhau1 = $_POST['txtMatKhau1'];
        $matkhau2 = $_POST['txtMatKhau2'];
        //$key = $_POST['ckbKhoa'];
        //($mssv,$ten,$gt,$ngaysinh,$khoahoc,$email,$sdt,$hinh,$congnghe,$laptrinh,$kinhnghiem,$matkhau)
        sv_sua($masv, $ten, $gt, $ns, $khoahoc, $email, $sdt, '', '', '', '', $matkhau1, 0);

        //echo "<script>window.location.href='?cn=qtsv'</script>";
    }
?>

    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-4">  <!-- Upload hình đại diện -->                      
                    <h3 style="color: darkblue; font-weight: bold;">CẬP NHẬT DANH SÁCH</h3><br>                    
                    <div align="center"><input type="file"  />Chọn hình</div><br>
                    <div align="center">
                        <button  type="submit" name="" class="btn btn-info">
                            <img src="images/excel-icon.png"> Cập nhật danh sách
                        </button>
                    </div>
                </div>
                <div class="col-md-8">
                    <h3 style="color: darkblue; font-weight: bold;">CẬP NHẬT SINH VIÊN</h3>
                    <form action="" method="post" name="frm" class="form-horizontal">
                        <table class="table" cellpadding="0px" cellspacing="0px" align='center'>
                            <tr>
                                <td width="30%">Mã số sinh viên:</td>
                                <td colspan="2">
                                    <input type="text" name="txtMaSV" value="<?php echo $sv['mssv']; ?>" class="form-control" readonly="true"> 
                                </td>
                            </tr>
                            <tr>
                                <td>Họ và tên:</td>
                                <td colspan="2">
                                    <input type="text" name="txtHoTen" value="<?php echo $sv['hoten']; ?>" class="form-control"> 
                                </td>
                            </tr>
                            <tr>
                                <td>Năm sinh:</td>
                                <td colspan="2">
                                    <input type="text" name="txtNamSinh" value="<?php echo $sv['ngaysinh']; ?>" class="form-control"> 
                                </td>
                            </tr>
                            <tr>
                                <td>Giới tính:</td>
                                <td colspan="2">
                                     <?php
                                        $gtNam = strcasecmp($sv['gioitinh'], 'Nam');
                                        $gtNu = strcasecmp($sv['gioitinh'], 'Nữ');
                                        if($gtNam == 0 && $gtNu != 0){
                                            echo "Nam: <input type='radio' name='rdGioiTinh' id='rdGioiTinh' value='Nam' checked='true'/> &nbsp&nbsp";
                                            echo "Nữ: <input type='radio' name='rdGioiTinh' id='rdGioiTinh' value=''/> &nbsp&nbsp";
                                        }
                                        elseif ($gtNam != 0 && $gtNu == 0) {
                                            echo "Nam: <input type='radio' name='rdGioiTinh' id='rdGioiTinh' value=''/> &nbsp&nbsp";
                                            echo "Nữ: <input type='radio' name='rdGioiTinh' id='rdGioiTinh' value='Nữ' checked='true'/>";
                                        }
                                    ?>    
                                </td>
                            </tr>
                            <tr>
                                <td>Khóa học:</td>
                                <td colspan="2">
                                    <input type="text" name="txtKhoaHoc" value="<?php echo $sv['khoahoc']; ?>" class="form-control"> 
                                </td>
                            </tr>
                            <tr>
                                <td>Email:</td>
                                <td colspan="2">
                                    <input type="text" name="txtEmail" value="<?php echo $sv['email']; ?>" class="form-control"> 
                                </td>
                            </tr>
                            <tr>
                                <td>Số điện thoại:</td>
                                <td colspan="2">
                                    <input type="text" name="txtSDT" value="<?php echo $sv['sdt']; ?>" class="form-control"> 
                                </td>
                            </tr>
                            <tr></tr> 
                            <tr>
                                <td>Mật khẩu:</td>
                                <td colspan="2">
                                    <input type="text" name="txtMatKhau1" value="<?php echo $sv['matkhau']; ?>" class="form-control">
                                </td>
                            </tr>
                            <tr>
                                <td>Nhập lại mật khẩu:</td>
                                <td colspan="2">
                                    <input type="text" name="txtMatKhau2" value="" class="form-control">
                                </td>
                            </tr>
                            <tr>
                                <td><label>Mở tài khoản:</label></td>
                                <td>
                                    <?php
                                        if($sv['khoa'] == 0){
                                            echo "<input type='checkbox' name='ckbKhoa' value='0' checked='true'/>";
                                        }
                                        elseif ($sv['khoa'] == 1) {
                                            echo "<input type='checkbox' name='ckbKhoa' value='1'/>";
                                        }
                                    ?> 
                                </td>                             
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
