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
            
            $mssv = $svUSER['mssv'];
            $ma = sv_maNhomNL($mssv);
            
            $manth = $ma['manhomthuchien'] ;
            $detainhom = xem_dtthuchien($manth);
    ?>
    <body>
        <div class="container">            
            <div class="row">
                <h3 style="color: darkblue; font-weight: bold;" align="center">NỘP TÀI LIỆU</h3><br>
                <form action="" method="post">
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
                                <th width="1%">STT</th>
                                <th width="8%">Tên tập tin</th>
                                <th width="5%">Dung lượng</th>
                                <th width="6%">Ngày đăng</th> 
                                <th width="20%">Nhận xét GV</th>
                                <th width="6%">Ngày nhận xét</th>
                                <th width="5%">Thao tác</th>
                            </tr> 
                            <tr>
                                <td>1</td>
                                <td><label>Đặc tả sơ bộ</label></td>
                                <td>3Mb</td>
                                <td></td>
                                <td></td>
                                <td>02/03/2014</td>
                                
                                <td align="center">
                                    <a href="?cn=noptl"><img src="images/Document-Delete-icon.png"></a>
                                </td>
                            </tr>
                        </table><hr>
                     </div>
                </form>
                    
                <div class="col-md-12">
                     <div id="progress" class="progress" style="width:50%;">
                        <div id="progressbar" class="progress-bar progress-bar-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100">
                            <span id="percent" style="color: black;">0%</span><!--class="sr-only"-->
                        </div>                                 
                     </div>
                     <div id="result"></div>

                     <form id="form_upload_ajax" action="" method="post" enctype="multipart/form-data">
                        <input type="file" id="fTaiLieu" name="fTaiLieu" style="width:60%;"/><br>
                        <label>Mô tả:</label>
                        <textarea name="txtMoTa" class="form-control" rows="3" style="width:60%;"></textarea><br>
                        <input type="submit" name="uploadclick" value="Gửi tập tin" class="btn btn-success" style="margin-left: 50px;"/><br>
                    </form>
                    <?php                                                         
                        if(isset($_POST['uploadclick'])){
                            $matl = matl_tutang();
                            $macv = 'CV1';
                            $mota = $_POST['txtMoTa'];

                            global  $thumucTaiLieu;
                            if(!file_exists($thumucTaiLieu))
                                 mkdir($thumucTaiLieu);                                

                            //$data = mysql_real_escape_string(file_get_contents($_FILES ['fTaiLieu']['tmp_name']));                                    
                            $kieuDuoi = $_FILES["fTaiLieu"]["type"];
                            //$t = $_FILES['fTaiLieu']['name'];
                            //$d = pathinfo($t);
                            //$extention = $d['extension'];
                            //echo $kieuDuoi." - ".$extention."<br>";

                            if($kieuDuoi == "application/pdf" || $kieuDuoi == "application/msword")
                            {   
                                $tentl = mysql_real_escape_string($_FILES['fTaiLieu']['name']);
                                $kichthuoc = round(($_FILES['fTaiLieu']['size'])/(1024*1024),2); // đổi từ bytes -> Mb 
                                move_uploaded_file($_FILES['fTaiLieu']['tmp_name'], $thumucTaiLieu.'/'.$_FILES['fTaiLieu']['name']);                                                                                                                                                                                                
                            }   
                            sv_themtailieu($matl,$macv,$tentl,$kichthuoc,$mota,0);
                        }                                                               
                    ?>
                </div>                                               
            </div><!-- /row -->
           
        </div>   <!-- /container -->
        <script>
            var progressbar = $('#progressbar');
            var percent = $('#percent');
            var result = $('#result');
            var percentValue = "0%";

            $('#form_upload_ajax').ajaxForm({
                // Do something before uploading
                beforeUpload: function() {
                  result.empty();
                  percentValue = "0%";
                  progressbar.width = percentValue;
                  percent.html(percentValue);
                },

                // Do somthing while uploading
                uploadProgress: function(event, position, total, percentComplete) {
                  var percentValue = percentComplete + '%';
                  progressbar.width(percentValue)
                  percent.html(percentValue);
                },

                // Do something while uploading file finish
                success: function() {
                  var percentValue = '100%';
                  progressbar.width(percentValue)
                  percent.html(percentValue);
                },

                // Add response text to div #result when uploading complete
                complete: function(xhr) {      
                  $('#result').html(xhr.responseText);
                }
            });
          </script>
    </body>
</html>
