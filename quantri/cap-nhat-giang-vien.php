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
        <link rel="stylesheet" href="../scripts/jquery-ui-1.11.4/style.css">
        <link rel="stylesheet" href="../scripts/jquery-ui-1.11.4/jquery-ui.min.css">
        <script src="../jquery-ui-1.11.4/jquery-ui.min.js"></script>
        <script src="../bootstrap/js/jquery-1.11.3.min.js"></script>
        <script type="text/javascript" src="../scripts/ckeditor/ckeditor.js"></script>
        <script src="../bootstrap/js/bootstrap.min.js"></script>
        
        <script>
            $(function() {
              $( "#txtNgaySinh" ).datepicker();
            });
        </script>

        <script type="text/javascript">
            function kiemtra()
            {
                if (document.getElementById("txtMatKhauMoi1").value !==
                        document.getElementById("txtMatKhauMoi2").value)
                {
                    alert("Mat khau khong giong nhau");
                    return false;
                } else
                {
                    return true;
                }
            }
            
            
        </script>

    </head>

    <style type="text/css">
        td:first-child{
            text-align: right;
            color: black;
        }
    </style>

    <?php
    include_once 'chucnang/gv_thongtin.php';

    //Lấy thông tin từ csdl vào input
    //$maso = '2134';
    $maso = $_GET['id'];
    
    if (isset($_POST['btnCapNhat'])) {
        include_once 'chucnang/gv_thongtin.php';

        $macb = $_POST['txtMaCB'];
        $ten = $_POST['txtHoTen'];
        $gt = $_POST['rdGioiTinh'];
        $ns = $_POST['txtNgaySinh'];
        $email = $_POST['txtEmail'];
        $sdt = $_POST['txtSDT'];
        $matkhau1 = $_POST['txtMatKhauMoi1'];
        $matkhau2 = $_POST['txtMatKhauMoi2'];
        $lock = isset($_POST['ckbKhoa']) ? 1 : 0;
        $quantri = isset($_POST['ckbQuanTri']) ? 1 : 0;
        //($macb,$ten,$gt,$email,$sdt,$hinh,$matkhau,$ngaytao,$khoa,$quantri
        gv_sua($macb, $ten, $gt, $ns,$email, $sdt, '', $matkhau1, $lock, $quantri);

        echo "<script>window.location.href='?cn=qtgv'</script>";
    }
    $gv = gv_xem($maso);
    if ($gv == null) {
        return;
    }
    ?>

    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-4">  <!-- Upload file danh sách gv  -->                      
                    <h3 style="color: darkblue; font-weight: bold;">CẬP NHẬT DANH SÁCH</h3><br>                    
                    <div align="center"><input type="file"  />Chọn hình</div><br>
                    <div align="center">
                        <button  type="submit" name="" class="btn btn-info">
                            <img src="images/excel-icon.png"> Cập nhật
                        </button>
                    </div>
                </div>
                <div class="col-md-8">
                    <h3 style="color: darkblue; font-weight: bold;">CẬP NHẬT GIẢNG VIÊN</h3>
                    <form action="" method="post" name="frm" class="form-horizontal">
                        <table class="table" cellpadding="0px" cellspacing="0px" align='center'>
                            <tr>
                                <td width="30%">Mã cán bộ:</td>
                                <td>
                                    <input type="text" name="txtMaCB" size="2" value="<?php echo $gv['macb']; ?>" class="form-control" readonly="true"/> 
                                </td>
                            </tr>
                            <tr>
                                <td>Họ và tên:</td>
                                <td>
                                    <input type="text" name="txtHoTen" size="2" value="<?php echo $gv['hoten']; ?>" class="form-control"/> 
                                </td>
                            </tr>
                            <tr>
                                <td>Giới tính:</td>
                                <td>
                                    <?php
                                    $gtNam = strcasecmp($gv['gioitinh'], 'Nam');
                                    $gtNu = strcasecmp($gv['gioitinh'], 'Nữ');
                                    if ($gtNam == 0 && $gtNu != 0) {
                                        echo "Nam: <input type='radio' name='rdGioiTinh' id='rdGioiTinh' value='Nam' checked='true'/> &nbsp&nbsp";
                                        echo "Nữ: <input type='radio' name='rdGioiTinh' id='rdGioiTinh' value='Nữ'/> &nbsp&nbsp";
                                    } elseif ($gtNam != 0 && $gtNu == 0) {
                                        echo "Nam: <input type='radio' name='rdGioiTinh' id='rdGioiTinh' value='Nam'/> &nbsp&nbsp";
                                        echo "Nữ: <input type='radio' name='rdGioiTinh' id='rdGioiTinh' value='Nữ' checked='true'/>";
                                    }
                                    ?>                                    
                                </td>
                            </tr>
                            <tr>
                                <td>Ngày sinh:</td>
                                <td colspan="2">
                                    <input type="text" id="txtNgaySinh" name="txtNgaySinh" value="<?php echo $gv['ngaysinh']; ?>" class="form-control" /> 
                                </td>
                            </tr>
                            <tr>
                                <td>Email:</td>
                                <td>
                                    <input type="text" name="txtEmail" value="<?php echo $gv['email']; ?>" class="form-control"/> 
                                </td>
                            </tr>
                            <tr>
                                <td>Số điện thoại:</td>
                                <td colspan="2">
                                    <input type="text" name="txtSDT" value="<?php echo $gv['sdt']; ?>" class="form-control"/> 
                                </td>
                            </tr>
                            <tr>
                                <td>Hướng dẫn nhóm:</td>
                                <td><input type="text" name=" " value="" class="form-control"/></td>
                            </tr> 
                            <tr>
                                <td>Mật khẩu hiện tại:</td>
                                <td>
                                    <input type="password" id="txtMatKhauCu" name="txtMatKhauCu" value="" class="form-control"/>
                                </td>
                            </tr>
                            <tr>
                                <td>Mật khẩu mới:</td>
                                <td>
                                    <input type="password" id="txtMatKhauMoi1" name="txtMatKhauMoi1" value="" class="form-control"/>
                                </td>
                            </tr>
                            <tr>
                                <td>Nhập lại mật khẩu mới:</td>
                                <td>
                                    <input type="text" id="txtMatKhauMoi2" name="txtMatKhauMoi2" value="" class="form-control"/>
                                </td>
                            </tr>
                            <tr>
                                <td width="20%"><label>Quản trị:</label></td>
                                <td>
                                    <?php
                                    if ($gv['quantri'] == 1) {
                                        echo "<input type='checkbox' name='ckbQuanTri' id='ckbQuanTri' value='1' checked='true'/>";
                                    } elseif ($gv['quantri'] == 0) {
                                        echo "<input type='checkbox' name='ckbQuanTri' id='ckbQuanTri' value='0' />";
                                    }
                                    ?>
                                </td>                              
                            </tr>
                            <tr>
                                <td><label>Mở tài khoản:</label></td>
                                <td>
                                    <?php
                                    if ($gv['khoa'] == 0) {
                                        echo "<input type='checkbox' name='ckbKhoa' value='0' />";
                                    } elseif ($gv['khoa'] == 1) {
                                        echo "<input type='checkbox' name='ckbKhoa' value='1' checked='true'/>";
                                    }
                                    ?>
                                </td>                             
                            </tr>
                            <tr>
                                <td></td>
                                <td colspan="2">
                                    <button onclick = "return kiemtra();"  type="submit" name="btnCapNhat" class="btn btn-primary" style="width:20%;">
                                        <img src="images/save-as-icon.png"> Cập nhật
                                    </button>&nbsp;&nbsp;
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
