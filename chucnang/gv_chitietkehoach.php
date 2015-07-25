<?php
    include_once 'thuvien/db.php';
    
/*====================== Danh sách thành viên ====================================*/
     function danhsach_thanhvien($manth){
         //nth.manhomthuchien, sv.hoten, dk.nhomtruong, dt.tendt
        $sql = "SELECT *". 
                " FROM nhom_thuc_hien nth".
                " JOIN dangky_nhom dk ON nth.manhomthuchien = dk.manhomthuchien".
                " JOIN sinh_vien sv ON dk.mssv=sv.mssv".
                " WHERE nth.manhomthuchien='$manth'";
        $ds = mysql_query($sql);
        
        if(mysql_num_rows($ds)>0){
            return $ds;
        }
        else return null;
    }
    
    function detai_nhom($manth){
        $sql = "SELECT * FROM de_tai dt JOIN ra_de_tai radt ON dt.madt=radt.madt WHERE radt.manhomthuchien='$manth'";
        $kq = mysql_query($sql);
        if(mysql_num_rows($kq)>0){
            return $kq;
        }
        else return null;
    }
    
    function chitiet_kehoach($manth){
        $sql = "SELECT *".
                " FROM nhom_thuc_hien nth".
                " JOIN thuc_hien th ON nth.manhomthuchien=th.manhomthuchien".
                " JOIN cong_viec cv on th.macv=cv.macv".
                " WHERE th.manhomthuchien='$manth'";
        $dsct = mysql_query($sql);
        if(mysql_num_rows($dsct)>0){
            return $dsct;
        }
        else return NULL;
        
    }

'select distinct nth.manhomthuchien, cv.congviec, cv.giaocho, cv.tiendo, cv.ngaybatdau_thucte, cv.ngayketthuc_thucte, cv.sogio_thucte, cv.noidungthuchien
from cong_viec cv 
join thuc_hien th on cv.macv=th.macv
join nhom_thuc_hien nth on th.manhomthuchien=th.manhomthuchien'
?>
