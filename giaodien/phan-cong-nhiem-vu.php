<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Phân công nhiệm vụ</title>
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
                <div class="col-lg-12">
                    <h3 style="color: darkblue; font-weight: bold;">Kế hoạch thực hiện đề tài</h3> 
                    <table class="table" width="800px" cellpadding="0px" cellspacing="0px" id="bang1">
                        <tr>
                            <th width="10%">Tên đề tài:</th>
                            <th width="45%">
                                <input type="text" name="" value="Website bán đồ nội thất" readonly="" class="form-control">
                            </th>
                            <th width="30%">
                                <a href="?cn=themcv">
                                    <button type="button" name="" class="btn btn-primary">
                                    <img src="images/add-icon.png">Thêm công việc
                                    </button></a> &nbsp;
                                <a href="?cn=capnhatcv">
                                    <button type="button" name="" class="btn btn-primary">
                                    <img src="images/edit-icon.png">Cập nhật công việc
                                    </button></a> &nbsp;
                            </th>
                            <th>                                
                                <a href="#">
                                    <button type="button" name="" class="btn btn-primary">
                                    <img src="images/delete-icon.png">Hủy công việc
                                </button></a>
                            </th>
                        </tr>
                    </table>
                    <table class="table table-hover" width="800px" cellpadding="15px" cellspacing="0px" align='center'>
                        <tr>
                            <th rowspan="2" width="2%">ID</th>
                            <th rowspan="2" width="20%">Tên công việc</th>
                            <th rowspan="2" width="20%">Giao cho</th>
                            <th colspan="2" width="10%">Kế hoạch</th>
                            <th rowspan="2" width="20%">Nội dung công việc</th>
                            <th rowspan="2" width="8%">Tiến độ<br>(%)</th>
                            <th colspan="6" width="15%">Tháng 1</th>  
                            <th colspan="7" width="15%">Tháng 2</th>
                        </tr>
                        <tr>
                            <th>Bắt đầu</th>
                            <th>Kết thúc</th>
                            <th></th>
                            <th>26</th>
                            <th>27</th>
                            <th>28</th>
                            <th>29</th>
                            <th>30</th>
                            <th>31</th>                            
                            <th>20</th>
                            <th>21</th>
                            <th>22</th>
                            <th>23</th>
                            <th>24</th>
                            <th>25</th>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Phân tích yêu cầu</td>
                            <td>Kim Nguyên</td>
                            <td>02/01/2015</td>
                            <td>28/02/2015</td>
                            <td>Phải phân tích cấu trúc lưu CSDL và các chức năng chình cần thực hiện</td>
                            <td>
                                <div class="progress">  
                                    <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:70%">  
                                        70% Complete  
                                    </div>  
                                </div>  
                            </td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Đặc tả yêu cầu</td>
                            <td>Trung Thành</td>
                            <td>02/02/2015</td>
                            <td>30/03/2015</td>
                            <td>Thiết kế chi tiết các chức năng theo CSDL đã phân tích, cập nhật lại CDM khi thiết kế</td>
                            <td>
                                <div class="progress">  
                                    <div class="progress-bar" role="progressbar" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100" style="width:35%">  
                                        35% Complete  
                                    </div>  
                                </div>  
                            </td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    </table>
                </div>
            </div> <!-- /row -->
        </div> <!-- /container -->
        
    </body>
</html>
