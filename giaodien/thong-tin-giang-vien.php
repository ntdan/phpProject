
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Thông tin giảng viên</title>
         <!-- Bootstrap -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link type="text/css" rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="../bootstrap/css/signin.css">
        <script src="../bootstrap/js/bootstrap.js"></script>
    </head>
    
<?php
    
    include 'chucnang/thongtingiangvien.php';

    $maso = '2134';
    $gv = gv_xem($maso);

    if($gv == null){
        return;
    }
    
?>
    
    <style type="text/css">
        th{
            text-align: center;
            color: darkblue;
            background-color: #dff0d8;
        }
        td:first-child{
            color: darkblue;
        }
    </style>
    
    <body>
        <div class="container">
            
            <div class="row">
                <div class="col-md-12">
                    <h3 style="color: darkblue; font-weight: bold;" align="center">THÔNG TIN GIẢNG VIÊN</h3><br>
                </div>               
                <div class="row">
                        <div class="col-md-9 col-md-push-3">
                            <table class="table table-bordered" border="0" width="800px" cellpadding="25px" cellspacing="0px" align='center'>
                                <tr><th colspan="2" style="text-align: center">Thông tin giảng viên</th></tr>
                                <tr>
                                    <td width="30%"><label>Mã số cán bộ:</label></td>
                                    <td><?php echo $gv['macb']; ?></td>
                                </tr>
                                <tr>
                                    <td><label>Họ và tên:</label></td>
                                    <td><?php echo $gv['hoten']; ?></td>
                                </tr>
                                <tr>
                                    <td><label>Giới tính:</label></td>
                                    <td><?php echo $gv['gioitinh']; ?></td>
                                </tr>
                                <tr>
                                    <td><label>Email:</label></td>
                                    <td><?php echo $gv['email']; ?></td>
                                </tr>
                                <tr>
                                    <td><label>Điện thoại:</label></td>
                                    <td><?php echo $gv['sdt']; ?></td>
                                </tr>
                                <tr>
                                    <td><label>Hướng dẫn nhóm học phần:</label></td>
                                    <td>01, 02</td>
                                </tr>
                            </table>
                        </div> <!-- /class="col-md-9 col-md-pull-3" -->
                        <div class="col-md-3 col-md-pull-9">
                            <table class="table table-bordered" border="0" width="800px" cellpadding="25px" cellspacing="0px" align='center'>
                                <tr>
                                    <td align="center">
                                        <?php 
                                            if($gv['hinhdaidien'] != ""){
                                                echo "<img width='200px' src='hinhdaidien/".$gv['hinhdaidien']."'>";
                                            }
                                            else{
                                                echo "<img src='images/User-image.png'>";
                                            }
                                        ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td align="center"><a href="#">Đổi ảnh đại diện</a></td>
                                </tr>
                            </table>                            
                        </div> <!-- /class="col-md-3 col-md-pull-9" -->
                    </div> <!-- /row --> 
            </div> <!-- /row -->           
        </div> <!-- /container -->
    </body>
</html>
