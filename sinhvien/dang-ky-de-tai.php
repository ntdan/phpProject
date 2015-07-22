<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Đăng ký đề tài niên luận</title>
          <!-- Bootstrap -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link type="text/css" rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="../bootstrap/css/signin.css">
        <script type="text/javascript" src="../scripts/ckeditor/ckeditor.js"></script>
        <script src="../bootstrap/js/bootstrap.js"></script>
    </head>
    
    <style type="text/css">
        th{
            text-align: right;
            color: darkblue;
            background-color: #dff0d8;
            vertical-align: middle;
        }
        
    </style>
    
    <body>
        <div class="container">
            
            <div class="row">
                <div class="col-md-12">
                <h3 style="color: darkblue; font-weight: bold;" align='center'>Đăng ký nhóm làm niên luận</h3> 
                <form action="" method="post">
                    <table class="table table-bordered" border="1" width="800px" cellpadding="15px" cellspacing="0px" align='center' id="dangky">
                        <tr>
                            <th>Mã cán bộ:</th>
                            <td width="20%"><input type="text" name="txtMaCB" value="" class="form-control" readonly="true"/></td>
                            <th width="10%">Họ và tên:</th>
                            <td><input type="text" name="txtTen" value="" class="form-control" readonly="true"/></td>
                        </tr>
                        <tr>
                            <th width='15%' valign='middle'>Tên đề tài:</th>
                            <td align='center' colspan="3">
                                <select class="form-control">                                
                                    <option value="4">--Chọn đề tài--</option>
                                    <option value="1">Phần mềm quản lý nghiên cứu khoa học</option>
                                    <option value="1">Website quản lý bán điện thoại laptop</option>
                                    <option value="1">Website bán đồ nội thất</option>
                                    <option value="4">Game cờ caro trên Androi</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <th>Thành viên nhóm:</th>
                            <td colspan="3">
                                <table class="table table-bordered" id="tblChonTV">
                                    <tr>
                                    </tr>                                
                                    <tr>
                                        <td colspan="3" align='center'>
                                            <input type="button" value="Thêm thành viên" class="btn btn-primary">
                                        </td>
                                    </tr>
                                </table>                       
                            </td>
                        </tr>
                        <tr>
                            <th>Ngày họp nhóm:</th>
                            <td colspan="3">
                                <table class="table table-bordered" border="0" cellpadding="10px" cellspacing="0px" align="center">
                                    <tr>
                                        <th>Chọn buổi họp nhóm:</th>
                                        <td>
                                            <select class="form-control">
                                                <option value="sang">Buổi sáng</option>
                                                <option value="chieu">Buổi chiều</option>
                                            </select>                                        
                                        </td>
                                        <th>Chọn ngày trong tuần:</th>
                                        <td>
                                            <select class="form-control">
                                                <option value="hai">Thứ hai</option>
                                                <option value="ba">Thứ ba</option>
                                                <option value="tu">Thứ tư</option>
                                                <option value="nam">Thứ năm</option>
                                                <option value="sau">Thứ sáu</option>
                                                <option value="bay">Thứ bảy</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="4" align='center'>
                                            <input type="button" value="Buổi khác" class="btn btn-primary">
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <th>Mô tả đề tài (Nếu có):</th>
                            <td align='center' colspan="3">
                                <textarea name="txtMoTa" rows="2" cols="2" class="ckeditor"></textarea>
                                    <script language="javascript">
                                        CKEDITOR.replace( 'txtMoTa',
                                        {
                                            skin : 'kama',
                                            extraPlugins : 'uicolor',
                                            uiColor: '#eeeeee',
                                            toolbar : [['Font'],
                                                ['Cut','Copy','Paste','PasteText','PasteWord','-','Print','SpellCheck'], 
                                                ['Bold','Italic','Underline','StrikeThrough','-','Subscript','Superscript'],
                                                ['OrderedList','UnorderedList','-','Outdent','Indent','Blockquote'],
                                                ['JustifyLeft','JustifyCenter','JustifyRight','JustifyFull'],
                                                ['Link','Unlink','Anchor', 'NumberedList','BulletedList','-','Outdent','Indent'],
                                                ['Image','Flash','Table','Rule','Smiley','SpecialChar'],
                                                ['Style','FontFormat','FontName','FontSize']]
                                        });
                                    </script>
                            </td>
                        </tr>
                        <tr>
                            <th>Phạm vi đề tài:</th>
                            <td align='center' colspan="3">
                                <textarea name="txtPhamVi" rows="2" cols="2" class="ckeditor"></textarea>
                                    <script language="javascript">
                                        CKEDITOR.replace( 'txtPhamVi',
                                        {
                                            skin : 'kama',
                                            extraPlugins : 'uicolor',
                                            uiColor: '#eeeeee',
                                            toolbar : [['Font'],
                                                ['Cut','Copy','Paste','PasteText','PasteWord','-','Print','SpellCheck'], 
                                                ['Bold','Italic','Underline','StrikeThrough','-','Subscript','Superscript'],
                                                ['OrderedList','UnorderedList','-','Outdent','Indent','Blockquote'],
                                                ['JustifyLeft','JustifyCenter','JustifyRight','JustifyFull'],
                                                ['Link','Unlink','Anchor', 'NumberedList','BulletedList','-','Outdent','Indent'],
                                                ['Image','Flash','Table','Rule','Smiley','SpecialChar'],
                                                ['Style','FontFormat','FontName','FontSize']]
                                        });
                                    </script>
                            </td></tr>
                        <tr>
                            <td colspan="4" align='center'>
                                <button type="button" name="" class="btn btn-success" style="width: 20%;">
                                    Đăng ký 
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
