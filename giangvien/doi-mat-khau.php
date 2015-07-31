<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
        <script type="text/javascript">
            function ktMatKhau()
            {
//                var mk = document.getElementById("hidMatKhauCu");
//                if(document.getElementById("txtMatKhauCu").value !== mk){
//                    alert("Nhập sai mật khẩu!");
//                    return false;
//                }                
                if (document.getElementById("txtMatKhauMoi1").value !== document.getElementById("txtMatKhauMoi2").value)
                {
                    alert("Mật khẩu chưa giống nhau!");
                    return false;
                } else
                {
                    return true;
                }
            }     
            
        </script>
   
    <style type="text/css">
        th{
            text-align: right;
            color: darkblue;
            font-weight: bold;
        }
    </style>

    <?php
        include_once 'chucnang/gv_thongtin.php';
        $macb = '2134';
        //$macb = $_GET['id'];
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

            echo "<script>window.location.href='?cn=ttgv'</script>";
        }
    ?>  
    
<div class="container">
    <div class="row">
        <form action="" enctype="multipart/form-data" method="post" name="frmDoiMatKhau" class="form-horizontal">
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
                <table class="table table-bordered" cellpadding="0px" cellspacing="0px" align="center" style="width:800px;">
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
                            <input type=password id="txtMatKhauCu" name="txtMatKhauCu" value="" class="form-control" required/>
                            <input type="hidden" id="hidMatKhauCu" name="hidMatKhauCu" value="<?php echo $gv['matkhau']; ?>"/>
                        </td>
                    </tr>
                    <tr>
                        <th>Mật khẩu mới:</th>
                        <td>
                            <input type="text" id="txtMatKhauMoi1" name="txtMatKhauMoi1" value="" class="form-control" required/>                                    
                        </td>
                    </tr>
                    <tr>
                        <th>Nhập lại mật khẩu mới:</th>
                        <td>
                            <input type="text" id="txtMatKhauMoi2" name="txtMatKhauMoi2" value="" class="form-control" required/>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" align="center">
                            <button onclick="return ktMatKhau();" type="submit" name="btnCapNhat" class="btn btn-primary" style="width: 20%;">
                                <img src="images/save-as-icon.png"> Cập nhật
                            </button>&nbsp;&nbsp;
                            <a href="?cn=ttgv" class="btn btn-warning" style="width:20%;">
                                <img src="images/delete-icon.png"> Hủy bỏ
                            </a>                              
                        </td>
                    </tr>
                </table>                   
            </div> 
        </form>
    </div><!-- /row -->

</div> <!-- /container -->

