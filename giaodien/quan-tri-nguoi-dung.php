<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Quản trị người dùng</title>
        <!-- Bootstrap -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link type="text/css" rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="../bootstrap/css/signin.css">
        <script type="text/javascript" src="../scripts/ckeditor/ckeditor.js"></script>
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
            <div class="row">
                <div class="col-lg-12">
                    <table class="table" width="800px" cellpadding="0px" cellspacing="0px" align='center'>
                        <td><h4 style="color: darkblue; font-weight: bold;">DANH SÁCH NGƯỜI DÙNG</h4></td>
                        <td>
                            <a href="?cn=themnguoidung"><button type="button" name="" class="btn btn-primary">
                                <img src="images/add-icon.png"> Thêm
                            </button></a>
                            <a href="?cn=capnhatnguoidung"><button type="button" name="" size="10" class="btn btn-primary">
                                <img src="images/edit-icon.png"> Cập nhật
                            </button></a>
                            <button type="button" name="" class="btn btn-primary">
                                <img src="images/Document-Delete-icon.png"> Xóa
                            </button>
                        </td>
                    </table>
                    <table class="table table-bordered" width="800px" cellpadding="0px" cellspacing="0px" align='center'>
                        <tr>
                            <th>STT</th>
                            <th>
                                <input type="checkbox" name="" value="">
                            </th>
                            <th>Tài khoản</th>
                            <th>Họ và tên</th>
                            <th>Email</th>
                            <th>Quản trị</th>
                            <th>Người tạo</th>
                            <th>Ngày tạo</th>
                            <th>Khóa</th>
                        </tr>
                        <tr>
                            <td align="center">1</td>
                            <td align="center"><input type="checkbox" name="" value=""></td>
                            <td>thanh123</td>
                            <td>Trấn Thành</td>
                            <td>thanh@ctu.edu.vn</td>
                            <td align="center"><img src="images/check.png"></td>
                            <td>Administrator</td>
                            <td>02/03/2014</td>
                            <td align="center">
                                <a href="#"><img src="images/Unlock.png"></a>
                            </td>
                        </tr>
                        <tr>
                            <td align="center">2</td>
                            <td align="center"><input type="checkbox" name="" value=""></td>
                            <td>tao523</td>
                            <td>Đào Tạo</td>
                            <td>tao@ctu.edu.vn</td>
                            <td align="center"><img src="images/uncheck.png"></td>
                            <td>Administrator</td>
                            <td>02/01/2013</td>
                            <td align="center">
                                <a href="#"><img src="images/Lock.png"></a>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        
    </body>
</html>
