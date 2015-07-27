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

    <body>
        
        <div class="container">
            <div class="row">
                <div class="col-md-12">                    
<!-- Cập nhật chi tiết công sức làm dự án của mỗi thành viên -->
                    <h4 style="color: darkblue; font-weight: bold;">CHI TIẾT PHÂN CÔNG CHO MỖI THÀNH VIÊN</h4>
                    <table class="table table-hover" width="800px" cellpadding="15px" cellspacing="0px" align='center'>
                        <tr>
                            <th rowspan="2" width="2%">ID</th>
                            <th rowspan="2" width="15%">Giao cho</th>
                            <th colspan="3" width="20%">Thực tế</th>
                            <th rowspan="2" width="20%">Chi tiết công việc</th>
                            <th rowspan="2" width="5%">Thao tác</th>
                        </tr>
                        <tr>
                            <th>Bắt đầu</th>
                            <th>Kết thúc</th>
                            <th>Số giờ</th>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Kim Nguyên</td>
                            <td>02/01/2015</td>
                            <td>28/02/2015</td>                            
                            <td>5</td>
                            <td>Phải phân tích cấu trúc lưu CSDL, xác định các thực thể cần lưu</td>
                            <td align='center'>
                                <a href='?cn=chitietphancong'><img src='images/edit-icon.png' /></a>&nbsp;&nbsp;&nbsp;
                                <a href='?cn=phancongcv'><img src='images/Document-Delete-icon.png'/></a>
                            </td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Thành Long</td>
                            <td>02/02/2015</td>
                            <td>30/03/2015</td>                            
                            <td>6</td>
                            <td>Dựa vào các thực thể đã phân tích để vẽ sơ đồ CDM và sơ đồ usecase</td>
                            <td align='center'>
                                <a href='?cn=chitietphancong'><img src='images/edit-icon.png' /></a>&nbsp;&nbsp;&nbsp;
                                <a href='?cn=phancongcv'><img src='images/Document-Delete-icon.png'/></a>
                            </td>
                        </tr>
                    </table>
                    <div class="col-md-12" align="center">
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
                    </div>
                </div>
            </div> <!-- /row -->
        </div> <!-- /container -->
        
    </body>
</html>
