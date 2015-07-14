<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Danh sách đề tài</title>
        <!-- Bootstrap -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link type="text/css" rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
        <link type="text/css" rel="stylesheet" href="../bootstrap/css/bootstrap-datetimepicker.min.css">
        <script src="../bootstrap/js/jquery-1.11.3.min.js"></script>
        <script src="../bootstrap/js/bootstrap.js"></script>
        
        <style type="text/css">
            th{
                text-align: center;
                color: darkblue;
                background-color: #dff0d8;
                vertical-align: middle;
            }
        </style>
    </head>

    

    <?php
        include_once 'chucnang/gv_detai.php';
        
        if(isset($_GET['id'])){
            if(isset($_GET['d'])){
                $duyet = $_GET['d'] == 0 ? 1 : 0; 
                capnhat_duyet($_GET['id'], $duyet);
            }
        }
        $macb = '2134';
        $dt = dt_xem($macb);
        if($dt == null){
            return;
        }
    ?>

    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3 style="color: darkblue; font-weight: bold; margin-left: 20px;">Danh sách các đề tài</h3> 
                    <div class="bg-success">
                        <table class="table table-bordered" cellpadding="15px" cellspacing="10px">
                            <tr>                            
                                <td align="right">Giảng viên:</td>
                                <td colspan="5" style="color: darkblue; font-weight: bold;"><?php echo $dt['hoten']; ?></td>
                            </tr>
                            <tr>
                                <td align="right">Năm học:</td>
                                <td>
                                    <select class="form-control" name="cbmNamHoc">
                                        <option value="1"><?php echo $dt['nam']; ?></option>
                                    </select>
                                </td>
                                <td align="right">Học kỳ:</td>
                                <td>
                                    <select class="form-control">
                                        <option value="1"><?php echo $dt['hocky']; ?></option>
                                    </select>
                                </td>
                                <td align="right">Nhóm học phần:</td>
                                <td>
                                    <select class="form-control">
                                        <option value="1"><?php echo $dt['tennhomhp']; ?></option>
                                    </select>
                                </td>
                                <td align="right">Trạng thái:</td>
                                <td>
                                    <select class="form-control">
                                        <option value="1">Tất cả</option>
                                        <option value="2">
                                            <?php 
                                                echo $dt['trangthai']; 
                                             ?>
                                        </option>
                                    </select>
                                </td>
                                <td>
                                    <a href="?cn=themdt">
                                        <button type="button" name="" class="btn btn-primary">
                                        <img src="images/add-icon.png">Thêm đề tài
                                    </button></a>
                                </td>
                            </tr>
                        </table> 
                    </div> <!-- /bg-success -->

                    <table class="table table-bordered table-hover" width="800px" cellpadding="15px" cellspacing="0px" align='center'>
                        <tr>
                            <th width="2%">STT</th>
                            <th width="20%">Tên đề tài</th>
                            <th width="15%">Mô tả đề tài</th>
                            <th width="15%">Công nghệ</th>
                            <th width="5%">Tối đa</th>
                            <th width="15%">Lưu ý</th>
                            <th width="8%">Phân loại</th>
                            <th width="4%">Duyệt</th>
                            <th width="8%">Thao tác</th>
                        </tr>
                        <?php dt_danhsach(); ?>
                    </table>
                </div>
            </div><!-- /row -->
        </div> <!-- /container -->
    </body>
</html>
