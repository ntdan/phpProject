<?php
    include_once '../thuvien/db.php';
    
    function ds_chondetai($macb){
        $sqlDanhSach = "SELECT madt,tendt,motadt,congnghe,songuoitoida FROM de_tai".
                        " WHERE macb='$macb' AND trangthai like 'chưa làm'";
        $ds = mysql_query($sqlDanhSach);
        if(mysql_num_rows($ds)>0){
            return $ds;
        }
        else            
            return NULL;
        
    }
?>
