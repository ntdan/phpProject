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

        $macb = '2134';

        if(isset($_POST['btnThem'])){
            $matc = $_POST['txtMaTC'];
            $ndtc = $_POST['txtNoiDungTC'];
            $md = $_POST['txtMucDiem'];
            //tc_them($matc,$noidungtc,$heso)
            tc_them($macb,$matc, $ndtc, $md);

            echo "<script>window.location.href='?cn=dstc'</script>";
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
                                <input style="width:35%; text-align: center;" type="text" name="txtMaTC" value="<?php echo matc_tutang(); ?>" class="form-control" readonly=""/> 
                            </td>
                        </tr>
                        <tr>
                            <th>Nội dung đánh giá:</th>
                            <td>
                                <input type="text" name="txtNoiDungTC" value="" class="form-control" /> 
                            </td>
                        </tr>
                        <tr>
                            <th>Mức điểm:</th>
                            <td>
                                <input type="text" name="txtMucDiem" value="" class="form-control" /> 
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2" align="center">
                                <button type="submit" name="btnThem" class="btn btn-primary" style="width: 20%;">
                                    <img src="images/save-as-icon.png"> Thêm
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
