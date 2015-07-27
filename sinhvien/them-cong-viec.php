<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Thêm công việc</title>
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
                text-align: right;
                color: darkblue;
                background-color: #dff0d8;
            }
    </style>
    
    <?php
        include_once 'chucnang/sv_phancv.php';     
        
          if(isset($_POST['btnThem']))
           {
              $macv = $_POST['txtMaCV'];
              $tencv = $_POST['txtTenCV'];
              $bdkh = $_POST['cbNgayBatDauKH'];
              $ktkh = $_POST['cbNgayKetThucKH'];
              $bdtt = $_POST['cbNgayBatDauThucTe'];
              $kttt =  $_POST['cbNgayKTThucTe'];
              $giaocho = $_POST['txtGiaoCho'];
              $ndcv = $_POST['txtNoiDungViec'];
              $trangthai = $_POST['cbTrangThai'];
              $tiendo = $_POST['txtTienDo'];
              $gio_thucte = $_POST['txtGioThucTe'];
              $phuthuoc = $_POST['cvPhuThuoc'];
              $uutien = $_POST['cbUuTien'];
              
              //($macv,$tencv,$giaocho,$bdkehoach,$ketthuctkehoach,$bdthucte,$ketthucte,$sogio_thucte,
            //$taisdcv,$uutien,$trangthai,$tiendo,$ndthuchien,$ghichu)
            cv_them($macv,$tencv,$giaocho,$bdkh,$ktkh,$bdtt,$kttt,$gio_thucte,$phuthuoc,$uutien,$trangthai,$tiendo,$ndcv,'null');
              
              //echo "<script>window.location.href='?cn=phancongcv'</script>";
          }
    ?>

    <body>        
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3 style="color: darkblue; font-weight: bold;">Thêm công việc</h3> 
                    <table class="table table-bordered" width="800px" cellpadding="15px" cellspacing="0px" id="bang1">
                        <tr>
                            <th width="10%">Mã công việc:</th>
                            <td><input type="text" name="txtMaCV" value="" class="form-control"></td>
                            <th width="10%">Tên công việc:</th>
                            <td>
                                <input type="text" name="txtTenCV" value="" class="form-control">
                            </td>
                        </tr>
                        <tr>
                            <th width="10%">Ngày thực hiện:</th>
                            <td width="30%">
                               <select class="form-control" size="1" name="cbNgayBatDauKeHoach">
                                    <option value="1"></option>
                                    <option value="2"></option>
                                    <option value="3"></option>
                                </select>
                            </td>
                            <th width="10%">Ngày kết thúc:</th>
                            <td width="30%">
                                <select class="form-control" size="1" name="cbNgayKTKeHoach">
                                    <option value="1"></option>
                                    <option value="2"></option>
                                    <option value="3"></option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <th>Giao cho:</th>
                            <td colspan="3">
                                <textarea name="txtGiaoCho" cols="50" rows="5" class="form-control"></textarea>
                            </td>
                        </tr>
                        <tr>
                            <th width="20%">Nội dung công việc:</th>
                            <td colspan="3">
                                <textarea name="txtNoiDungViec" rows="2" cols="2" class="ckeditor"></textarea>
                                <script language="javascript">
                                    CKEDITOR.replace( 'txtNoiDungViec',
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
                            <th>Số giờ thực tế</th>
                            <td><input type="text" id="txtGioThucTe" name="txtGioThucTe" value="" class="form-control"/></td>
                            <th>Tiến độ (%):</th>
                            <td><input type="text" id="txtTienDo" name="txtTienDo" value="" class="form-control"/></td>
                        </tr>
                        <tr>                            
                            <th>Trạng thái</th>
                            <td>
                                <select class="form-control" size="1" name="cbTrangThai">
                                    <option value="1">Đang làm</option>
                                    <option value="2">Sắp làm</option>
                                    <option value="3">Hoàn thành</option>
                                </select>
                            </td>
                            <th width="13%">Phụ thuộc công việc:</th>
                            <td>
                                <select class="form-control" size="1" name="cbPhuThuoc">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">2.1</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <th width="13%">Độ ưu tiên:</th>
                            <td>
                                <select class="form-control" size="1" name="cbUuTien">
                                    <option value="Cao">Cao</option>
                                    <option value="Trung bình">Trung bình</option>
                                    <option value="Thấp">Thấp</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td colspan="3" align="center">
                                <button type="submit" name="btnThem" class="btn btn-primary" style="width:20%;">
                                    <img src="images/save-as-icon.png"> Thêm công việc
                                </button>&nbsp;&nbsp;
                                <a href="?cn=phancongcv" class="btn btn-warning" style="width:20%;">
                                    <img src="images/delete-icon.png"> Hủy bỏ
                                </a>                            
                            </td>
                        </tr>
                    </table>
                </div>
            </div> <!-- /row -->
        </div> <!-- /container -->
        
    </body>
</html>
