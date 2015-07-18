<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Xem điểm</title>
        <!-- Bootstrap -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link type="text/css" rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
        <link type="text/css" rel="stylesheet" href="../bootstrap/css/bootstrap-datetimepicker.min.css">
        <script src="../bootstrap/js/jquery-1.11.3.min.js"></script>
        <script src="../bootstrap/js/bootstrap.js"></script>
    </head>
    
    <style type="text/css">
        th{
            vertical-align: middle;
            text-align: center;
            color: darkblue;
            background-color: #dff0d8;
        }
    </style>
    
    <body>
        <div class="container">
            <div class="row">
            <div class="col-md-12">
                <h3 style="color: darkblue; font-weight: bold; text-align: center;">XEM ĐIỂM NIÊN LUẬN</h3>
                <table class="table" cellpadding="15px" cellspacing="0px" align='center'>
                    <tr>
                        <th align='right' width="8%">Năm học: &nbsp;</th>
                        <th width="12%">
                            <select class="form-control" size="1">
                                <option value="1">2014-2015</option>
                                <option value="2">2015-2016</option>
                                <option value="3">2016-2017</option>
                            </select>
                        </th>
                        <th align="right" valign="middle" width="8%">Học kỳ: &nbsp;</th>
                        <th width="8%">
                            <select class="form-control" size="1">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">hè</option>
                            </select>
                        </th>
                        <th align='right' width="12%">Nhóm học phần:</th>
                        <th width="6%">
                            <input type="text" value="02" class="form-control">  
                        </th>
                        <th align='right' width="6%">Đề tài:</th>
                        <th>
                            <input type="text" value="Website bán quần áo" class="form-control">                            
                        </th>
                    </tr>
                 </table>
           
                <table class="table table-bordered" cellpadding="15px" cellspacing="0px" align='center'>
                    <tr>
                        <th rowspan="2">STT</th>
                        <th rowspan="2">MSSV</th>
                        <th rowspan="2">Họ và tên</th>
                        <th rowspan="2">Nhóm</th>
                        <th colspan="4">Tiêu chí</th>
                        <th rowspan="2">Tổng điểm</th>
                        <th rowspan="2">Điểm chữ</th>                         
                    </tr>
                    <tr>
                        <th>4</th>
                        <th>2</th>
                        <th>3</th>
                        <th>1</th>
                    </tr>
                    <tr>
                        <td align='center'>1</td>
                        <td align='center'>1234567</td>
                        <td>Hoàng thành</td>
                        <td align='center'>1</td>
                        <td align='center'>3</td>
                        <td align='center'>1.5</td>
                        <td align='center'>2</td>
                        <td align='center'>0.5</td>
                        <td align='center'>8.0</td>
                        <td align='center'>B+</td>
                    </tr>
                    <tr>
                        <td align='center'>2</td>
                        <td align='center'>1324568</td>
                        <td>Phan Long</td>
                        <td align='center'>1</td>
                        <td align='center'>3.5</td>
                        <td align='center'>2</td>
                        <td align='center'>2.5</td>
                        <td align='center'>0.5</td>
                        <td align='center'>9.5</td>
                        <td align='center'>A</td>
                    </tr>
                </table>
             
                <table class="table" cellpadding="15px" cellspacing="0px" align='center'>
                    <tr>                        
                        <td align="right"><input type="button" value="In bảng điểm" class="btn btn-primary"></td>                        
                    </tr>
                </table>
            </div>
            </div> <!-- /row -->
        </div> <!-- /container -->
    </body>
</html>
