<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Nhập điểm</title>
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
                <table class="table table-bordered" cellpadding="15px" cellspacing="0px" align='center'>
                    <tr><td colspan="8" align='center'>
                            <h3 style="color: darkblue; font-weight: bold;">BẢNG GHI ĐIỂM NIÊN LUẬN</h3>
                        </td>
                    </tr>
                    <tr>
                        <td align='right'>Năm học: &nbsp;</td>
                        <td>
                            <select class="form-control" size="1">
                                <option value="1">2014-2015</option>
                                <option value="2">2015-2016</option>
                                <option value="3">2016-2017</option>
                            </select>
                        </td>
                        <td align="right" valign="middle">Học kỳ: &nbsp;</td>
                        <td>
                            <select class="form-control" size="1">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">hè</option>
                            </select>
                        </td>
                        <td align='right'>Nhóm học phần:</td>
                        <td>
                            <select class="form-control" size="1">
                                <option value="1">01</option>
                                <option value="2">02</option>
                                <option value="3">03</option>
                            </select>
                        </td>
                        <td align='right'>Đề tài:</td>
                        <td>
                            <select class="form-control" size="1">
                                <option value="1">Website bán quần áo</option>
                                <option value="2">Game cờ caro trên Androi</option>
                                <option value="3">Phần mềm quản lý hóa đơn</option>
                            </select>
                        </td>
                    </tr>
                 </table>
                <form id="" name="" action="" method="post">
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
                            <td align='center'><input type="text" size="1" align="center" value="3"></td>
                            <td align='center'><input type="text" size="1" align="center" value="1.5"></td>
                            <td align='center'><input type="text" size="1" align="center" value="2"></td>
                            <td align='center'><input type="text" size="1" align="center" value="0.5"></td>
                            <td align='center'>8.0</td>
                            <td align='center'>B+</td>
                        </tr>
                        <tr>
                            <td align='center'>2</td>
                            <td align='center'>1324568</td>
                            <td>Phan Long</td>
                            <td align='center'>1</td>
                            <td align='center'><input type="text" size="1" align="center" value="3.5"></td>
                            <td align='center'><input type="text" size="1" align="center" value="2"></td>
                            <td align='center'><input type="text" size="1" align="center" value="2.5"></td>
                            <td align='center'><input type="text" size="1" align="center" value="0.5"></td>
                            <td align='center'>9.5</td>
                            <td align='center'>A</td>
                        </tr>
                    </table>

                    <table class="table" cellpadding="15px" cellspacing="0px" align='center'>
                        <tr>
                            <td align="right">
                                <button type="button" name="" class="btn btn-info" style="width: 50%;">
                                    <img src="images/excel-icon.png"> Nhập từ Exel...
                                </button> 
                            </td>
                            <td>
                                <button type="button" name="" class="btn btn-success" style="width: 50%;">
                                    <img src="images/printer-icon.png"> In bảng điểm
                                </button>
                            </td>
                            <td align="right">
                                <button type="submit" name="btnLuu" class="btn btn-primary" style="width: 55%;">
                                    <img src="images/save-as-icon.png"> Lưu dữ liệu
                                </button>                            
                            </td>
                            <td>
                                <button type="button" name="" class="btn btn-primary" style="width: 60%;">
                                    <img src="images/calculator.png"> Tính ĐTB
                                </button>
                            </td>
                        </tr>
                    </table>
                </form>               
            </div>
            </div> <!-- /row -->
        </div> <!-- /container -->
    </body>
</html>
