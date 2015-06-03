<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Danh sách công việc</title>
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
    
    <body>
        <div class="container">         
            
            <div class="row">
                <div class="col-lg-12">
                    <h3 style="color: darkblue; font-weight: bold;" align="center">DANH SÁCH CÔNG VIỆC TRONG NHÓM</h3><br>
                </div>          
                <div class="col-lg-12">
                    <table class="table table-bordered" border="0" width="800px" cellpadding="0px" cellspacing="0px" align='center'>
                                <tr>
                                    <th width="2%">ID</th>
                                    <th width="20%">Công việc <br>
                                        <input type="text" value="" class="form-control">
                                    </th>
                                    <th width="14%">Trạng thái <br>
                                        <select name="" class="form-control">
                                            <option value="1">Tất cả</option>
                                            <option value="2">Hoàn thành</option>
                                            <option value="3">Sắp làm</option>
                                            <option value="4">Đang làm</option>
                                        </select>
                                    </th>
                                    <th width="10%">Giao cho</th>
                                    <th width="8%">Bắt đầu <br> (kế hoạch)</th>
                                    <th width="8%">Kết thúc <br> (kế hoạch)</th>
                                    <th width="8%">Bắt đầu <br> (thực tế)</th>
                                    <th width="8%">Kết thúc <br> (thực tế)</th>
                                    <th width="7%">Số giờ <br> (thực tế)</th>
                                    <th>%</th>
                                    <th width="20%">Nội dung công việc</th>
                                </tr>
                                <tr>
                                    <td align="center">1</td>
                                    <td>Phân tích đề tài và thiết kế CSDL</td>
                                    <td>Đang làm</td>
                                    <td>Cả nhóm</td>
                                    <td>02/09/2014</td>
                                    <td>01/10/2014</td>
                                    <td>02/09/2014</td>
                                    <td></td>
                                    <td>4h</td>
                                    <td>10</td>
                                    <td>Phải phân tích cấu trúc lưu CSDL và các chức năng chình cần thực hiện</td>
                                </tr>
                                <tr>
                                    <td align="center">2</td>
                                    <td>Vẽ sơ đồ CDM và thiết kế giao diện</td>
                                    <td>Sắp làm</td>
                                    <td>Trấn Thành, <br> Kim Nguyên</td>
                                    <td>02/10/2014</td>
                                    <td>05/11/2014</td>
                                    <td></td>
                                    <td></td>
                                    <td>8h</td>
                                    <td>0</td>
                                    <td>Thiết kế chi tiết các chức năng theo CSDL đã phân tích, cập nhật lại CDM khi thiết kế</td>
                                </tr>
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
                </div>  <!-- /class="col-lg-12" -->                     
            </div> <!-- /row -->
            
        </div> <!-- /container -->
    </body>
</html>

