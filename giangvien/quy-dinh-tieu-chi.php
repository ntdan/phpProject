<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Nhập tiêu chí đánh giá</title>
        <!-- Bootstrap -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link type="text/css" rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
        <link type="text/css" rel="stylesheet" href="../bootstrap/css/bootstrap-datetimepicker.min.css">
        <script src="../bootstrap/js/jquery-1.11.3.min.js"></script>
        <script src="../bootstrap/js/bootstrap.js"></script>
    </head>
    
    <style type="text/css">
        th{
            text-align: center;
            background-color: #dff0d8;
        }
    </style>
    
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4 style="display:block; float:left; color:blue; font-weight: bold;">BẢNG TIÊU CHÍ ĐÁNH GIÁ KẾT QUẢ CỦA SINH VIÊN</h4>
                    <a href="?cn=" style="margin-left: 50%;">
                        <button type="button" name="" class="btn btn-primary" style="width: 10%;">
                            <img src="images/add-icon.png"> Thêm
                        </button>
                    </a><br>
                    <table class="table table-bordered" cellpadding="15px" cellspacing="0px" align='center'>
                        <tr>
                            <th>STT</th>
                            <th>Nội dung đánh giá</th>
                            <th>Mức điểm</th>
                            <th>Thao tác</th>
                        </tr>
                        <tr>
                            <td align="center">1</td>
                            <td>Đánh giá về sự hoàn thành của dự án</td>
                            <td align='center'>4</td>
                            <td align="center">                         
                                <a href="?cn=suadetai"><input type="image" src="images/edit-icon.png" name=""></a>&nbsp;
                                <input type="image" src="images/Document-Delete-icon.png" name=""> 
                            </td>
                        </tr>
                        <tr>
                            <td align="center">2</td>
                            <td>Kỹ năng làm việc nhóm</td>
                            <td align='center'>2</td>
                            <td align="center">                         
                                <a href="?cn=suadetai"><input type="image" src="images/edit-icon.png" name=""></a>&nbsp;
                                <input type="image" src="images/Document-Delete-icon.png" name=""> 
                            </td>
                        </tr>
                    </table>
                </div> 
           </div> <!-- /row -->
        </div> <!-- /container -->       
    </body>
</html>
