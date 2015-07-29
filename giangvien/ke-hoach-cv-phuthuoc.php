<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Kế hoạch công việc phụ thuộc</title>
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
            include_once 'chucnang/gv_chitietkehoach.php';
            $manth = $_GET['id_manth'];
            $macv = $_GET['id_macv'];
            
            $cvchinh = cv_chinh($manth,$macv);
            if($cvchinh == NULL){
                return;
            }            
            $khchinh = mysql_fetch_array($cvchinh);
    ?>
    <body>
        
        <div class="container">
            <div class="row">
                <div class="col-md-12">                    
                    <h4 style="color: darkblue; font-weight: bold;">KẾ HOẠCH CÔNG VIỆC PHỤ THUỘC</h4><br>
                    <div class="col-md-12">
                        <label style="color: darkblue;">Thuộc công việc:</label>
                        <label style="color: #F65D20;"><?php echo "<a href='?cn=kehoachcvchinh&id_nth=$manth'>".$macv; ?> -  <?php echo $khchinh['congviec']."</a>"; ?> </label>
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
                        </tr>
                        <tr>
                            <th>Bắt đầu</th>
                            <th>Kết thúc</th>
                            <th>Số giờ</th>
                        </tr>
                        <?php gv_ds_chitietcv($macv); ?>
                    </table>     
                </div>
            </div> <!-- /row -->
        </div> <!-- /container -->
        
    </body>
</html>
