<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Đổi mật khẩu sinh viên</title>
        <!-- Bootstrap -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link type="text/css" rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="../bootstrap/css/signin.css">
        <script type="text/javascript" src="../scripts/ckeditor/ckeditor.js"></script>
        <script src="../bootstrap/js/bootstrap.js"></script>
    </head>
    
    <style type="text/css">
        th{
            text-align: right;
            color: darkblue;
            font-weight: bold;
        }
    </style>

<?php
    include_once 'chucnang/thongtinsinhvien.php';
    //$masv = '1111317';
    $masv = $_GET['id'];
    $sv = sv_xem($masv);
    if($sv == null){
        return;
    }
    if(isset($_POST['btnCapNhat'])){
        $masv = $_POST['txtMaSV'];
        $ten = $_POST['txtTen'];
        $email = $_POST['txtEmail'];
        $matkhauMoi = $_POST['txtMatKhauMoi'];
        
        sv_doimatkhau($masv, '', $matkhauMoi);

        //echo "<script>window.location.href='?cn=ttsv'</script>";
    }
?>  
    
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-4">  <!-- Upload hình đại diện -->                      
                    <div align="center">
                        <br><br><br/>
                        <?php
                            echo "<img src='images/User-image.png'>";
                        ?>
                    </div><br>
                    <div align="center"><input type="file"  />Chọn hình</div>
                </div>
                <div class="col-md-8">
                    <h3 style="color: darkblue; font-weight: bold; margin-left: 50px;">ĐỔI MẬT KHẨU</h3>
                    <form action="" method="post" class="form-horizontal">
                    <table class="table table-bordered" cellpadding="0px" cellspacing="0px" align="center" style="width:800px;" />
                        <tr>
                            <th width="20%">MSSV:</th>
                            <td width="50%">
                                <input type="text" name="txtMaSV" value="<?php echo $sv['mssv']; ?>" class="form-control" readonly="" /> 
                            </td>
                        </tr>
                        <tr>
                            <th>Họ và tên:</th>
                            <td>
                                <input type="text" name="txtTen" value="<?php echo $sv['hoten']; ?>" class="form-control" readonly="" /> 
                            </td>
                        </tr>
                        <tr>
                            <th>Email:</th>
                            <td>
                                <input type="text" name="txtEmail" value="<?php echo $sv['email']; ?>" class="form-control" readonly="" /> 
                            </td>
                        </tr>
                        <tr></tr>   
                        <tr>
                            <th>Mật khẩu hiện tại:</th>
                            <td>
                                <input type="password" name="txtMatKhau1" value="<?php echo $sv['matkhau']; ?>" class="form-control" />
                            </td>
                        </tr>
                        <tr>
                            <th>Mật khẩu mới:</th>
                            <td>
                                <input type="text" name="txtMatKhauMoi" value="" class="form-control" />
                            </td>
                        </tr>
                        <tr>
                            <th>Nhập lại mật khẩu mới:</th>
                            <td>
                                <input type="text" name="txtMatKhau2" value="" class="form-control" />
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2" align="center">
                                <button type="submit" name="btnCapNhat" class="btn btn-primary" style="width: 30%;">
                                    <img src="images/save-as-icon.png"> Cập Nhật
                                </button>
                                <button type="button" name="" class="btn btn-primary" style="width: 30%;">
                                    <img src="images/delete-icon.png"> Hủy bỏ
                                </button>                                
                            </td>
                        </tr>
                    </table>
                    </form>
                </div>
            </div><!-- /row -->
            
        </div> <!-- /container -->
            
    </body>
</html>
