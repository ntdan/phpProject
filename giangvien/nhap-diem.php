<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
    <style type="text/css">
        th{
            vertical-align: middle;
            text-align: center;
            color: darkblue;
            background-color: #dff0d8;
        }
    </style>
    
    <?php
        include_once 'chucnang/gv_nhapdiem.php';
            include_once 'chucnang/gv_tieuchidiem.php';
            include_once 'chucnang/sv_thongtin.php';
            
            //$macb = '2134';
            $macb = $gvUSER['macb'];            
            $ds_tc = tc_danhsach($macb);
            if($ds_tc == NULL){
                return;
            }
//Lấy điểm của mỗi tiêu chí của cán bộ hướng dẫn
            $ds_diemtc = gv_diem_tc($macb);
            if($ds_diemtc == NULL){
                return;
            }
//Lấy số sinh viên của 1 nhóm niên luận
            //$manth = $_POST['cbmDeTai']; //selectbox tên đề tài nhưng Giá trị là 'mã nhóm thực hiện'
            $manth = 'NTH01';
            $dssv = gv_laysv($manth);
            
            if(isset($_POST['btnLuu'])){
                while(mysql_fetch_array($dssv)){
                    $matc = $_POST['hidMaTC'];
                    $mssv = $_POST['txtMaSV'];
                    $diem = $_POST['txtTenSV'];
                    gv_luudiem($matc, $mssv, $diem);
                }                         
                echo "<script>window.location.href='?cn=nhapdiem'</script>";
            }
            if(isset($_POST['btnCapNhat'])){
                $matc = $_POST['hidMaTC'];
                $mssv = $_POST['txtMaSV'];
                $diem = $_POST['txtTenSV'];
                gv_capnhatdiem($matc, $mssv, $diem);
                
                echo "<script>window.location.href='?cn=nhapdiem'</script>";
            }
    ?>

<div class="container">
    <div class="row">
    <div class="col-md-12">
        <h3 style="color: darkblue; font-weight: bold;">BẢNG GHI ĐIỂM NIÊN LUẬN</h3>        
        <form id="" name="frmNhapDiem" action="" method="post">
            <table class="table table-bordered" cellpadding="15px" cellspacing="0px" align='center'>
                <?php
                    gv_namhoc_hk($macb);
                    gv_manthdt_hp($macb);
                    $detai = isset($_POST['cbmDeTai']) ? $_POST['cbmDeTai'] : -1;
                    chon_DeTai($detai,$macb,TRUE);
                ?>
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
                <tr>
                    <?php 
                        while($diemtc = mysql_fetch_array($ds_diemtc)){
                            echo "<th width='2%'>".
                                    $diemtc['heso'].
                                    "<input style='text-align:center;' type='hidden' name='hidMaTC' value='".$diemtc['matc']."' size='2'/>".
                                 "</th>";
                        }                                
                    ?>
                </tr>
                <?php
                      $stt = 1;                        
                      while($sv = mysql_fetch_array($dssv)){
                          echo "<tr>".
                                  "<td align='center' width:1%>$stt</td>".
                                  "<td align='center' width:4%>".
                                      "<input style='border:0px white; text-align:center;' type='text' name='txtMaSV' value='".$sv['mssv']."' size='8'/>".
                                  "</td>".
                                  "<td><input style='border:0px white;' type='text' name='txtTenSV' value='".$sv['hoten']."' size='20'/></td>".                                    
                        //Lấy điểm của các thành viên theo tiêu chí
                              $sv_diem = sv_diem($sv['mssv']);
                              if($sv_diem == NULL){
                                  return;
                              }
                          while($diem = mysql_fetch_array($sv_diem)){
                              echo "<td align='center' style='color: #FF00FF; font-weight:bold;'>".
                                         "<input style='text-align:center;' type='text' size='1' align='center' value='".$diem['diem']."'/>".
                                   "</td>";
                         }
                              echo "<td align='center' style='color: darkmagenta; font-weight:bold;'>".tongdiem($sv['mssv'])."</td>".
                                   "<td align='center' style='color: brown; font-weight:bold;'>".diemchu($sv['mssv'])."</td>".
                               "</tr>";
                          $stt++;
                      }    
                ?>                
            </table>

            <table class="table" cellpadding="15px" cellspacing="0px" align='center'>
                <tr>
                    <td align="right">
                        <button type="button" name="" class="btn btn-info" style="width: 50%;">
                            <img src="images/excel-icon.png"> Nhập từ Exel...
                        </button> 
                    </td>
                    <td>
                        <button type="button" name="" class="btn btn-success" style="width: 50%;">
                            <img src="images/printer-icon.png"> In bảng điểm
                        </button>
                    </td>
                    <td align="right">
                        <button type="submit" name="btnLuu" class="btn btn-primary" style="width: 55%;">
                            <img src="images/save-as-icon.png"> Lưu dữ liệu
                        </button>                            
                    </td>
                    <td>
                        <button type="submit" name="btnCapNhat" class="btn btn-primary" style="width: 60%;">
                            <img src="images/calculator.png"> Cập nhật ĐTB
                        </button>
                    </td>
                </tr>
            </table>
        </form>               
    </div>
    </div> <!-- /row -->
</div> <!-- /container -->

