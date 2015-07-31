<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>

    <style type="text/css">
        th{
            text-align: right;
            color: darkblue;
            font-weight: bold;
        }
    </style>

    <?php
        include_once 'chucnang/gv_tieuchidiem.php';

        if(isset($_POST['btnCapNhat'])){
            $matc = $_POST['txtMaTC'];
            $ndtc = $_POST['txtNoiDungTC'];
            $md = $_POST['txtMucDiem'];
            //tc_them($matc,$noidungtc,$heso)
            tc_sua($matc, $ndtc, $md);

            echo "<script>window.location.href='?cn=dstc'</script>";
        }
        $matc = $_GET['id_tc'];
        $tc = tc_xem($matc);
        if($tc == null){
            return;
        }
    ?>  
    

<div class="container">
    <div class="row">
        <form action="" enctype="multipart/form-data" method="post" name="frmDoiMatKhau" class="form-horizontal">                    
            <div class="col-md-8">
                <h3 style="color: darkblue; font-weight: bold; margin-left: 50px;">Thêm tiêu chí đánh giá</h3>
                <table class="table table-bordered" align="center" style="width:600px;">
                    <tr>
                        <th width="20%">Mã tiêu chí:</th>
                        <td width="50%">
                            <input type="text" name="txtMaTC" value="<?php echo $tc['matc']; ?>" class="form-control" readonly="true" /> 
                        </td>
                    </tr>
                    <tr>
                        <th>Nội dung đánh giá:</th>
                        <td>
                            <input type="text" name="txtNoiDungTC" value="<?php echo $tc['noidungtc']; ?>" class="form-control" /> 
                        </td>
                    </tr>
                    <tr>
                        <th>Mức điểm:</th>
                        <td>
                            <input type="text" name="txtMucDiem" value="<?php echo $tc['heso']; ?>" class="form-control" /> 
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" align="center">
                            <button type="submit" name="btnCapNhat" class="btn btn-primary" style="width: 20%;">
                                <img src="images/save-as-icon.png"> Cập nhật
                            </button>&nbsp;&nbsp;
                            <a href="?cn=dstc" class="btn btn-warning" style="width:20%;">
                                <img src="images/delete-icon.png"> Hủy bỏ
                            </a>                              
                        </td>
                    </tr>
                </table>                   
            </div> 
        </form>
    </div><!-- /row -->

</div> <!-- /container -->
