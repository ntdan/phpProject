<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Thông tin sinh viên</title>
         <!-- Bootstrap -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link type="text/css" rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="../bootstrap/css/signin.css">
        <script src="../bootstrap/js/jquery-1.11.3.min.js"></script>
        <script src="../bootstrap/js/bootstrap.min.js"></script>
    </head>
    
    <style type="text/css">
        th{
            text-align: center;
            color: darkblue;
            background-color: #dff0d8;
        }
        #bang1 td:first-child{
            width: 30%; 
            vertical-align: middle;
        }
        #bang1 td{
           vertical-align: middle;             
        }        
        td:first-child{
            color: black;
        }
        #bang2 td:first-child{
            text-align: center;
            color: black;
            font-weight: bold;
            text-align: left;
            vertical-align: middle;
            width: 30%;
        }
    </style>
  
<?php 
    include 'chucnang/sv_thongtin.php';
    include 'chucnang/gv_thongtin.php';
    
    $mssv = 1111317;    
    $sv = sv_xem($mssv);
    
    if($sv == null){
        return;
    }
//Lấy thông tin giảng viên hướng dẫn
    $maso = '2134';
    $gv = gv_xem($maso);

    if($gv == null){
        return;
    }
?>
    
    <body>
        <div class="container">         
            
            <div class="row">
                <div class="col-md-12">
                    <h3 style="color: darkblue; font-weight: bold;" align="center">THÔNG TIN SINH VIÊN</h3><br>
                </div>          
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-9 col-md-push-3">
                            <div class="dropdown">
                                <button class="btn btn-info dropdown-toggle" type="button" data-toggle="dropdown">
                                    Giảng viên hướng dẫn
                                    <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a href="#">
                                            <table class="table table-bordered" border="0" width="800px" cellpadding="25px" cellspacing="0px" align='center'>
                                                <tr>
                                                    <th width="40%">MSCB:</th>
                                                    <td><?php echo $gv['macb']; ?></td>                                    
                                                </tr>
                                                <tr>
                                                    <th>Họ và tên:</th>
                                                    <td><?php echo $gv['hoten']; ?></td>
                                                </tr>
                                                <tr>
                                                    <th>Email:</th>
                                                    <td><?php echo $gv['email']; ?></td>
                                                </tr>
                                                <tr>
                                                    <th>Điện thoại:</th>
                                                    <td><?php echo $gv['sdt']; ?></td>
                                                </tr>
                                            </table>
                                        </a>
                                    </li>
                                </ul>
                            </div> <!-- /dropdown -->
                            <br>
                            <table class="table table-bordered" border="0" width="800px" cellpadding="25px" cellspacing="0px" align='center' id="bang1">
                                <tr><th colspan="2" style="text-align: center">Thông tin sinh viên</th></tr>
                                <tr>
                                    <td><label>Mã số sinh viên:</label></td>
                                    <td style="color:blue;"><?php echo $sv['mssv']; ?></td>
                                </tr>
                                <tr>
                                    <td><label>Họ và tên:</label></td>
                                    <td style="color:blue;"><?php echo $sv['hoten']; ?></td>
                                </tr>
                                <tr>
                                    <td><label>Năm sinh:</label></td>
                                    <td style="color:blue;"><?php echo $sv['ngaysinh']; ?></td>
                                </tr>
                                <tr>
                                    <td><label>Khóa:</label></td>
                                    <td style="color:blue;"><?php echo $sv['khoahoc']; ?></td>
                                </tr>
                                <tr>
                                    <td><label>Tên đề tài:</label></td>
                                    <td>Website bán điện thoại</td>
                                </tr>
                                <tr>
                                    <td><label>Thành viên</label></td>
                                    <td>
                                        <strong>Nhóm trưởng : </strong>Huỳnh Trung Long<br>
                                        <strong>Thành viên khác: </strong> Trấn Thành, Phạm Kim Chi
                                    </td>                                    
                                </tr>
                            </table>
                            <form action="" method="post">
                                <table class="table table-bordered" border="0" width="800px" cellpadding="25px" cellspacing="0px" align='center' id="bang2">
                                    <tr><th colspan="2" style="text-align: center">Xác nhận thông tin</th></tr>
                                    <tr>
                                        <td>Số điện thoại:</td>
                                        <td>
                                            <input type="text" name="" value="" class="form-control">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Kỹ năng công nghệ:</td>
                                        <td>
                                            <textarea class="form-control" rows="3"></textarea>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Kiến thức về ngôn lập trình:</td>
                                        <td>
                                            <textarea class="form-control" rows="3"></textarea>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Kinh nghiệm:</td>
                                        <td>
                                            <textarea class="form-control" rows="3"></textarea>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td align="center">
                                            <button type="submit" name="btnLuu" class="btn btn-primary" style="width: 20%;">
                                                <img src="images/save-as-icon.png"> Lưu 
                                            </button>
                                            <button type="reset" name="" class="btn btn-primary" style="width: 20%;">
                                                <img src="images/refresh.png"> Làm lại
                                            </button> 
                                        </td>                                  
                                    </tr>
                                </table>
                            </form>                            
                        </div> <!-- /class="col-md-9 col-md-pull-3" -->
                        <div class="col-md-3 col-md-pull-9">
                            <table class="table table-bordered" border="0" width="800px" cellpadding="25px" cellspacing="0px" align='center'>
                                <tr>
                                    <td align="center">
                                        <?php
                                            if($sv['hinhdaidien'] != ""){
                                                echo "<img width=200px src='hinhdaidien/".$sv['hinhdaidien']."'>";
                                            }
                                            else
                                                echo "<img src='images/User-image.png'>";
                                        ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td align="center"><a href="#">Ảnh đại diện</a></td>
                                </tr>
                            </table >  <!-- /table anh dai dien -->
                        </div> <!-- /class="col-md-3 col-md-pull-9" -->
                    </div> <!-- /row -->
                   
                </div>  <!-- /class="col-md-12" -->                     
            </div> <!-- /row -->
            
        </div> <!-- /container -->
    </body>
</html>

