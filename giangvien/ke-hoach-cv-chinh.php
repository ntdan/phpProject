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
           $cvchinh = cv_chinh($manth);
           if($cvchinh == NULL){
               return;
           }
           
           
     ?>
    <body>
        <script src="scripts/Highcharts-4.1.7/js/highcharts.js"></script>
        <script src="scripts/Highcharts-4.1.7/js/modules/data.js"></script>
        <script src="scripts/Highcharts-4.1.7/js/modules/drilldown.js"></script>              
        
        <div class="container">
            <div class="row">
                <h3 style="color: darkblue;font-weight: bold; margin-left: 2%">KẾ HOẠCH CHI TIẾT</h3>
                    <?php  
                        $dtnth = detai_nhom($manth);
                        if($dtnth != NULL){
                            $dtn = mysql_fetch_array($dtnth);
                            echo "<h4 style='color: #398439; margin-left: 10%'> Đề tài thực hiện: <label>"
                                        .$dtn['tendt'].
                                 "</label></h4>";
                        }
                    ?>
                
                <div class="col-md-6">
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
                <div class="col-md-6" style="background-color: #dff0d8;">
                    <div id="container" style="min-width: 310px; max-width: 600px; height: 400px; margin: 0 auto; "></div>                        
                </div>
                
          <!-- Danh sách chi tiết các công việc -->      
                <div class="col-md-12">
                    <?php
                        $ctkh = "";
                        while( $ctkh = mysql_fetch_array($cvchinh)){
                            echo "<div class=\"col-md-12\">".
                                    "<h4 style='color: #c7254e;'><a href='?cn=kehoachcvphuthuoc&id_manth=".$ctkh['manhomthuchien']."&id_macv=".$ctkh['macv']."'><img src='images/box-icon1.png'/> ".$ctkh['congviec']."</a></h4> ".
                                    "<div class=\"progress\" style='width:50%;'>". 
                                          "<div class=\"progress-bar\" role=\"progressbar\" aria-valuenow='".$ctkh['tiendo']."' aria-valuemin='0' aria-valuemax='100' style='width:".$ctkh['tiendo']."%'>".  
                                                  $ctkh['tiendo']."% Complete".  
                                          "</div>".  
                                    "</div>".
                                    "<table class=\"table table-hover\" width='800px' align='center'>".
                                          "<tr>".
                                              "<th rowspan='2' width='2%'>ID</th>".
                                              "<th rowspan='2' width='15%'>Giao cho</th>".
                                              "<th colspan='2' width='20%'>Kế hoạch</th>".
                                              "<th colspan='3' width='20%'>Thực tế</th>".
                                              "<th rowspan='2' width='20%'>Chi tiết công việc</th>".
                                          "</tr>".
                                          "<tr>".
                                            "<th>Bắt đầu</th>".
                                             "<th>Kết thúc</th>".
                                             "<th>Bắt đầu</th>".
                                             "<th>Kết thúc</th>".
                                             "<th>Số giờ</th>".
                                          "</tr>".
                                          "<tr>".
                                             "<td>".$ctkh['macv']."</td>".
                                             "<td>".$ctkh['giaocho']."</td>".
                                             "<td>".$ctkh['ngaybatdau_kehoach']."</td>".
                                             "<td>".$ctkh['ngayketthuc_kehoach']."</td>". 
                                             "<td>".$ctkh['ngaybatdau_thucte']."</td>".
                                             "<td>".$ctkh['ngayketthuc_thucte']."</td>".                            
                                             "<td>".$ctkh['sogio_thucte']."</td>".
                                             "<td>".$ctkh['noidungthuchien']."</td>".
                                          "</tr>".
                                      "</table>".
                                    "</div>";
                        }
                    ?>                                                          
                </div>
            </div>
        </div>
    </body>
</html>