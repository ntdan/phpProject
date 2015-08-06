<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Nộp tài liệu</title>
        <!-- Bootstrap -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link type="text/css" rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="../bootstrap/css/signin.css">
        <script src="../bootstrap/js/bootstrap.js"></script>
    </head>
    
    <style type="text/css">
        th{
            text-align: center;
            color: darkblue;
            background-color: #dff0d8;
        }
    </style>
    <?php
            include_once 'chucnang/sv_noptailieu.php';
            include_once 'chucnang/sv_phancv.php';
            include_once 'chucnang/sv_thongtin.php';
            
            $mssv = '1111317';
            $ma = sv_maNhomNL($mssv);
            
            $manth = $ma['manhomthuchien'] ;
            $detainhom = xem_dtthuchien($manth);
    ?>
    <body>
        <div class="container">            
            <div class="row">
                <h3 style="color: darkblue; font-weight: bold;" align="center">NỘP TÀI LIỆU</h3><br>
                <form method="post">
                    <div class="row">
                        <div class="col-md-6">
                            <label style="margin-left: 15px;">Tên đề tài: </label><br>
                            <label style="margin-left: 15px;color: darkblue; font-weight: bold;">
                                <?php echo $detainhom['tendt']; ?>
                            </label>
                        </div>
                        <div class="col-md-6">
                            <label style="display: block; float: left;">Công việc: </label>
                            <?php chon_tenCV($manth); ?>
                        </div>                                          
                     </div><br>
                     <div class="col-md-12">     
                        <table class="table table-bordered" cellpadding="15px" cellspacing="0px" align='center'>
                            <tr>
                                <th>STT</th>
                                <th>Tên tập tin</th>
                                <th>Dung lượng</th>
                                <th>Loại</th>
                                <th>Đường dẫn</th>
                                <th>Ngày đăng</th>   
                                <th>Thao tác</th>
                            </tr> 
                            <tr>
                                <td>1</td>
                                <td><label>Đặc tả sơ bộ</label></td>
                                <td>3Mb</td>
                                <td>Tập tin</td>
                                <td>D:/NienLuan</td>
                                <td>02/03/2014</td>
                                <td align="center">
                                    <a href="?cn=capnhattailieu"><img src="images/edit-icon.png"></a>&nbsp;&nbsp;
                                    <a href="?cn=noptl"><img src="images/Document-Delete-icon.png"></a>
                                </td>
                            </tr>
                        </table><hr>
                        <div class="col-md-12">
                             <div class="progress" style="width:50%;">
                                <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 45%">
                                    <span>45% Complete</span><!--class="sr-only"-->
                                </div>                                 
                             </div>
                            <form method="post" action="" enctype="multipart/form-data">
                                <input type="file" id="fTaiLieu" name="fTaiLieu" value="" class="form-control" style="width:60%;"/><br>
                                <label>Mô tả:</label><input type="text" name="txtMoTa" value="" class="form-control" style="width:60%;"/><br>
                                <input type="submit" name="uploadclick" value="Gửi tập tin" class="btn btn-success" style="margin-left: 50px;"/><br>
                            </form>
                            <?php                                                         
                                if(isset($_POST['uploadclick'])){
                                    $matl = matl_tutang();
                                    $mota = $_POST['txtMoTa'];
                                    
                                    global  $thumucTaiLieu;
                                    if(!file_exists($thumucTaiLieu))
                                         mkdir($thumucTaiLieu);
                                    if($_FILES['fTaiLieu']['type'] != "image/jpg" || $_FILES['fTaiLieu']['type'] != "image/jpeg" || $_FILES['fTaiLieu']['type'] != "image/png")
                                    {          
                                        $tentl = basename($_FILES['fTaiLieu']['name']);
                                        $kichthuoc = $_FILES['fTaiLieu']['size'];
                                        $duoi = $_FILES['fTaiLieu']['type'];
                                        $duongdan = pathinfo($tentl); //Trả về thông tin đường dẫn file
                                        
                                        move_uploaded_file($_FILES['fTaiLieu']['tmp_name'], $thumucTaiLieu.'/'.$_FILES['fTaiLieu']['name']);                                                       
                                    }   
                                    sv_themtailieu($matl,$tentl,$kichthuoc,$mota);
                                }
                                
                                    
                            ?>
                        </div>                                               
                    </div>
                </form>               
            </div>   <!-- /row -->
        </div> <!-- /container -->
    </body>
</html>
