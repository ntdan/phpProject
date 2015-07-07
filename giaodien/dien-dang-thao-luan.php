<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Diễn đàn</title>
        <!-- Bootstrap -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link type="text/css" rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="../bootstrap/css/signin.css">
        <script src="../bootstrap/js/jquery-1.11.3.min.js"></script>
        <script src="../bootstrap/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="../scripts/ckeditor/ckeditor.js"></script>
    </head>
    
    <style type="text/css">
        th{
            color: darkblue;
            background-color: #dff0d8;
        }
    </style>
    
    <body>
        
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3 style="color: darkblue; font-weight: bold;">Diễn đàn tin tức</h3>
                    <a href="?cn=themthaoluan">
                        <button type="button" name="" class="btn btn-primary">
                            <img src="images/add-icon.png">Thêm chủ đề thảo luận
                        </button>
                    </a>                    
                    <br><br>
                    <table class="table" width="800px" cellpadding="15px" cellspacing="0px" align='center'>
                        <tr>
                            <th width="40%">Chủ đề</th>
                            <th colspan="2" width="30%">Người tạo</th>
                            <th width="6%">Phúc đáp</th>
                            <th width="10%">Ngày tạo</th>
                        </tr>
                        <tr>
                            <td><a href="?cn=thaoluan">Các sơ đồ cần vẽ?</a></td>
                            <td width="5%" align="center"><img src="../images/small-user.png"></td>
                            <td width="10%">Trấn Thành</td>
                            <td><a href="#">3</a></td>
                            <td>02/09/2013</td>
                        </tr>
                        <tr>
                            <td><a href="#">Cách viết tài liệu?</a></td>
                            <td align="center"><img src="../images/small-user.png"></td>
                            <td>Trấn Thành</td>
                            <td><a href="#">3</a></td>
                            <td>02/09/2013</td>
                        </tr>
                    </table>
                </div>
            </div> <!-- /row -->
        </div> <!-- /container -->
        
    </body>
</html>
