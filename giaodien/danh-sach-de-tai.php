<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Danh sách đề tài</title>
        <!-- Bootstrap -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link type="text/css" rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
        <link type="text/css" rel="stylesheet" href="../bootstrap/css/bootstrap-datetimepicker.min.css">
<!--    <script src="../bootstrap/js/bootstrap-datetimepicker.min.js"></script>-->
        <script src="../bootstrap/js/jquery-1.11.3.min.js"></script>
        <script src="../bootstrap/js/bootstrap.js"></script>
    </head>

    <style type="text/css">
        th{
            text-align: center;
            color: darkblue;
            background-color: #dff0d8;
            vertical-align: middle;
        }
    </style>

</script>

<body>

    <div class="container">
        <div class="row">
            <h3 style="color: darkblue; font-weight: bold; margin-left: 20px;">Danh sách các đề tài</h3> 
            <div class="col-md-12">
                <div class="bg-success">
                    <table class="table table-bordered" cellpadding="15px" cellspacing="10px">
                        <tr>                            
                            <td align="right">Giảng viên:</td>
                            <td colspan="5" style="color: darkblue; font-weight: bold;">Trấn Thành</td>
                        </tr>
                        <tr>
                            <td align="right">Năm học:</td>
                            <td>
                                <select class="form-control">
                                    <option value="1">2014-2015</option>
                                    <option value="2">2015-2016</option>
                                    <option value="3">2016-2017</option>
                                </select>
                            </td>
                            <td align="right">Học kỳ:</td>
                            <td>
                                <select class="form-control">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">Hè</option>
                                </select>
                            </td>
                            <td align="right">Nhóm học phần:</td>
                            <td>
                                <select class="form-control">
                                    <option value="1">01</option>
                                    <option value="2">02</option>
                                    <option value="3">03</option>
                                </select>
                            </td>
                            <td align="right">Phân loại đề tài:</td>
                            <td>
                                <select class="form-control">
                                    <option value="1">Tất cả</option>
                                    <option value="2">Đang thực hiện</option>
                                    <option value="3">Chưa thực hiện</option>
                                    <option value="3">Được đề xuất</option>
                                    <option value="3">Đã hoàn thành</option>
                                </select>
                            </td>
                            <td>
                                <a href="?cn=themdt">
                                    <button type="button" name="" class="btn btn-primary">
                                    <img src="images/add-icon.png">Thêm đề tài
                                </button></a>
                            </td>
                        </tr>
                    </table> 
                </div> <!-- /bg-success -->

                <table class="table table-bordered table-hover" width="800px" cellpadding="15px" cellspacing="0px" align='center'>
                    <tr>
                        <th width="20%">Tên đề tài</th>
                        <th width="20%">Mô tả đề tài</th>
                        <th width="15%">Công nghệ</th>
                        <th width="5%">Tối đa</th>
                        <th width="20%">Lưu ý</th>
                        <th width="10%">Phân loại</th>
                        <th width="4%">Duyệt</th>
                        <th width="6%">Thao tác</th>
                    </tr>
                    <tr>
                        <td style="font-weight: bold;">
                            <a href="#">Website bán đồ nội thất</a>
                        </td>
                        <td>Thiết kế một website cho phép người dùng xem, 
                            tìm kiếm, đặt mua các vật dụng gia đình như bàn, ghế,tủ,...
                        </td> 
                        <td>Thực hiện bằng framework bootstrap</td>
                        <td align="center">2</td>
                        <td>Phải thực hiện được chức năng đặt hàng trực tuyến,
                            trang giới thiệu phải thật sinh động, đẹp mắt.
                        </td>
                        <td>Được đề xuất</td>
                        <td align="center"><a href="#"><img src="images/check.png"></a></td>
                        <td align="center">                         
                            <a href="giaodien/sua-de-tai.php"><input type="image" src="images/edit-icon.png" name=""></a>&nbsp;
                            <input type="image" src="images/Document-Delete-icon.png" name=""> 
                        </td>
                    </tr>
                    <tr>
                        <td style="font-weight: bold;">
                            <a href="#">Phần mềm quản lý nghiên cứu khoa học</a>
                        </td>
                        <td>- Đầy đủ tính năng của một quy trình quản lý đề tài: từ đề xuất, giải trình thông tin, xét duyệt đến quá trình nghiệm thu.<br>
                            - Quản lý thông tin lý lịch khoa học cán bộ nghiên cứu một cách chi tiết.<br>
                            - Tìm kiếm thông tin nhanh gọnchính xác, hỗ trợ lập báo cáo nhanh theo yêu cầu lãnh đạo<br>
                            - Hỗ trợ in ấn, báo cáo cácmẫu biểu theo đúng mẫu biểu hiện hành được sử dụng.<br>
                            - Phân quyền, phân cấp tớitừng chức năng của chương trình.
                        </td> 
                        <td>- Sử dụng Công nghệ Dotnet: ngôn ngữlập trình C#, Net FrameWork 2.0<br>
                            - RDBMS: MS SQL Server 2000 trở lên                            
                        </td>
                        <td align="center">3</td>
                        <td>- Quản lý cơ sở dữ liệu tập trung <br>                            
                            - Thiết kế theo mô hình khách– chủ, dữ liệu sẽ được xử lý nhanh hơn
                        </td>
                        <td>Được đề xuất</td>
                        <td align="center"><a href="#"><img src="images/uncheck.png"></a></td>
                        <td align="center">                            
                            <a href="giaodien/sua-de-tai.php"><input type="image" src="images/edit-icon.png" name=""></a>&nbsp;
                            <input type="image" src="images/Document-Delete-icon.png" name=""> 
                        </td>
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
            </div>
        </div><!-- /row -->

    </div> <!-- /container -->

</body>
</html>
