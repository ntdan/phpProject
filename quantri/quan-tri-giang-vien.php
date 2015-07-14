<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Quản trị giảng viên</title>
        <!-- Bootstrap -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link type="text/css" rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="../bootstrap/css/signin.css">
        <script type="text/javascript" src="../scripts/ckeditor/ckeditor.js"></script>
        <script src="../bootstrap/js/bootstrap.js"></script>
    </head>
    
     <style type="text/css">
        th{
            text-align: center;
            color: darkblue;
            background-color: #dff0d8;
        }
    </style>
    
<?php
    
    include 'chucnang/thongtingiangvien.php';

    $ds_gv = gv_danhsach();

    if($ds_gv == null){
        return;
    }
    
?>
    
    <body>
        
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <table class="table" width="800px" cellpadding="0px" cellspacing="0px" align='center'>
                        <td><h4 style="color: darkblue; font-weight: bold;">DANH SÁCH GIẢNG VIÊN</h4></td>
                        <td align="right">
                            <a href="?cn=themgiangvien">
                                <button type="button" name="" class="btn btn-primary" style="width: 30%;">
                                    <img src="images/add-icon.png"> Thêm
                                </button>
                            </a>
                        </td>
                    </table>
                    <table class="table table-bordered" width="800px" cellpadding="0px" cellspacing="0px" align='center'>
                        <tr>
                            <th>STT</th>
                            <th>Mã cán bộ</th>
                            <th>Họ và tên</th>
                            <th>Email</th>
                            <th>Người tạo</th> 
                            <th>Ngày tạo</th>
                            <th>Khóa</th>
                            <th width=8%>Chức năng</th>
                        </tr>
                        <?php 
                            $gv = null;
                            while($gv = mysql_fetch_array($ds_gv)){
                               echo "<tr>".
                                        "<td align='center'>1</td>".
                                        "<td>".$gv['macb']."</td>".
                                        "<td>".$gv['hoten']."</td>".
                                        "<td>".$gv['email']."</td>".
                                        "<td>".$gv['nguoitao']."</td>".                                        
                                        "<td>".$gv['ngaytao']."</td>".
                                        "<td align='center'>".
                                            "<a href='#'><img src='images/Unlock.png'></a>".
                                        "</td>".
                                       "<td align='center'>".
                                             "<a href='?cn=capnhatgiangvien'><input type='image' src='images/edit-icon.png' name=''></a>&nbsp;&nbsp;&nbsp;".
                                             "<input type='image' src='images/Document-Delete-icon.png' name=''>". 
                                        "</td>".
                                    "</tr>";
                            }
                        ?>
                        
                    </table>
                </div>
            </div>
        </div>
        
    </body>
</html>
