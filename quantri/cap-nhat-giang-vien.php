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
            color: black;
        }
    </style>

<?php
    include_once 'chucnang/thongtingiangvien.php';
    
    //Lấy thông tin từ csdl vào input
    //$maso = '2134';
    $maso = $_GET['id'];
    $gv = gv_xem($maso);
    if($gv == null){
        return;
    }
    if (isset($_POST['btnCapNhat'])) {
        include_once 'chucnang/thongtingiangvien.php';

        $macb = $_POST['txtMaCB'];
        $ten = $_POST['txtHoTen'];
        $gt = $_POST['rdGioiTinh'];
        $email = $_POST['txtEmail'];
        $sdt = $_POST['txtSDT'];
        $matkhau1 = $_POST['txtMatKhau1'];
        $matkhau2 = $_POST['txtMatKhau2'];
        //$key = $_POST['ckbKhoa'];
        //$quantri = $_POST['ckbQuanTri'];
        //($macb,$ten,$gt,$email,$sdt,$hinh,$matkhau,$ngaytao,$khoa,$quantri
        gv_sua($macb, $ten, $gt, $email, $sdt, '', $matkhau1, 0, 1);
        
        echo "<script>window.location.href='?cn=qtgv'</script>";
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
                                    <input type="text" name="txtMaCB" size="2" value="<?php echo $gv['macb'];?>" class="form-control" readonly="true"/> 
                                </td>
                            </tr>
                            <tr>
                                <td>Họ và tên:</td>
                                <td colspan="2">
                                    <input type="text" name="txtHoTen" size="2" value="<?php echo $gv['hoten'];?>" class="form-control"/> 
                                </td>
                            </tr>
                            <tr>
                                <td>Giới tính:</td>
                                <td colspan="2">
                                    <?php
                                        $gtNam = strcasecmp($gv['gioitinh'], 'Nam');
                                        $gtNu = strcasecmp($gv['gioitinh'], 'Nữ');
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
                                <td>Email:</td>
                                <td colspan="2">
                                    <input type="text" name="txtEmail" value="<?php echo $gv['email'];?>" class="form-control"/> 
                                </td>
                            </tr>
                            <tr>
                                <td>Số điện thoại:</td>
                                <td colspan="2">
                                    <input type="text" name="txtSDT" value="<?php echo $gv['sdt'];?>" class="form-control"/> 
                                </td>
                            </tr>
                            <tr></tr> 
                            <tr>
                                <td>Mật khẩu:</td>
                                <td colspan="2">
                                    <input type="password" name="txtMatKhau1" value="<?php echo $gv['matkhau'];?>" class="form-control"/>
                                </td>
                            </tr>
                            <tr>
                                <td>Nhập lại mật khẩu:</td>
                                <td colspan="2">
                                    <input type="text" name="txtMatKhau2" value="" class="form-control"/>
                                </td>
                            </tr>
                            <tr>
                                <td width="20%"><label>Quản trị:</label></td>
                                <td>
                                    <?php
                                        if($gv['quantri'] == 1){
                                            echo "<input type='checkbox' name='ckbQuanTri' id='ckbQuanTri' value='1' checked='true'/>";
                                        }
                                        elseif ($gv['quantri'] == 0) {
                                            echo "<input type='checkbox' name='ckbQuanTri' id='ckbQuanTri' value='0'/>";
                                        }
                                    ?>
                                </td>                              
                            </tr>
                            <tr>
                                <td><label>Mở tài khoản:</label></td>
                                <td>
                                    <?php
                                        if($gv['khoa'] == 0){
                                            echo "<input type='checkbox' name='ckbKhoa' value='0' checked='true'/>";
                                        }
                                        elseif ($gv['khoa'] == 1) {
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
