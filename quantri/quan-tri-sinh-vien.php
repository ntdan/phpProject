<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Quản trị sinh viên</title>
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
    
include 'chucnang/thongtinsinhvien.php';

$ds_sv = sv_danhsach();

if($ds_sv == null){
    return;
}
    
?>
    
    <body>
        
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <table class="table" width="800px" cellpadding="0px" cellspacing="0px" align='center'>
                        <td><h4 style="color: darkblue; font-weight: bold;">DANH SÁCH SINH VIÊN</h4></td>
                        <td align="right">
                            <a href="?cn=themsinhvien">
                                <button type="button" name="" class="btn btn-primary" style="width: 30%;">
                                    <img src="images/add-icon.png"> Thêm
                                </button>
                            </a>
                        </td>
                    </table>
                    <table class="table table-bordered" width="800px" cellpadding="0px" cellspacing="0px" align='center'>
                        <tr>
                            <th>STT</th>
                            <th>MSSV</th>
                            <th>Họ và tên</th>
                            <th width="15%">Email</th>
                            <th>Người tạo</th> 
                            <th>Ngày tạo</th>
                            <th>Khóa</th>
                            <th width=8%>Chức năng</th>
                        </tr>
                        <?php 
                            $gv = null;
                            while($sv = mysql_fetch_array($ds_sv)){
                               echo "<tr>".
                                        "<td align='center'>1</td>".
                                        "<td align='center'>".$sv['mssv']."</td>".
                                        "<td>".$sv['hoten']."</td>".
                                        "<td>".$sv['email']."</td>".
                                        "<td>".$sv['nguoitao']."</td>".                                        
                                        "<td align='center'>".$sv['ngaytao']."</td>".
                                        "<td align='center'>".
                                            "<a href='#'><img src='images/Unlock.png'></a>".
                                        "</td>".
                                        "<td align='center'>".
                                             "<a href='?cn=capnhatsinhvien'><input type='image' src='images/edit-icon.png' name=''></a>&nbsp;&nbsp;&nbsp;".
                                             "<input type='image' src='images/Document-Delete-icon.png' name=''>". 
                                        "</td>".
                                    "</tr>";
                            }
                        ?>
                        
                    </table>
                    <table class="table" border="0" width="800px" cellpadding="0px" cellspacing="0px" align='center'>
                        <tr>
                            <th>
                                <ul class="pagination">
                                    <li class="disabled">
                                        <a href="#" aria-label="Previous"><span aria-hidden="true">&laquo;</span></a>
                                    </li>
                                    <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">...</a></li>
                                    <li><a href="#">8</a></li>
                                    <li>
                                        <a href="#" aria-label="Next"><span aria-hidden="true">&raquo;</span></a>
                                    </li>
                                </ul>
                            </th>
                        </tr>
                    </table> 
                </div>
            </div>
        </div>
        
    </body>
</html>
