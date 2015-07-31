<?php
    include_once '../thuvien/db.php';
    
/*====================== Xem  ====================================*/
  
/*====================== Danh sách  ====================================*/
     function gv_dangnhap($tendangnhap,$matkhau){
         $mk = md5($matkhau);
        $sqlGV = "SELECT * FROM giang_vien WHERE macb='$tendangnhap' AND matkhau='$mk'";
        $kqgv = mysql_query($sqlGV);
        //echo $sqlGV;
        
        if(mysql_num_rows($kqgv)>0){
            $rw = mysql_fetch_array($kqgv);
            return $rw['hoten']; //$tendangnhap;
        }
        else 
            return "";
        
    }
    function sv_dangnhap($tendangnhap,$matkhau){
         $mk = md5($matkhau);
        $sqlSV = "SELECT * FROM sinh_vien WHERE mssv='$tendangnhap' AND matkhau='$mk'";
        $kqsv = mysql_query($sqlSV);
        //echo $sqlSV;
        
        if(mysql_num_rows($kqsv)>0){
           $rw = mysql_fetch_array($kqsv); 
           return $rw['hoten']; //$tendangnhap;
        }
        else 
            return "";
        
    }



?>
