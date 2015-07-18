<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Thêm đề tài</title>
        <!-- Bootstrap -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link type="text/css" rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="../bootstrap/css/signin.css">
        <script type="text/javascript" src="../scripts/ckeditor/ckeditor.js"></script>
        <script src="../bootstrap/js/bootstrap.js"></script>
        
        <style type="text/css">
            #bang2 td:first-child{
                text-align: center;
                color: darkblue;
                background-color: #dff0d8;
                font-weight: bold;
            }
            #bang1 td{
                text-align: center;
                color: darkblue;
                background-color: #dff0d8;
                font-weight: bold;
            }
        </style>

    </head>

    <?php 
        include_once 'chucnang/gv_detai.php';
        
        if (isset($_POST['btnThem'])) {        
        
            include_once 'chucnang/gv_detai.php';

            $madt = $_POST['txtMaDeTai'];
            $macb = '2134';
            $ten = $_POST['txtTenDeTai'];
            $mota = $_POST['txtMoTa'];
            $congnghe= $_POST['txtCongNghe'];
            $taptin = isset($_POST['txtTapTinKem']) ? $_POST['txtTapTinKem'] : "";
            $songuoi = $_POST['txtSoNguoi'];
            $phanloai = $_POST['cbmPhanLoai'];
            $trangthai = $_POST['cbmTrangThai'];
            $gchu = $_POST['txtGhiChu'];

            //($madt,$macb,$tendt,$mota,$congnghe,$taptin,$songuoi,$phanloai,$trangthai,$duyet,$ngaytao,$ghichu)
            dt_them($madt,$macb,$ten,$mota,$congnghe,$taptin,$songuoi,$phanloai,$trangthai,0,$gchu);

            echo "<script>window.location.href='?cn=dsdt'</script>";
        }
    ?>

    <body>

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3 style="color: darkblue; font-weight: bold;">THÊM ĐỀ TÀI MỚI</h3>
                        <table class="table table-bordered" id="bang1">
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
                                    <?php chonNhomHP(); ?>
                                </td>
                            </tr>
                        </table>
                    <form id="formThemDeTai" name="formThemDeTai" action="" method="post">                        
                        <table class="table table-bordered" id="bang2">
                            <tr>
                                <td width="25%">Mã đề tài:</td>
                                <td>
                                    <input type="text" id="txtMaDeTai" name="txtMaDeTai" value="" class="form-control"> 
                                </td>
                            </tr>
                            <tr>
                                <td width="25%">Tên đề tài:</td>
                                <td>
                                    <input type="text" id="txtTenDeTai" name="txtTenDeTai" value="" class="form-control"> 
                                </td>
                            </tr>
                            <tr>
                                <td>Số sinh viên tối đa</td>
                                <td>
                                    <input type="text" id="txtSoNguoi" name="txtSoNguoi" value="" class="form-control"> 
                                </td>
                            </tr>                                            
                            <tr>
                                <td>Mô tả:</td>
                                <td>
                                    <textarea name="txtMoTa" rows="2" cols="2" class="ckeditor"></textarea>
                                    <script language="javascript">
                                        CKEDITOR.replace('txtMoTa',
                                                {
                                                    skin: 'kama',
                                                    extraPlugins: 'uicolor',
                                                    uiColor: '#eeeeee',
                                                    toolbar: [['Font'],
                                                        ['Cut', 'Copy', 'Paste', 'PasteText', 'PasteWord', '-', 'Print', 'SpellCheck'],
                                                        ['Bold', 'Italic', 'Underline', 'StrikeThrough', '-', 'Subscript', 'Superscript'],
                                                        ['OrderedList', 'UnorderedList', '-', 'Outdent', 'Indent', 'Blockquote'],
                                                        ['JustifyLeft', 'JustifyCenter', 'JustifyRight', 'JustifyFull'],
                                                        ['Link', 'Unlink', 'Anchor', 'NumberedList', 'BulletedList', '-', 'Outdent', 'Indent'],
                                                        ['Image', 'Flash', 'Table', 'Rule', 'Smiley', 'SpecialChar'],
                                                        ['Style', 'FontFormat', 'FontName', 'FontSize']]
                                                });
                                    </script>
                                </td>
                            </tr>
                            <tr>
                                <td>Công nghệ thực hiện:</td>
                                <td>
                                    <textarea name="txtCongNghe" rows="2" cols="2" class="ckeditor"></textarea>
                                    <script language="javascript">
                                        CKEDITOR.replace('txtCongNghe',
                                                {
                                                    skin: 'kama',
                                                    extraPlugins: 'uicolor',
                                                    uiColor: '#eeeeee',
                                                    toolbar: [['Font'],
                                                        ['Cut', 'Copy', 'Paste', 'PasteText', 'PasteWord', '-', 'Print', 'SpellCheck'],
                                                        ['Bold', 'Italic', 'Underline', 'StrikeThrough', '-', 'Subscript', 'Superscript'],
                                                        ['OrderedList', 'UnorderedList', '-', 'Outdent', 'Indent', 'Blockquote'],
                                                        ['JustifyLeft', 'JustifyCenter', 'JustifyRight', 'JustifyFull'],
                                                        ['Link', 'Unlink', 'Anchor', 'NumberedList', 'BulletedList', '-', 'Outdent', 'Indent'],
                                                        ['Image', 'Flash', 'Table', 'Rule', 'Smiley', 'SpecialChar'],
                                                        ['Style', 'FontFormat', 'FontName', 'FontSize']]
                                                });
                                    </script>
                                </td>
                            </tr>
                            <tr>
                                <td>Những yếu tố cần lưu ý trong đề tài:</td>
                                <td>
                                    <textarea name="txtGhiChu" rows="2" cols="2" class="ckeditor"></textarea>
                                    <script language="javascript">
                                        CKEDITOR.replace('txtGhiChu',
                                                {
                                                    skin: 'kama',
                                                    extraPlugins: 'uicolor',
                                                    uiColor: '#eeeeee',
                                                    toolbar: [['Font'],
                                                        ['Cut', 'Copy', 'Paste', 'PasteText', 'PasteWord', '-', 'Print', 'SpellCheck'],
                                                        ['Bold', 'Italic', 'Underline', 'StrikeThrough', '-', 'Subscript', 'Superscript'],
                                                        ['OrderedList', 'UnorderedList', '-', 'Outdent', 'Indent', 'Blockquote'],
                                                        ['JustifyLeft', 'JustifyCenter', 'JustifyRight', 'JustifyFull'],
                                                        ['Link', 'Unlink', 'Anchor', 'NumberedList', 'BulletedList', '-', 'Outdent', 'Indent'],
                                                        ['Image', 'Flash', 'Table', 'Rule', 'Smiley', 'SpecialChar'],
                                                        ['Style', 'FontFormat', 'FontName', 'FontSize']]
                                                });
                                    </script>
                                </td>
                            </tr>
                            <tr>
                                <td>Phân loại:</td>
                                <td>
                                    <select class="form-control" name="cbmPhanLoai">
                                        <option value="Đề tài gợi ý">Đề tài gợi ý</option>
                                        <option value="Được đề xuất">Được đề xuất</option>                                       
                                    </select> 
                                </td>
                            </tr>
                            <tr>
                                <td>Trạng thái</td>
                                <td>
                                    <select class="form-control" name="cbmTrangThai">
                                        <option value="Chưa thực hiện">Chưa thực hiện</option>
                                        <option value="Đang thực hiện">Đang thực hiện</option>
                                        <option value="Đã hoàn thành">Đã hoàn thành</option>                                        
                                    </select> 
                                </td>
                            </tr>
                            <tr>
                                <td>Tập tin đính kèm:</td>
                                <td><input type="file" name="txtTapTinKem"/></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td align="center">
                                    <button type="submit" name="btnThem" class="btn btn-primary" style="width:20%;">
                                        <img src="images/save-as-icon.png"> Thêm
                                    </button>
                                    <a href="?cn=dsdt" class="btn btn-warning" style="width:20%;">
                                        <img src="images/delete-icon.png"> Hủy bỏ
                                    </a>                                   
                                </td>
                            </tr>
                        </table>
                    </form>                                
                </div>
            </div> <!-- /row -->

        </div> <!-- /container -->

    </body>
</html>
