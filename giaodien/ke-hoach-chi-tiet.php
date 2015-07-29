<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
        <!-- Bootstrap -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link type="text/css" rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
        <script src="../bootstrap/js/bootstrap.min.js"></script>
        <script src="../bootstrap/js/jquery-1.11.3.min.js"></script>
        <script type="text/javascript" src="../scripts/ckeditor/ckeditor.js"></script>

        <style type="text/css">
            th{
                text-align: center;
                color: darkblue;
                background-color: #dff0d8;
            }
        </style>
    </head>
    <body>
        <script src="scripts/Highcharts-4.1.7/js/highcharts.js"></script>
        <script src="scripts/Highcharts-4.1.7/js/modules/data.js"></script>
        <script src="scripts/Highcharts-4.1.7/js/modules/drilldown.js"></script>              

        <div class="container">
            <div class="row">
                <h3 style="color: darkblue;font-weight: bold; margin-left: 2%">KẾ HOẠCH CHI TIẾT</h3>
                <div class="col-md-6">
                    <table class="table table-hover" width="500px" cellpadding="15px" cellspacing="0px" align='center'>
                        <tr>
                            <th width="2%">STT</th>
                            <th width="10%">Nhóm niên luận</th>
                            <th width="20%">Danh sách thành viên</th>
                            <th width="5%">Trưởng nhóm</th>
                        </tr>
                        <tr>
                            <td align='center'></td>
                            <td></td>
                            <td></td>
                            <td align='center'></td>
                            </tr>
                    </table>
                </div>
                <div class="col-md-6">
                    <div id="container" style="min-width: 310px; max-width: 600px; height: 400px; margin: 0 auto"></div>                        
                </div>

                <!-- Danh sách chi tiết các công việc -->      
               <div class="col-md-12">
                    <h4 style='color: #c7254e;'><img src='../images/box-icon1.png'/>Phân tích yêu cầu</h4>
                    <div class="progress" style='width:50%;'> 
                          <div class="progress-bar" role="progressbar" aria-valuenow='40' aria-valuemin='0' aria-valuemax='100' style='width:40%'>  
                                  40% Complete 
                          </div>  
                    </div>
                    <table class="table table-hover" width='800px' cellpadding='15px' cellspacing='0px' align='center'>
                          <tr>
                              <th rowspan='2' width='2%'>ID</th>
                              <th rowspan='2' width='15%'>Giao cho</th>
                              <th colspan='3' width='20%'>Thực tế</th>
                              <th rowspan='2' width='20%'>Chi tiết công việc</th>
                          </tr>
                          <tr>
                             <th>Bắt đầu</th>
                             <th>Kết thúc</th>
                             <th>Số giờ</th>
                          </tr>
                          <tr>
                             <td>1</td>
                             <td></td>
                             <td></td>
                             <td></td>                          
                             <td></td>
                             <td></td>
                          </tr>
                    </table>  
                </div>
                <div class="col-md-12" style="margin-left: 60px; width: 1110px;">                    
                    <table class="table table-hover" width='600px' cellpadding='15px' cellspacing='0px' align='center'>
                          <tr>
                              <th rowspan='2' width='2%'>ID</th>
                              <th rowspan='2' width='15%'>Giao cho</th>
                              <th colspan='3' width='20%'>Thực tế</th>
                              <th rowspan='2' width='20%'>Chi tiết công việc</th>
                              <th rowspan='2' width='8%'>Tiến độ</th>
                          </tr>
                          <tr>
                             <th>Bắt đầu</th>
                             <th>Kết thúc</th>
                             <th>Số giờ</th>
                          </tr>
                          <tr>
                             <td>1.1</td>
                             <td></td>
                             <td></td>
                             <td></td>                          
                             <td></td>
                             <td></td>
                             <td>
                                 <div class="progress">
                                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100" style="width: 10%;">
                                      10%
                                    </div>
                                </div>
                             </td>
                          </tr>
                          <tr>
                             <td>1.2</td>
                             <td></td>
                             <td></td>
                             <td></td>                          
                             <td></td>
                             <td></td>
                             <td>
                                 <div class="progress">
                                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100" style="width: 10%;">
                                      10%
                                    </div>
                                </div>
                             </td>
                          </tr>
                    </table>  
                </div>
            </div>
        </div>
    </body>
</html>
