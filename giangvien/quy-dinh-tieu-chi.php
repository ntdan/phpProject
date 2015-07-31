<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
    <style type="text/css">
        th{
            text-align: center;
            background-color: #dff0d8;
        }
    </style>
  
    <?php
        include_once 'chucnang/gv_tieuchidiem.php';

        $macb = '2134';

        if(isset($_GET['id_tc'])){
            tc_xoa($_GET['id_tc']);
        }

        $ds_tc = tc_danhsach($macb);
        if($ds_tc == NULL){
            return;
        }
    ?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h4 style="display:block; float:left; color:blue; font-weight: bold;">BẢNG TIÊU CHÍ ĐÁNH GIÁ KẾT QUẢ NIÊN LUẬN</h4>
            <a href="?cn=themtieuchi" style="margin-left: 50%;">
                <button type="button" class="btn btn-primary" style="width: 10%;">
                    <img src="images/add-icon.png"> Thêm
               </button>
            </a><br>
            <table class="table table-bordered" cellpadding="15px" cellspacing="0px" align='center'>
                <tr>
                    <th width="5%">STT</th>
                    <th>Nội dung đánh giá</th>
                    <th width="10%">Mức điểm</th>
                    <th>Ngày tạo</th>
                    <th>Thao tác</th>
                </tr>
                <?php
                    global $hinhxoa;
                    $tc = null;
                    while($tc = mysql_fetch_array($ds_tc)){
                        echo "<tr>".
                                "<td align='center'>".$tc['matc']."</td>".
                                "<td>".$tc['noidungtc']."</td>".
                                "<td align='center'>".$tc['heso']."</td>".
                                "<td align='center'>".$tc['ngaytao']."</td>".
                                "<td align='center'>".                       
                                    "<a href='?cn=capnhattieuchi&id_tc=".$tc['matc']."'><img src='images/edit-icon.png'></a>&nbsp;&nbsp;".
                                    "<a onclick=\"return confirm('Tiêu chí ".$tc['matc']." sẽ bị xóa?');\" href='?cn=dstc&id_tc=".$tc['matc']."'><img src='$hinhxoa'/></a> ".
                                "</td>".
                            "</tr>";  
                    }                                                         
                ?>                        
            </table>
        </div> 
   </div> <!-- /row -->
</div> <!-- /container -->       

