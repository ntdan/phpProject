<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Chọn đề tài</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link type="text/css" rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
        <script src="../public/js/login-bootstrap.js"></script>
        <script src="../bootstrap/js/jquery-1.11.3.min.js"></script>
        <script src="../bootstrap/js/bootstrap.min.js"></script> 
        
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
            include_once '../chucnang/sv_dschondetai.php';
            
            $macb = 
            $thongtindt = ds_chondetai($macb);
    ?>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <table class="table table-bordered table-hover" style="margin-top: 5%;">
                        <tr>
                            <th>STT</th>
                            <th>Tên đề tài</th>
                            <th>Số người tối đa</th>
                            <th>Môt tả</th>
                            <th>Công nghệ sử dụng</th>
                            <th>Trạng thái</th>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>        
    </body>
</html>
