<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Theo dõi kế hoạch thực hiện đề tài</title>
                <!-- Bootstrap -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link type="text/css" rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
        <script src="../bootstrap/js/bootstrap.js"></script>
    </head>
    
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
    
    <body>
        
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3 style="color: darkblue; font-weight: bold;">Theo dõi kế hoạch thực hiện đề tài</h3> 
                    <table class="table table-bordered" cellpadding="15px" cellspacing="0px" align='center'>
                        <tr>
                            <th align='right' width="8%">Năm học: &nbsp;</th>
                            <th width="13%">
                                <select class="form-control" size="1">
                                    <option value="1">2014-2015</option>
                                    <option value="2">2015-2016</option>
                                    <option value="3">2016-2017</option>
                                </select>
                            </th>
                            <th align="right" valign="middle" width="6%">Học kỳ: &nbsp;</th>
                            <th width="8%">
                                <select class="form-control">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">Hè</option>
                                </select>
                            </th>
                            <th align='right' width="12%">Nhóm học phần:</th>
                            <th width="8%">
                                <select class="form-control">
                                    <option value="1">01</option>
                                    <option value="2">02</option>
                                    <option value="3">03</option>
                                </select>
                            </th>
                            <th></th>
                        </tr>
                    </table>
                    <table class="table table-bordered table-hover" width="800px" cellpadding="15px" cellspacing="0px" align='center'>
                        <tr>
                            <th width="2%">ID</th>
                            <th width="25%">Tên đề tài</th>
                            <th width="8%">Trưởng nhóm</th>
                            <th width="10%">Thành viên khác</th>
                            <th width="8%">Lịch họp nhóm</th>
                            <th width="10%">Trạng thái(%)</th>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td><a href="?cn=chitietkehoach">Game pikachu trên Androi</a></td>
                            <td>Kim Nguyên</td>
                            <td>Hoàng Thành</td>
                            <td>Chiều thứ hai</td>
                            <td>
                                <div class="progress">  
                                    <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:70%">  
                                        70% Complete  
                                    </div>  
                                </div>  
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td><a href="?cn=chitietkehoach">Website quản lý hàng hóa ở siêu thị</a></td>
                            <td>Trung Thành</td>
                            <td>Phan Anh, Mai Vàng</td>
                            <td>Sáng thứ ba</td>
                            <td>
                                <div class="progress">  
                                    <div class="progress-bar" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:40%">  
                                        40% Complete  
                                    </div>  
                                </div>  
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
