<?php
    include_once 'thuvien/db.php';
    
/*====================== Danh sách thành viên ====================================*/
     function danhsach_thanhvien($manth){
        $sql = "SELECT nth.manhomthuchien, sv.hoten, dk.nhomtruong". 
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



?>
