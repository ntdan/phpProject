<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Kết quả đăng ký đề tài</title>
         <!-- Bootstrap -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link type="text/css" rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="../bootstrap/css/signin.css">
        <script type="text/javascript" src="../scripts/ckeditor/ckeditor.js"></script>
        <script src="../bootstrap/js/bootstrap.js"></script>
        
        <style type="text/css">
            th{
                text-align: center;
                color: darkblue;
                background-color: #dff0d8;
                vertical-align: middle;
            }

        </style>
        
    </head>
    <?php
        include_once 'chucnang/sv_thongtin.php';
        include_once 'chucnang/gv_chitietkehoach.php';
        
        $mssv = $svUSER['mssv'];
        $ma = sv_maNhomNL($mssv);
        $manth = $ma['manhomthuchien'];
//Lấy danh sách thành viên trong nhóm        
        $dstv = danhsach_thanhvien($manth);
        if($dstv == NULL){
            return;
        }

    ?>
    
    <body>
        <div class="container">
            <div class="row">
                <h3 style="color: darkblue;font-weight: bold; text-align: center;">KẾT QUẢ ĐĂNG KÝ NIÊN LUẬN</h3>
                <div class="col-md-6">
                    <div><label>Mã nhóm niên luận:&nbsp;</label><label style="color:darkblue;"><?php echo $manth; ?></label></div>
                    <div>
                        <label>Tên đề tài thực hiện:</label><br>                        
                        <?php
                               //Lấy tên đề tài nhóm đã đăng ký
                                $dtn = detai_nhom($manth);
                                if($dtn != NULL){
                                    $dtnth = mysql_fetch_array($dtn);
                                    echo "<label style='color:darkblue; margin-left: 3%; font-weight: normal;'>".
                                            $dtnth['tendt'].
                                         "</label>";
                                }
                        ?>                        
                    </div>
                    <div>
                        <label>Tổ chức nhóm:</label><br>
                        <?php
                            if(mysql_num_rows($dstv)>0){
                                $rw = mysql_fetch_array($dstv);
                                echo "<label style='color:darkblue; margin-left: 3%; font-weight: normal;'>".
                                            $rw['tochucnhom'].
                                     "</label>";
                            }                           
                        ?>
                    </div>
                </div>
                <div class="col-md-6">
                    <table class="table table-hover" width="500px" cellpadding="15px" cellspacing="0px">
                        <tr>
                            <th width="2%">STT</th>
                            <th width="4%">MSSV</th>
                            <th width="20%">Họ và tên</th>
                            <th width="5%">Trưởng nhóm</th>
                        </tr>
                        <?php
                            global $check;
                            global $uncheck;
                            $n = mysql_num_rows($dstv);
                            $stt = 1;
                            while($rw = mysql_fetch_array($dstv)){
                                $ch = $rw['nhomtruong'] == 1 ? $check : $uncheck;
                                
                                echo "<tr>".
                                        "<td align='center'>$stt</td>".
                                        "<td>".$rw['mssv']."</td>".
                                        "<td>".$rw['hoten']."</td>".
                                        "<td align='center'><img src='$ch'/></td>".
                                    "</tr>";
                                $stt++;
                            }
                        ?>                        
                    </table>
                </div>
            </div>
        </div>
    </body>
</html>
