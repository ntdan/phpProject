<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
        <!-- Bootstrap -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link type="text/css" rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
        <script src="../bootstrap/js/bootstrap.min.js"></script>
        <script src="../bootstrap/js/jquery-1.11.3.min.js"></script>
        <script type="text/javascript" src="../scripts/ckeditor/ckeditor.js"></script>
        
        <style type="text/css">
            th{
                text-align: center;
                color: darkblue;
                background-color: #dff0d8;
            }
        </style>
    </head>
     <?php
           include_once 'chucnang/gv_chitietkehoach.php';
           
           $manth = $_GET['id_nth'];
           $ds = danhsach_thanhvien($manth);
           if($ds == NULL){
               return;
           }
     ?>
    <body>
        <div class="container">
            <div class="row">
                <h3 style="color: darkblue;font-weight: bold; margin-left: 2%">KẾ HOẠCH CHI TIẾT</h3>
                <div class="col-md-6 col-md-offset-3">
                    <table class="table table-hover" width="500px" cellpadding="15px" cellspacing="0px" align='center'>
                        <tr>
                            <th width="2%">STT</th>
                            <th width="10%">Nhóm niên luận</th>
                            <th width="20%">Danh sách thành viên</th>
                            <th width="5%">Trưởng nhóm</th>
                        </tr>         
                        <?php
                             global $check;
                             global $uncheck;
                             $stt = 1;
                             $n = mysql_num_rows($ds);
                             $tv = NULL;
                            while($tv = mysql_fetch_array($ds)){
                                $ch = $tv['nhomtruong'] == 1 ? $check : $uncheck;
                                
                                echo "<tr>".
                                          "<td align='center'>".$stt."</td>".
                                          "<td>".$tv['manhomthuchien']."</td>".
                                          "<td>".$tv['hoten']."</td>".
                                          "<td align='center'><img src='$ch'></td>".
                                      "</tr>";
                                $stt++;
                            }
                        ?>
                    </table>
                </div>
                
          <!-- Danh sách chi tiết các công việc -->      
                <div class="col-md-12">
                    <h4 style="color: #c7254e;"><img src="images/box-icon1.png"/> Phân tích yêu cầu</h4>
                    <div class="progress" style="width:50%;">  
                        <div class="progress-bar" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="width:30%">  
                            30% Complete  
                        </div>  
                    </div>
                    <table class="table table-hover" width="800px" cellpadding="15px" cellspacing="0px" align='center'>
                        <tr>
                            <th rowspan="2" width="2%">ID</th>
                            <th rowspan="2" width="15%">Giao cho</th>
                            <th colspan="3" width="20%">Thực tế</th>
                            <th rowspan="2" width="20%">Chi tiết công việc</th>
                        </tr>
                        <tr>
                            <th>Bắt đầu</th>
                            <th>Kết thúc</th>
                            <th>Số giờ</th>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Kim Nguyên</td>
                            <td>02/01/2015</td>
                            <td>28/02/2015</td>                            
                            <td>5</td>
                            <td>Phải phân tích cấu trúc lưu CSDL và các chức năng chình cần thực hiện</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Thành Long</td>
                            <td>02/02/2015</td>
                            <td>30/03/2015</td>                            
                            <td>6</td>
                            <td>Thiết kế chi tiết các chức năng theo CSDL đã phân tích, cập nhật lại CDM khi thiết kế</td>
                        </tr>
                    </table>
                </div>
                <div class="col-md-12">
                    <h4 style="color: #c7254e;"><img src="images/box-icon1.png"/> Đặc tả yêu cầu phần mềm</h4>
                    <div class="progress" style="width:50%;">  
                        <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width:0%">  
                            0% Complete  
                        </div> 0% 
                    </div>
                    <table class="table table-hover" width="800px" cellpadding="15px" cellspacing="0px" align='center'>
                        <tr>
                            <th rowspan="2" width="2%">ID</th>
                            <th rowspan="2" width="15%">Giao cho</th>
                            <th colspan="3" width="20%">Thực tế</th>
                            <th rowspan="2" width="20%">Chi tiết công việc</th>
                        </tr>
                        <tr>
                            <th>Bắt đầu</th>
                            <th>Kết thúc</th>
                            <th>Số giờ</th>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Kim Nguyên</td>
                            <td>02/01/2015</td>
                            <td>28/02/2015</td>                            
                            <td>0</td>
                            <td>Xác định các yêu cầu chức năng và phi chức năng của phần mềm</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </body>
</html>
