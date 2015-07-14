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
        
        
        <script type="text/javascript">
            $( function(){
                $("#txtNgaySinh").datepicker();
            });
            function ktMatKhau(){
                if(document.getElementById("txtMatKhauMoi1") !== document.getElementById("txtMatKhauMoi2"))
                {
                    alert("Mật khẩu không giống nhau!");
                    return false;
                }
                else return true;
            }
        </script>
        
    </head>

    <style type="text/css">
        td:first-child{
            text-align: right;
            color: darkblue;
        }
    </style>

<?php
    include_once 'chucnang/sv_thongtin.php';
    
    $masv = $_GET['id'];
    
    if (isset($_POST['btnCapNhat'])) {
        include_once 'chucnang/sv_thongtin.php';

        $masv = $_POST['txtMaSV'];
        $ten = $_POST['txtHoTen'];
        $ns = $_POST['txtNgaySinh'];
        $gt = $_POST['rdGioiTinh'];
        $email = $_POST['txtEmail'];
        $khoahoc = $_POST['txtKhoaHoc'];
        $sdt = $_POST['txtSDT'];
        $matkhau1 = $_POST['txtMatKhauMoi1'];
        $matkhau2 = $_POST['txtMatKhauMoi2'];
        $lock = isset($_POST['ckbKhoa']) ? 1:0  ;
        //($mssv,$ten,$gt,$ngaysinh,$khoahoc,$email,$sdt,$hinh,$congnghe,$laptrinh,$kinhnghiem,$matkhau)
        sv_sua($masv, $ten, $gt, $ns, $khoahoc, $email, $sdt, '', '', '', '', $matkhau1, 0);

        echo "<script>window.location.href='?cn=qtsv'</script>";
    }    
    $sv = sv_xem($masv);
    if($sv == null){
        return;
    }
?>

    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-4">  <!-- Upload file danh sách sv  -->                      
                    <h3 style="color: darkblue; font-weight: bold;">CẬP NHẬT DANH SÁCH</h3><br>                    
                    <div align="center"><input type="file"  />Chọn hình</div><br>
                    <div align="center">
                        <button  type="submit" name="" class="btn btn-info">
                            <img src="images/excel-icon.png"> Cập nhật
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
                                <td>Ngày sinh:</td>
                                <td colspan="2">
                                    <input type="text" id="txtNgaySinh" name="txtNgaySinh" value="<?php echo $sv['ngaysinh']; ?>" class="form-control"> 
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
                                            echo "Nữ: <input type='radio' name='rdGioiTinh' id='rdGioiTinh' value='Nữ'/> &nbsp&nbsp";
                                        }
                                        elseif ($gtNam != 0 && $gtNu == 0) {
                                            echo "Nam: <input type='radio' name='rdGioiTinh' id='rdGioiTinh' value='Nam'/> &nbsp&nbsp";
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
                                <td>Mật khẩu hiện tại:</td>
                                <td colspan="2">
                                    <input type="text" id="txtMatKhauCu" name="txtMatKhauCu" value="" class="form-control">
                                </td>
                            </tr>
                            <tr>
                                <td>Mật khẩu mới:</td>
                                <td colspan="2">
                                    <input type="text" id="txtMatKhauMoi1" name="txtMatKhauMoi1" value="" class="form-control">
                                </td>
                            </tr>
                            <tr>
                                <td>Nhập lại mật khẩu mới:</td>
                                <td colspan="2">
                                    <input type="text" id="txtMatKhauMoi2" name="txtMatKhauMoi2" value="" class="form-control">
                                </td>
                            </tr>
                            <tr>
                                <td><label>Mở tài khoản:</label></td>
                                <td>
                                    <?php
                                        if($sv['khoa'] == 0){
                                            echo "<input type='checkbox' name='ckbKhoa' value='0' />";
                                        }
                                        elseif ($sv['khoa'] == 1) {
                                            echo "<input type='checkbox' name='ckbKhoa' value='1' checked='true'/>";
                                        }
                                    ?> 
                                </td>                             
                            </tr>
                            <tr>
                                <td></td>
                                <td colspan="2">
                                    <button onclick="return ktMatKhau();" type="submit" name="btnCapNhat" class="btn btn-primary" style="width:30%;">
                                        <img src="images/save-as-icon.png"> Cập nhật
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
