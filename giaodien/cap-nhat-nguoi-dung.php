<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Thêm người dùng</title>
        <!-- Bootstrap -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link type="text/css" rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="../bootstrap/css/signin.css">
        <script type="text/javascript" src="../scripts/ckeditor/ckeditor.js"></script>
        <script src="../bootstrap/js/bootstrap.js"></script>
    </head>
    
    <style type="text/css">
        td:first-child{
            text-align: right;
            color: darkblue;
            vertical-align: middle;
        }
    </style>
    
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3 style="color: darkblue; font-weight: bold;">CẬP NHẬT NGƯỜI DÙNG</h3>
                    <form action="" method="post" class="form-horizontal">
                    <table class="table table-bordered" cellpadding="0px" cellspacing="0px" align='center'>
                        <tr>
                            <td width="20%">Họ và tên:</td>
                            <td colspan="2" width="30%">
                                <input type="text" size="2" value="Trấn Thành" class="form-control" readonly=""> 
                            </td>
                        </tr>
                        <tr>
                            <td>Email:</td>
                            <td colspan="2">
                                 <input type="text" value="thanh@ctu.edu.vn" class="form-control"> 
                            </td>
                        </tr>
                        <tr></tr>                                              
                        <tr>
                            <td>Tài khoản:</td>
                            <td colspan="2">
                                <input type="text" value="thanh123" class="form-control" readonly="">
                            </td>
                        </tr>
                        <tr>
                            <td valign="bottom">Cấp quyền:</td>
                            <td width="10%"><label>Quản trị:</label></td>
                            <td><input type="checkbox" name=""></td>                              
                        </tr>
                        <tr>
                            <td></td>
                            <td><label>Mở tài khoản:</label></td>
                            <td><input type="checkbox" name=""></td>                             
                        </tr>
                        <tr>
                            <td>Mật khẩu cũ:</td>
                            <td colspan="2">
                                <input type="text" value="" class="form-control">
                            </td>
                        </tr>
                        <tr>
                            <td>Mật khẩu mới:</td>
                            <td colspan="2">
                                <input type="text" value="" class="form-control">
                            </td>
                        </tr>
                        <tr>
                            <td>Nhập lại mật khẩu:</td>
                            <td colspan="2">
                                <input type="text" value="" class="form-control">
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td colspan="2">
                                <button type="button" name="" class="btn btn-primary">
                                    <img src="../images/save-as-icon.png"> Hoàn tất
                                </button>
                                <button type="button" name="" class="btn btn-primary">
                                    <img src="../images/delete-icon.png"> Hủy bỏ
                                </button>                                
                            </td>
                        </tr>
                    </table>
                    </form>
                </div>
            </div><!-- /row -->
            
        </div> <!-- /container -->
            
    </body>
</html>
