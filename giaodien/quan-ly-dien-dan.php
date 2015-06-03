<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Quản lý gửi ý kiến</title>
        <!-- Bootstrap -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link type="text/css" rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="../bootstrap/css/signin.css">
        <script src="../bootstrap/js/bootstrap.js"></script>
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
            <h3 style="color: darkgreen; font-weight: bold;">DANH SÁCH CHỦ ĐỀ THẢO LUẬN</h3>
            <div class="row">
                <div class="col-lg-12">
                    <table class="table table-bordered" border="1" width="800px" cellpadding="0px" cellspacing="0px" align='center'>
                        <tr>
                            <td>
                                <select class="form-control">
                                    <option value="1">Đã duyệt</option>
                                    <option value="2">Chưa duyệt</option>
                                </select>
                            </td>
                            <td>
                                <select class="form-control">
                                    <option value="1">S.xếp: Ngày tạo</option>
                                    <option value="2">S.xếp: Ngày gửi</option>
                                </select>
                            </td>
                            <td>
                                <select class="form-control">
                                    <option value="1">Giảm dần</option>
                                    <option value="2">Tăng dần</option>
                                </select>
                            </td>
                            <td>
                                <input type="text" value="" class="form-control">                                
                            </td>
                            <td>
                                <input type="button" value="Hiển thị" class="btn btn-primary">
                            </td>
                        </tr>
                    </table> 
                    <table class="table" width="800px" cellpadding="0px" cellspacing="0px" align='center'>
                            <tr>
                                <th>Ý kiến-hỏi đáp</th>
                                <th>Chủ đề</th>
                                <th>Ngày gửi</th>
                                <th>Duyệt</th>
                                <th></th>
                            </tr>
                            <tr>
                                <td>Trấn Thành</td>
                                <td>Các sơ đồ trong tài liệu</td>
                                <td align="center">09/01/2014 11:02:32PM</td>
                                <td align="center"><a href="#"><img src="images/uncheck.png"></a></td>
                                <td align="center">
                                    <a href="?cn=thaoluan">[Xem]</a>
                                    <a href="#">[Xóa]</a>
                                </td>
                            </tr>
                            <tr>
                                <td>Huynh Mai</td>
                                <td>Các sơ đồ trong tài liệu</td>
                                <td align="center">09/01/2014 11:02:32PM</td>
                                <td align="center"><a href="#"><img src="images/check.png"></a></td>
                                <td align="center">
                                    <a href="#">[Xem]</a>
                                    <a href="#">[Xóa]</a>
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
            </div>
        </div>
        
    </body>
</html>
