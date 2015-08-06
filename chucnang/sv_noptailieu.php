<?php
    include_once 'thuvien/db.php';
    
/*====================== Thêm tài liệu ====================================*/   
    function sv_themtailieu($matl,$tentl,$kichthuoc,$mota){
        $sql = "INSERT INTO tai_lieu(matl,tentl,kichthuoc,mota,ngaycapnhat)".
                    " VALUES('$matl','$tentl',$kichthuoc,'$mota',now())";
        $kq = mysql_query($sql);
        echo $sql;
    }
/*====================== Thêm tài liệu được điều chỉnh====================================*/ 
    function sv_CapNhatTL($matl,$tentl,$kichthuoc,$duongdan,$mota,$macv,$madc,$tendc,$phuthuoc_tl,$noidungdc)
    {
        $connect = mysqli_connect('localhost', 'root', '', 'qlnienluan_ktpm');
        mysqli_set_charset($connect, 'utf8');
        
        $sqltl = "INSERT INTO tai_lieu(matl,tentl,kichthuoc,duongdan,mota,ngaycapnhat)".
                        " VALUES('$matl','$tentl',$kichthuoc,'$duongdan','$mota',now());".
                 "INSERT INTO dieu_chinh(macv,matl,madc,tendc,phuthuoc_tl,noidungdc,ngaysua)".
                        " VALUES('$macv','$matl','$madc','$tendc','$phuthuoc_tl','$noidungdc',now())";
        mysqli_multi_query($connect, $sqltl);
    }
/*====================== Mã tài liệu tự tăng ====================================*/
    function matl_tutang(){
        $pre = "TL";
        $sql = "SELECT matl FROM tai_lieu ORDER BY matl DESC";
        $kq = mysql_query($sql);
        
        if(mysql_num_rows($kq)>0){
            $macuoi = mysql_fetch_array($kq);
            $ma = $macuoi['matl'];  //Lấy mã cuối cùng của nhóm thưc hiện
            $so = (int)substr($ma, 2) + 1;
        }
        if($so<=9){
            $pre .="0";
            return $mamoi = $pre .= $so;
        }
        else if($so >= 10)
            return  $mamoi = $pre .=$so;
    }
/*====================== Mã tài liệu tự tăng ====================================*/
    function madc_tutang(){
        $pre = "";
        $sql = "SELECT madc FROM dieu_chinh ORDER BY madc DESC";
        $kq = mysql_query($sql);
        
        if(mysql_num_rows($kq)>0){
            $macuoi = mysql_fetch_array($kq);
            $ma = $macuoi['madc'];  //Lấy mã cuối cùng của nhóm thưc hiện
            $so = (int)$ma + 1;            
        }
        if($so<=9){
            $pre .="0";
            return $mamoi = $pre .= $so;
        }
        else if($so >= 10) return $mamoi = $so;
    } 
 /*====================== Xem mã công việc của 1 nhóm ====================================*/
    function xem_tenCVchinh($manth){
        $sql = "SELECT *".
                " FROM nhom_thuc_hien nth".
                " JOIN thuc_hien th ON nth.manhomthuchien=th.manhomthuchien".
                " JOIN cong_viec cv on th.macv=cv.macv".
                " WHERE th.manhomthuchien='$manth' AND cv.phuthuoc_cv='0'";;
        $ds = mysql_query($sql);
        echo "<select onchange=\"document.forms['frm'].submit()\" class=\"form-control\" size='1' name='cbMaCV'>";
        while($row = mysql_fetch_array($ds)){
            echo "<option value='$row[macv]'>$row[congviec]</option>";
        }
        echo "</select>";
    }
/*====================== Xem mã công việc của 1 nhóm ====================================*/
    function chon_tenCV($manth){
        $sql = "SELECT cv.macv, cv.congviec FROM cong_viec cv".
                " JOIN thuc_hien th ON cv.macv=th.macv".
                " WHERE manhomthuchien = '$manth' AND phuthuoc_cv = '0'";
        $ds = mysql_query($sql);
 
        echo "<select class=\"form-control\" name='cbMaCV'>";
        while($row = mysql_fetch_array($ds)){
            echo "<option value='$row[macv]'>$row[congviec]</option>";                               
        }
        echo "</select>";
    }
?>
