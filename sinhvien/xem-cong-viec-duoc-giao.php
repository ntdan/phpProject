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
    
    <body>
        <div class="container">         
            
            <div class="row">
                <div class="col-md-12">
                    <h3 style="color: darkblue; font-weight: bold;" align="center">THÔNG TIN CÔNG VIỆC</h3><br>
                </div>          
                <div class="col-md-12">
                            <table class="table table-bordered" border="0" width="1000px" cellpadding="0px" cellspacing="0px" align='center' id="bang1">
                                <tr>
                                    <th width="4%">STT</th>
                                    <th width="20%">Công việc <br>
                                        <input type="text" value="" class="form-control">
                                    </th>
                                    <th width="10%">Trạng thái <br>
                                        <select name="" class="form-control">
                                            <option value="1">Tất cả</option>
                                            <option value="2">Hoàn thành</option>
                                            <option value="3">Sắp làm</option>
                                            <option value="4">Đang làm</option>
                                        </select>
                                    </th>
                                    <th width="10%">Ngày bắt đầu</th>
                                    <th width="14%">Hạn hoàn tất <br>
                                        <input type="text" value="" class="form-control">
                                    </th>
                                    <th width="14%">Độ ưu tiên <br>
                                        <select name="" class="form-control">
                                            <option value="1">Thấp</option>
                                            <option value="2">Bình thường</option>
                                            <option value="3">Cao</option>
                                        </select>
                                    </th>
                                    <th width="10%">Giao cho</th>
                                    <th width="20%">Nội dung</th>
                                    <th>%</th>
                                </tr>
                                <tr>
                                    <td align="center">1</td>
                                    <td>Phân tích đề tài và thiết kế CSDL</td>
                                    <td>Đang làm</td>
                                    <td>02/09/2014</td>
                                    <td>01/10/2014</td>
                                    <td>Cao</td>
                                    <td>Cả nhóm</td>
                                    <td>Phải phân tích cấu trúc lưu CSDL và các chức năng chình cần thực hiện</td>
                                    <td>10</td>
                                </tr>
                                <tr>
                                    <td align="center">2</td>
                                    <td>Vẽ sơ đồ CDM và thiết kế giao diện</td>
                                    <td>Sắp làm</td>
                                    <td>02/10/2014</td>
                                    <td>05/11/2014</td>
                                    <td>Cao</td>
                                    <td>Trấn Thành, <br>
                                        Kim Nguyên
                                    </td>
                                    <td></td>
                                    <td>10</td>
                                </tr>
                            </table>
                </div>  <!-- /class="col-md-12" -->                     
            </div> <!-- /row -->
            
        </div> <!-- /container -->
    </body>
</html>

