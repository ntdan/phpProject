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
            text-align: center;
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
                <table class="table table-bordered" border="1" width="800px" cellpadding="15px" cellspacing="0px" align='center' id="dangky">
                    <tr>
                        <th rowspan="2" width='15%' valign='middle'>Tên đề tài:</th>
                        <td width='60%'>
                            <input type="text" value="" placeholder="Tên đề tài đề xuất" class="form-control">                       
                        </td>
                        <td width='10%'>
                            <input type="button" name='' value='Đề xuất đề tài' class="btn btn-primary">                   
                        </td>
                    </tr>
                    <tr>
                        <td align='center' colspan='2'>
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
                        <td colspan="2">
                            <table class="table table-bordered" border="0" cellpadding="10px" cellspacing="0px" align="center">
                                <tr>
                                    <th>Nhóm trưởng:</th>
                                    <td align='left'>
                                        <select class="form-control">
                                            <option value="1">Lê Lai</option>
                                            <option value="1">Đỗ Nhật Nam</option>
                                            <option value="1">Hoàng Kim Anh</option>
                                            <option value="4">Vũ Trọng Bảo</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Thành viên:</th>
                                    <td>
                                        <select class="form-control">
                                            <option value="1">Lê Lai</option>
                                            <option value="1">Đỗ Nhật Nam</option>
                                            <option value="1">Hoàng Kim Anh</option>
                                            <option value="4">Vũ Trọng Bảo</option>
                                        </select>
                                    </td>
                                    <td><input type="button" value="Loại bỏ" class="btn btn-primary"></td>
                                </tr>                                
                                <tr>
                                    <th>Thành viên:</th>
                                    <td>
                                        <select class="form-control">
                                            <option value="1">Lê Lai</option>
                                            <option value="1">Đỗ Nhật Nam</option>
                                            <option value="1">Hoàng Kim Anh</option>
                                            <option value="4">Vũ Trọng Bảo</option>
                                        </select>
                                    </td>
                                    <td><input type="button" value="Loại bỏ" class="btn btn-primary"></td>
                                </tr>
                                <tr><td colspan="4" align='center'>
                                        <input type="button" value="Thêm thành viên" class="btn btn-primary">
                                    </td></tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <th>Ngày họp nhóm:</th>
                        <td colspan="2">
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
                        <th>Mô tả:</th>
                        <td align='center' colspan="2">
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
                        <th>Phạm vi:</th>
                        <td align='center' colspan="2">
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
                        <td colspan="3" align='center'>
                            <button type="button" name="" class="btn btn-success">
                                <img src="images/save-as-icon.png"> Hoàn thành 
                            </button>
                        </td>
                    </tr>
                </table>
                </div>    

            </div> <!-- /row -->

        </div> <!-- /container -->
    </body>
</html>
