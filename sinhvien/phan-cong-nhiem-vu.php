<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Phân công nhiệm vụ</title>
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
        include_once 'chucnang/sv_phancv.php';
        include_once 'chucnang/sv_nhomthuchien.php';
        
        $manth = 'NTH02';
        $dtth = xem_dtthuchien($manth);
        if($dtth == NULL){
            return;
        }
  //Lấy thông tin của 1 nhóm.      
        $nhom = thongtinnhom_thuchien($manth);
        if($nhom == null){
            return;
        }
    ?>
    
    <body>
        
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3 style="color: darkblue; font-weight: bold;">Phân công thực hiện đề tài</h3> 
                    <div class="col-md-12"> 
                        <!-- thanh tiến độ thời gian thực hiện -->
                        <lable style="display: block; float: left; width: 27%;">Thời gian quy định (20/02/2014 - 30/06/2014): &nbsp;</lable>
                        <div class="progress">
                            <div class="progress-bar progress-bar-success" style="width: 35%">
                              35% Complete (success)
                            </div>
                            <div class="progress-bar progress-bar-warning progress-bar-striped" style="width: 20%">
                              20% Complete (warning)
                            </div>
                            <div class="progress-bar progress-bar-danger" style="width: 10%">
                              <span class="sr-only">10% Complete (danger)</span>
                            </div>
                        </div>
                        <!-- thanh tiến độ côg việc -->
                        <lable style="display: block; float: left; width: 27%;">Công việc hoàn thành: &nbsp;</lable>
                        <div class="progress">
                            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="<?php echo $nhom['tiendo']; ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $nhom['tiendo']; ?>%;">
                              <?php echo $nhom['tiendo']; ?>%
                            </div>
                        </div>
                    </div>
                    <table class="table" width="800px" cellpadding="0px" cellspacing="0px" id="bang1">
                        <tr>
                            <th width="8%">Tên đề tài:</th>
                            <th width="40%">
                                <input type="text" name="txtTenDT" value="<?php echo $dtth['tendt']; ?>" readonly="" class="form-control">
                            </th>
                            <th width="35%">
                                <a href="?cn=themcv&id_manth=<?php echo $manth; ?>">
                                    <button type="button" name="btnThem" class="btn btn-primary" style="width:45%;">
                                    <img src="images/add-icon.png">Thêm công việc
                                    </button></a> &nbsp;
                                <a href="?cn=capnhatcv&id_manth=<?php echo $manth; ?>">
                                    <button type="button" name="btnCapNhat" class="btn btn-primary" style="width:45%;">
                                    <img src="images/edit-icon.png">Cập nhật công việc
                                    </button></a> &nbsp;
                            </th>
                        </tr>
                    </table>
                    <table class="table table-hover" width="800px" cellpadding="15px" cellspacing="0px" align='center'>
                        <tr>
                            <th rowspan="2" width="2%">STT</th>
                            <th rowspan="2" width="3%">ID</th>
                            <th rowspan="2" width="15%">Tên công việc</th>
                            <th rowspan="2" width="10%">Giao cho</th>
                            <th colspan="3" width="15%">Thực tế</th>
                            <th rowspan="2" width="15%">Nội dung công việc</th>
                            <th rowspan="2" width="3%">Phụ thuộc</th>
                            <th rowspan="2" width="8%">Tiến độ<br>(%)</th>
                        </tr>
                        <tr>
                            <th>Bắt đầu</th>
                            <th>Kết thúc</th>
                            <th>Số giờ</th>
                        </tr>
                        <?php
                            danhsach_phancv($manth);
                        ?>
                    </table>
                </div>
            </div> <!-- /row -->
        </div> <!-- /container -->
        
    </body>
</html>
