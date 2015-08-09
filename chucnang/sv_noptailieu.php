<?php
    include_once 'thuvien/db.php';
    
/*====================== Thêm tài liệu ====================================*/   
    function sv_themtailieu($matl,$macv,$tentl,$kichthuoc,$mota,$dc){
        $sql = "INSERT INTO tai_lieu(matl,macv,tentl,kichthuoc,mota,ngaycapnhat,dieuchinh)".
                    " VALUES('$matl','$macv','$tentl',$kichthuoc,'$mota',now(),$dc)";
        $kq = mysql_query($sql);
        echo $sql;
    }
 /*====================== Xóa tài liệu ====================================*/
    function sv_xoaTL($matl){
        
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
            if($so<=9){
                $pre .="0";
                return $mamoi = $pre .= $so;
            }
            else if($so >= 10)
                return  $mamoi = $pre .=$so;
         }else return $mamoi = 'TL01';
        
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
