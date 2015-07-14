<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Đổi mật khẩu</title>
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
    include_once 'chucnang/thongtingiangvien.php';
    $macb = $_GET['id'];
    $gv = gv_xem($macb);
    if($gv == null){
        return;
    }
    if(isset($_POST['btnCapNhat'])){
        $macb = $_POST['txtMaCB'];
        $ten = $_POST['txtTen'];
        $email = $_POST['txtEmail'];
        $matkhauMoi = $_POST['txtMatKhauMoi1'];
        
        $filename = $gv['hinhdaidien'];
        $tachten = lay_ten($ten);
        
        global  $thumucHinhDaiDien;
            if(!file_exists($thumucHinhDaiDien))
                mkdir($thumucHinhDaiDien);
            
            if($_FILES['fHinh']['type'] == "image/jpg" || $_FILES['fHinh']['type'] == "image/jpeg" || $_FILES['fHinh']['type'] == "image/png")
            {
                if($_FILES['fHinh']['size'] <= 1024*1024){
                    $FileUpload = $_FILES['fHinh']['name'];
                    $pathinfo = pathinfo($FileUpload);
                    $extention = $pathinfo['extension'];
                    //Xử lý tên tập tin đổi thành mã số giảng viên 
                    //str_replace('tim tu', 'thay the bang', 'chuoi thay the')
                    $filename = $tachten . str_replace("/", "", str_replace(" ", "", $macb)) . "." . $extention ;
                   
                    //chép hình lên server
                    $copy = copy($_FILES['fHinh']['tmp_name'], $thumucHinhDaiDien.'/'. $filename);
                }
                else
                {
                    echo "<script>alert('Anh qua lon (nho hon 1 MB)');</script>";
                }                  
            }        
        
        gv_doimatkhau($macb, $filename, $matkhauMoi);

        //echo "<script>window.location.href='?cn=ttgv'</script>";
    }
?>  
    
    <body>
        <div class="container">
            <div class="row">
                <form action="" enctype="multipart/form-data" method="post" class="form-horizontal">
                    <div class="col-md-4">  <!-- Upload hình đại diện -->                      
                        <div align="center">
                            <br><br><br/>
                            <?php
                                if($gv['hinhdaidien'] != ""){
                                    echo "<img width='200px' src='hinhdaidien/".$gv['hinhdaidien']."'>";
                                }
                                else{
                                    echo "<img src='images/User-image.png'>";                                    
                                }
                            ?>
                        </div><br>
                        <div align="center">
                            <input type="file" name="fHinh" id="fHinh" /> 
                        </div>
                    </div>
                    <div class="col-md-8">
                        <h3 style="color: darkblue; font-weight: bold; margin-left: 50px;">ĐỔI MẬT KHẨU</h3>
                        <table class="table table-bordered" cellpadding="0px" cellspacing="0px" align="center" style="width:800px;" />
                            <tr>
                                <th width="20%">Mã cán bộ:</th>
                                <td width="50%">
                                    <input type="text" name="txtMaCB" value="<?php echo $gv['macb']; ?>" class="form-control" readonly="" /> 
                                </td>
                            </tr>
                            <tr>
                                <th>Họ và tên:</th>
                                <td>
                                    <input type="text" name="txtTen" value="<?php echo $gv['hoten']; ?>" class="form-control" readonly="" /> 
                                </td>
                            </tr>
                            <tr>
                                <th>Email:</th>
                                <td>
                                    <input type="text" name="txtEmail" value="<?php echo $gv['email']; ?>" class="form-control" readonly="" /> 
                                </td>
                            </tr>
                            <tr></tr>   
                            <tr>
                                <th>Mật khẩu hiện tại:</th>
                                <td>
                                    <input type=password name="txtMatKhauCu" value="" class="form-control" />
                                </td>
                            </tr>
                            <tr>
                                <th>Mật khẩu mới:</th>
                                <td>
                                    <input type="text" name="txtMatKhauMoi1" value="" class="form-control" />
                                </td>
                            </tr>
                            <tr>
                                <th>Nhập lại mật khẩu mới:</th>
                                <td>
                                    <input type="text" name="txtMatKhauMoi2" value="" class="form-control" />
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2" align="center">
                                    <button type="submit" name="btnCapNhat" class="btn btn-primary" style="width: 30%;">
                                        <img src="images/save-as-icon.png"> Cập nhật
                                    </button>
                                    <button type="button" name="" class="btn btn-primary" style="width: 30%;">
                                        <img src="images/delete-icon.png"> Hủy bỏ
                                    </button>                                
                                </td>
                            </tr>
                        </table>                   
                    </div> 
                </form>
            </div><!-- /row -->
            
        </div> <!-- /container -->
            
    </body>
</html>
