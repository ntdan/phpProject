<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Phân công cho mỗi thành viên</title>
                <!-- Bootstrap -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link type="text/css" rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
        <script src="../bootstrap/js/bootstrap.js"></script>
        
        <style type="text/css">
            th{
                text-align: center;
                color: darkblue;
                background-color: #dff0d8;
            }
            #bang1 th{
                text-align: left;                
                color: darkblue;
                background-color: #dff0d8;
            }
        </style>
    </head>      
    <?php 
            include_once 'chucnang/sv_chitietphancong.php';
            include_once 'chucnang/gv_chitietkehoach.php';
            
            $macv = $_GET['id_macv'];
            $manth = $_GET['id_manth'];
            
            $cvchinh = cv_chinh($manth,$macv);
            if($cvchinh == NULL){
                return;
            }            
            $cvchinh = mysql_fetch_array($cvchinh);
            
            if(isset($_GET['id_macvphu'])){                
                $macvp = $_GET['id_macvphu'];
                xoa_cvphu($manth,$macvp);
            }
            
            
    ?>
    <body>
        
        <div class="container">
            <div class="row">
                <div class="col-md-12">                    
<!-- Cập nhật chi tiết công sức làm dự án của mỗi thành viên -->
                    <h4 style="color: darkblue; font-weight: bold;">CHI TIẾT PHÂN CÔNG CHO MỖI THÀNH VIÊN</h4><br>
                    <div class="col-md-12" style="background-color:#dff0d8; margin-bottom: 20px; padding: 8px;">
                        <label style="color: darkblue; font-size: 13pt;">Thuộc công việc:</label>
                        <label style="color: #F65D20;">
                            <?php echo "<a href='?cn=phancongcv'>".$manth." - ".$cvchinh['congviec']."</a>"; ?>
                        </label>
                         <a href="?cn=themcvphuthuoc&id_manth=<?php echo $manth; ?>&id_macv=<?php echo $macv; ?>" style="margin-left: 40%;">
                            <button type="button" name="btnThem" class="btn btn-primary" style="width:20%;">
                            <img src="images/add-icon.png">Thêm công việc
                            </button>
                         </a>
                    </div>
                    <table class="table table-hover" width="800px" cellpadding="15px" cellspacing="0px" align='center'>
                        <tr>
                            <th rowspan="2" width="2%">STT</th>
                            <th rowspan="2" width="3%">ID</th>
                            <th rowspan="2" width="15%%">Tên công việc</th>
                            <th rowspan="2" width="15%">Giao cho</th>
                            <th colspan="3" width="20%">Thực tế</th>
                            <th rowspan="2" width="20%">Chi tiết công việc</th>
                            <th rowspan="2" width="8%">Tiến độ</th>
                            <th rowspan="2" width="5%">Thao tác</th>
                        </tr>
                        <tr>
                            <th>Bắt đầu</th>
                            <th>Kết thúc</th>
                            <th>Số giờ</th>
                        </tr>
                        <?php
                            ds_chitietcv($manth,$macv);
                        ?>
                    </table>     
                </div>
            </div> <!-- /row -->
        </div> <!-- /container -->
        
    </body>
</html>
