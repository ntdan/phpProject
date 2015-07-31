<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Công việc được giao</title>
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
    </style>
    <?php
        include_once 'chucnang/sv_duocgiaocv.php';
        include_once 'chucnang/sv_thongtin.php';
        
        $mssv = '1111317';
        $hoten = 'Phạm Thúy Ngọc';
   //Lấy mã nhóm niên luận của sv
        $manl = sv_maNhomNL($mssv);
        if($manl == null){ return; }
        $manth = $manl['manhomthuchien'];               
    ?>
    
    <body>
        <div class="container">         
            
            <div class="row">
                <div class="col-md-12">
                    <h3 style="color: darkblue; font-weight: bold;" align="center">CÔNG VIỆC ĐƯỢC GIAO</h3><br>
                </div>          
                <div class="col-md-12">
                            <table class="table table-bordered" border="0" width="1000px" cellpadding="0px" cellspacing="0px" align='center' id="bang1">
                                <tr>
                                    <th width="1%">STT</th>
                                    <th width="15%">Công việc</th>
                                    <th width="8%">Giao cho</th>
                                    <th width="6%">Ngày bắt đầu</th>
                                    <th width="6%">Hạn hoàn tất</th>
                                    <th width="4%">Thời gian</th>
                                    <th width="4%">Phụ thuộc</th>
                                    <th width="5%">Độ ưu tiên</th>
                                    <th width="5%">Trạng thái</th>
                                    <th width="8%">Tiến độ</th>
                                </tr>
                                <?php danhsach_viecduocgiao($mssv,$hoten,$manth); ?>
                            </table>
                </div>  <!-- /class="col-md-12" -->                     
            </div> <!-- /row -->
            
        </div> <!-- /container -->
    </body>
</html>

