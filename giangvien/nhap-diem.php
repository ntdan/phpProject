<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
    <style type="text/css">
        th{
            vertical-align: middle;
            text-align: center;
            color: darkblue;
            background-color: #dff0d8;
        }
    </style>

<div class="container">
    <div class="row">
    <div class="col-md-12">
        <h3 style="color: darkblue; font-weight: bold;">BẢNG GHI ĐIỂM NIÊN LUẬN</h3>
        <table class="table table-bordered" cellpadding="15px" cellspacing="0px" align='center'>
            <tr>
                <th align='center' width="6%">Năm học:
                    <input type="text" name="" value="2013-2014" style="text-align: center;" class="form-control"/>
                    </th>
                <th align="center" width="3%">Học kỳ:
                    <input style="text-align: center;" type="text" name="" value="1" class="form-control"/>
                </th>
                <th align='center' width="4%">Nhóm HP:
                    <select class="form-control" style="text-align: center;" size="1">
                        <option value="1">01</option>
                        <option value="2">02</option>
                        <option value="3">03</option>
                    </select>
                </th>
                <th align='center' width="6%">Nhóm niên luận:
                    <select class="form-control" size="1" align="center">
                        <option value="NTH01">NTH01</option>
                        <option value="NTH02">NTH02</option>
                        <option value="NTH03">NTH03</option>
                    </select>
                </th>
                <th align='center' width="20%">Đề tài:
                    <select class="form-control" size="1">
                        <option value="1">Website bán quần áo</option>
                        <option value="2">Game cờ caro trên Androi</option>
                        <option value="3">Phần mềm quản lý hóa đơn</option>
                    </select>
                </th>
            </tr>
         </table>
        <form id="" name="" action="" method="post">
            <table class="table table-bordered" cellpadding="15px" cellspacing="0px" align='center'>
                <tr>
                    <th rowspan="2" width="1%">STT</th>                            
                    <th rowspan="2" width="8%">Nhóm niên luận</th>
                    <th rowspan="2" width="8%">MSSV</th>
                    <th rowspan="2" width="20%">Họ và tên</th>
                    <th colspan="4" width="25%">Tiêu chí</th>
                    <th rowspan="2" width="4%">Tổng điểm</th>
                    <th rowspan="2" width="4%">Điểm chữ</th>                         
                </tr>
                <tr>
                    <th width='2%'>4</th>
                    <th width='2%'>2</th>
                    <th width='2%'>3</th>
                    <th width='2%'>1</th>
                </tr>
                <tr>
                    <td align='center'>1</td>
                    <td align='center'>NTH01</td>
                    <td align='center'>1234567</td>
                    <td>Hoàng thành</td>
                    <td align='center'><input type="text" size="1" align="center" value="3"></td>
                    <td align='center'><input type="text" size="1" align="center" value="1.5"></td>
                    <td align='center'><input type="text" size="1" align="center" value="2"></td>
                    <td align='center'><input type="text" size="1" align="center" value="0.5"></td>
                    <td align='center'>8.0</td>
                    <td align='center'>B+</td>
                </tr>
                <tr>
                    <td align='center'>2</td>
                    <td align='center'>NTH01</td>
                    <td align='center'>1324568</td>
                    <td>Phan Long</td>
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

