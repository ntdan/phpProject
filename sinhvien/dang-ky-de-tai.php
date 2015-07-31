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
    
    <?php
        include_once 'chucnang/sv_dangkydetai.php';
        include_once 'chucnang/sv_thongtin.php';
        
        $mssv = '1111317';
//Lấy 'mã nhóm học phần' của sinh viên đã đăng lý        
        $manl = sv_maNhomNL($mssv);
        if($manl == null){
            return;
        }
        $manhp = $manl['manhomhp'];
        $tt = dt_canbo($manhp);
        if($tt == null){
            return;
        }
//Lây mssv của 1 nhóm hoc phần
        $ds_masv = lay_mssv($manhp);
        if($ds_masv == null){
            return;
        }
//Thêm thành viên vào nhóm
        if(isset($_POST['btnThem'])){
            
        }
//Đăng ký nhóm làm niên luận
        if(isset($_POST['btnDangKy'])){
            
        }    
    ?>
    
    <body>
        <div class="container">
            
            <div class="row">
                <div class="col-md-12">
                <h3 style="color: darkblue; font-weight: bold;" align='center'>Đăng ký nhóm làm niên luận</h3> 
                <form action="" method="post">
                    <table class="table table-bordered" border="1" width="800px" cellpadding="15px" cellspacing="0px" align='center' id="dangky">
                        <tr>
                            <th>Mã cán bộ:</th>
                            <td width="15%">
                                <input type="text" name="txtMaCB" value="<?php echo $tt['macb'] ?>" class="form-control" readonly="true"/>
                            </td>
                            <th width="20%">Họ và tên cán bộ hướng dẫn:</th>
                            <td>
                                <input type="text" name="txtTen" value="<?php echo $tt['hoten'] ?>" class="form-control" readonly="true"/>
                            </td>
                        </tr>
                        <tr>
                            <th width='15%' valign='middle'>Tên đề tài:</th>
                            <td align='center' colspan="3">
                                <?php $macb='2134'; detai_canbo($macb); ?>
                            </td>
                        </tr>
                        <tr>
                            <th>Thành viên nhóm:</th>
                            <td colspan="3">
                                <table class="table table-bordered" id="tblChonTV"> 
                                    <?php
                                        $n = mysql_num_rows($ds_masv); 
                                        $stt = 1;
                                        for($j=1; $j<=4; $j++){                                            
                                            echo "<td width='20%'>";                                            
                                            for($i=1;$i<6;$i++)
                                            {
                                                $ma = mysql_fetch_array($ds_masv);
                                                if($ma != NULL){
                                                    echo $ma['mssv'].": <input type='checkbox' name='ckbThanhVien$stt' value=''/>&nbsp;&nbsp;&nbsp;&nbsp;".
                                                     "Nhóm trưởng: <input type='radio' name='raNhomTruong' value=''/><br>";
                                                }
                                                
                                                
                                                $stt++;                                                                                                   
                                            }                                    
                                            echo "</td>";  
                                            
                                        }                                            
                                        echo "<tr>".
                                                 "<td colspan='4' align='center'>".
                                                      "<input type='submit' name='btnThem' value='Thêm thành viên' class=\"btn btn-primary\">".
                                                "</td>".
                                             "</tr>";
                                    ?>   
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
                                                <option value="S">Buổi sáng</option>
                                                <option value="C">Buổi chiều</option>
                                            </select>                                        
                                        </td>
                                        <th>Chọn ngày trong tuần:</th>
                                        <td>
                                            <select class="form-control">
                                                <option value="2">Thứ 2</option>
                                                <option value="3">Thứ 3</option>
                                                <option value="3">Thứ 3</option>
                                                <option value="5">Thứ 5</option>
                                                <option value="6">Thứ 6</option>
                                                <option value="7">Thứ 7</option>
                                            </select>
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
                                <button type="submit" name="btnDangKy" class="btn btn-success" style="width: 20%;">
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
