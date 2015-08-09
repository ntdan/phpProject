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
        include_once 'chucnang/gv_chitietkehoach.php';
    
    $mssv = $svUSER['mssv'];    

//Lấy thông tin giảng viên hướng dẫn
    $ma = sv_maCB($mssv);
    $maso = $ma['macb'];
    $gv = gv_xem($maso);

    if($gv == null){
        return;
    }
//Lấy thông tin đề tài, nhóm niên luận
    $dtnhom = sv_nhom($mssv);
    $manth = $dtnhom['manhomthuchien'];
//Sinh viên cập nhật thêm thông tin
    if(isset($_POST['btnLuu'])){
        $sdt = $_POST['txtDienThoai']; 
        $congnghe = $_POST['txtCongNghe'];
        $laptrinh = $_POST['txtLapTrinh'];
        $kinhnghiem = $_POST['txtKinhNghiem'];
        
        //sv_themchitiet($mssv, $hinh, $congnghe, $laptrinh, $kinhnghiem)
        sv_themchitiet($mssv, $sdt, $congnghe, $laptrinh, $kinhnghiem);
    }
    
    $sv = sv_xem($mssv);    
    if($sv == null){
        return;
    }
//Lấy danh sách thành viên trong nhóm        
        $dstv = danhsach_thanhvien($manth);
        if($dstv == NULL){
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
                            <table class="table table-bordered" border="0" width="700px" cellpadding="25px" cellspacing="0px" align='center' id="bang1">
                                <tr><th colspan="4" style="text-align: center">Thông tin sinh viên</th></tr>
                                <tr>
                                    <td><label>Mã số sinh viên:</label></td>
                                    <td style="color:blue;" colspan="3"><?php echo $sv['mssv']; ?></td>                                    
                                </tr>
                                <tr>
                                    <td><label>Họ và tên:</label></td>
                                    <td style="color:blue;" colspan="3"><?php echo $sv['hoten']; ?></td>
                                </tr>
                                <tr>
                                    <td><label>Năm sinh:</label></td>
                                    <td style="color:blue;" colspan="3"><?php echo $sv['ngaysinh']; ?></td>
                                </tr>
                                <tr>
                                    <td><label>Khóa:</label></td>
                                    <td style="color:blue;"><?php echo $sv['khoahoc']; ?></td>
                                    <td width="10%"><label>Nhóm học phần:</label></td>
                                    <td style="color:blue;"><?php echo $dtnhom['tennhomhp']; ?></td>
                                </tr>
                                <tr>
                                    <td><label>Tên đề tài:</label></td>
                                    <td style="color:blue;" colspan="3"><?php echo $dtnhom['tendt']; ?></td>
                                </tr>
                                <tr>
                                    <td><label>Mã nhóm niên luận: </label></td>
                                    <td style="color:blue;"><?php echo $dtnhom['manhomthuchien']; ?></td>
                                    <td colspan="2" align="center">
                                        <div class="dropdown">
                                            <button class="btn btn-success dropdown-toggle" type="button" data-toggle="dropdown">
                                                Thành viên nhóm làm niên luận
                                                <span class="caret"></span>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a href="#">
                                                        <table class="table table-hover" width="500px" cellpadding="15px" cellspacing="0px">
                                                            <tr>
                                                                <th width="2%">STT</th>
                                                                <th width="4%">MSSV</th>
                                                                <th width="20%">Họ và tên</th>
                                                                <th width="5%">Trưởng nhóm</th>
                                                            </tr>
                                                            <?php
                                                                global $check;
                                                                global $uncheck;
                                                                $n = mysql_num_rows($dstv);
                                                                $stt = 1;
                                                                while($rw = mysql_fetch_array($dstv)){
                                                                    $ch = $rw['nhomtruong'] == 1 ? $check : $uncheck;

                                                                    echo "<tr>".
                                                                            "<td align='center'>$stt</td>".
                                                                            "<td>".$rw['mssv']."</td>".
                                                                            "<td>".$rw['hoten']."</td>".
                                                                            "<td align='center'><img src='$ch'/></td>".
                                                                        "</tr>";
                                                                    $stt++;
                                                                }
                                                            ?>                        
                                                        </table>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div> <!-- /dropdown -->
                                    </td>
                                </tr>
                                <tr>
                                    <td><label>Tổ chức nhóm:</label></td>                                   
                                    <?php
                                        if(mysql_num_rows($dstv)>0){
                                            $row = mysql_fetch_array($dstv);
                                            echo  "<td colspan='3'>".$row['tochucnhom']."</td>";
                                        }                           
                                    ?>
                                </tr>
                                <tr>
                                    <td><label>Lịch họp nhóm:</label></td>
                                    <?php              
                                        if(mysql_num_rows($dstv)>0){
                                           $rw = mysql_fetch_array($dstv);
                                            $b = ""; $lichhop = $rw['lichhop'];
                                            $buoi = substr($lichhop, 0,1);
                                            $bs = strcasecmp($buoi, 'S');
                                            $bc = strcasecmp($buoi, 'C');

                                            if($bs == 0){
                                                $b="Sáng thứ "; 
                                            }
                                            else if($bc == 0){
                                                $b="Chiều thứ "; 
                                            }
                                            $so = substr($lichhop,1,1);

                                            echo "<td colspan='3'>".$b.$so."</td>";
                                        }                           
                                    ?>
                                </tr>
                            </table>
                            <form action="" method="post">
                                <table class="table table-bordered" border="0" width="800px" cellpadding="25px" cellspacing="0px" align='center' id="bang2">
                                    <tr><th colspan="2" style="text-align: center">Xác nhận thông tin</th></tr>
                                    <tr>
                                        <td>Số điện thoại:</td>
                                        <td>
                                            <input type="text" name="txtDienThoai" value="<?php echo $sv['sdt'];?>" class="form-control">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Kỹ năng công nghệ:</td>
                                        <td>
                                            <textarea class="form-control" name="txtCongNghe" rows="3">
                                                <?php echo $sv['kynangcongnghe'];?>
                                            </textarea>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Kiến thức về ngôn lập trình:</td>
                                        <td>
                                            <textarea class="form-control" name="txtLapTrinh" rows="3" style="text-align: left;">
                                                <?php echo $sv['kienthuclaptrinh'];?>
                                            </textarea>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Kinh nghiệm:</td>
                                        <td>
                                            <textarea class="form-control" name="txtKinhNghiem" rows="3">
                                                <?php echo $sv['kinhnghiem'];?>
                                            </textarea>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td align="center">
                                            <button type="submit" name="btnLuu" class="btn btn-primary" style="width: 20%;">
                                                <img src="images/save-as-icon.png"> Lưu 
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

