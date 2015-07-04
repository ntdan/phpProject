<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Gửi ý kiến-hỏi đáp</title>
        <!-- Bootstrap -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link type="text/css" rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="../bootstrap/css/signin.css">
        <script type="text/javascript" src="../scripts/ckeditor/ckeditor.js"></script>
        <script src="../bootstrap/js/bootstrap.js"></script>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3 style="color: darkgreen; font-weight: bold;">THÊM - HIỆU CHỈNH Ý KIẾN</h3>
                    <form action="" method="post" class="form-horizontal">
                        <table class="table" width="800px" cellpadding="0px" cellspacing="0px" align='center'>
                            <tr>
                                <td>Tên người viết</td>
                                <td>
                                    <input type="text" value="" class="form-control"> 
                                </td>
                            </tr>
                            <tr>
                                <td>Tiêu đề</td>
                                <td>
                                    <input type="text" value="" class="form-control"> 
                                </td>
                            </tr>
                            <tr></tr>                                              
                            <tr>
                                <td>Nội dung ý kiến:</td>
                                <td>
                                    <textarea name="txtNoiDung" rows="2" cols="2" class="ckeditor"></textarea>
                                    <script language="javascript">
                                        CKEDITOR.replace( 'txtNoiDung',
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
                                                ['Image', 'Flash', 'Table', 'Rule', 'Smiley', 'SpecialChar'],
                                            ['Style', 'FontFormat', 'FontName', 'FontSize']]
                                        });
                                    </script>
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>
                                    <input type="button" value="Lưu" class="btn btn-primary">
                                    <input type="button" value="Hủy bỏ" class="btn btn-primary">                                
                                </td>
                            </tr>
                        </table>
                    </form>
                </div>
            </div>
        </div>
            
    </body>
</html>
