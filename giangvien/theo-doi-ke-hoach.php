<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
    <style type="text/css">
            th{
                text-align: center;
                color: darkblue;
                background-color: #dff0d8;
            }
            #bang1 th{
                text-align: left;                
                color: darkblue;
                background-color: #dff0d8;
            }
    </style>
    
    <?php
        include_once 'chucnang/gv_dsthuchiendetai.php';
        include_once 'chucnang/hocky_nienkhoa.php';
        
        $macb = '2134';

    ?>
        
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h3 style="color: darkblue; font-weight: bold;">Theo dõi kế hoạch thực hiện đề tài</h3> 
            <table class="table table-bordered" cellpadding="15px" cellspacing="0px" align='center'>
                <tr>
                    <?php hocky_nienkhoa();?> 
                    <th align='right' width="12%">Nhóm học phần:</th>
                    <th width="8%">
                        <select class="form-control">
                            <option value="1">01</option>
                            <option value="2">02</option>
                            <option value="3">03</option>
                        </select>
                    </th>
                    <th></th>
                </tr>
            </table>
            <table class="table table-bordered table-hover" width="800px" cellpadding="15px" cellspacing="0px" align='center'>
                <tr>
                    <th width="1%">STT</th>
                    <th width="5%">Mã nhóm</th>
                    <th width="20%">Tên đề tài</th>
                    <th width="10%">Trưởng nhóm</th>
                    <th width="15%">Tổ chức nhóm</th>
                    <th width="4%">Lịch họp</th>
                    <th width="6%">Thời gian làm dự án</th>
                    <th width="10%">Trạng thái(%)</th>
                </tr>
                <?php danhsach_lamDeTai($macb); ?>
            </table>                    
        </div>
    </div> <!-- /row -->
</div> <!-- /container -->
