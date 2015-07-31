<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Xem điểm</title>
        <!-- Bootstrap -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link type="text/css" rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
        <link type="text/css" rel="stylesheet" href="../bootstrap/css/bootstrap-datetimepicker.min.css">
        <script src="../bootstrap/js/jquery-1.11.3.min.js"></script>
        <script src="../bootstrap/js/bootstrap.js"></script>
    </head>
    
    <style type="text/css">
        th{
            vertical-align: middle;
            text-align: center;
            color: darkblue;
            background-color: #dff0d8;
        }
    </style>
    
    <?php
            include_once 'chucnang/sv_diem.php';
            include_once 'chucnang/gv_tieuchidiem.php';
            include_once 'chucnang/sv_thongtin.php';
            
            $mssv = '1111317';
 //Lấy mã nhóm niên luận mà sv đăng ký           
            $manl = sv_maNhomNL($mssv);
            if($manl == null){
                return;
            }
//Lấy mã cán bộ hướng dẫn nhóm hp mà sv đăng ký
            $laymacb = sv_maCB($mssv);
            if($laymacb == NULL){
                return;
            }
            $manth = $manl['manhomthuchien'];
            $macb = $laymacb['macb'];
            
            $ds_tc = tc_danhsach($macb);
            if($ds_tc == NULL){
                return;
            }
//Lấy điểm của mỗi tiêu chí của cán bộ hướng dẫn
            $ds_diemtc = diem_tc($macb);
            if($ds_diemtc == NULL){
                return;
            }
//Lấy mssv, hoten của các thành viên trong 1 nhóm
            $ds_sv = thanhvien($manth);
            if($ds_sv == NULL){
                return;
            }

            
    ?>
    
    <body>
        <div class="container">
            <div class="row">
            <div class="col-md-12">
                <h3 style="color: darkblue; font-weight: bold; text-align: center;">XEM ĐIỂM NIÊN LUẬN</h3>
                <table class="table" cellpadding="15px" cellspacing="0px" align='center'>
                    <tr>
                        <?php namhoc_hp($manth) ?>
                    </tr>
                 </table>
           
                <table class="table table-bordered" cellpadding="15px" cellspacing="0px" align='center'>
                    <tr>
                        <th rowspan="2" width="1%">STT</th>
                        <th rowspan="2" width="8%">MSSV</th>
                        <th rowspan="2" width="20%">Họ và tên</th>
                        <th colspan="4" width="25%">Tiêu chí</th>
                        <th rowspan="2" width="4%">Tổng điểm</th>
                        <th rowspan="2" width="4%">Điểm chữ</th>                         
                    </tr>
                        <?php 
                            while($diemtc = mysql_fetch_array($ds_diemtc)){
                                echo "<th width='2%'>".$diemtc['heso']."</th>";
                            }                                
                        ?>
                    <tr> 
                    <?php 
                        $stt = 1;                        
                        while($sv = mysql_fetch_array($ds_sv)){
                            echo "<tr>".
                                    "<td align='center'>$stt</td>".
                                    "<td align='center'>".$sv['mssv']."</td>".
                                    "<td>".$sv['hoten']."</td>".                                    
                            //Lấy điểm của các thành viên theo tiêu chí
                                $sv_diem = sv_diem($sv['mssv']);
                                if($sv_diem == NULL){
                                    return;
                                }
                            while($diem = mysql_fetch_array($sv_diem)){
                                echo "<td align='center' style='color: #FF00FF; font-weight:bold;'>".$diem['diem']."</td>";
                            }
                            
                                echo "<td align='center' style='color: darkmagenta; font-weight:bold;'>".tongdiem($sv['mssv'])."</td>".
                                     "<td align='center' style='color: brown; font-weight:bold;'>".diemchu($sv['mssv'])."</td>".
                                 "</tr>";
                            $stt++;
                        }                                
                    ?>
                </table>
                <div class="col-md-12" style="text-align: right;">
                    <input type="button" value="In bảng điểm" class="btn btn-primary"><hr>
                </div>
                <table class="table table-bordered" style="width: 600px;">
                    <tr>
                        <th width="2%">STT</th>
                        <th width="50%">Nội dung đánh giá</th>
                        <th width="10%">Mức điểm tối đa</th>                        
                    </tr>
                    <?php
                            $tc = null;
                            $stt = 1;
                            while($tc = mysql_fetch_array($ds_tc)){
                                echo "<tr>".
                                        "<td align='center'>".$stt."</td>".
                                        "<td>".$tc['noidungtc']."</td>".
                                        "<td align='center'>".$tc['heso']."</td>".
                                    "</tr>";  
                                $stt++;
                            }                                                         
                        ?>                       
                </table>
            </div>
            </div> <!-- /row -->
        </div> <!-- /container -->
    </body>
</html>
