<?php
    include_once 'thuvien/db.php';
    
/*====================== Xem  ====================================*/
    function thongtinnhom_thuchien($manth){
        $sql = "SELECT * FROM nhom_thuc_hien WHERE manhomthuchien='$manth'";
        $dsn = mysql_query($sql);
        if(mysql_num_rows($dsn)>0){
            return mysql_fetch_array($dsn);
        }  else {
                return null;
        }
    }
   
?>
