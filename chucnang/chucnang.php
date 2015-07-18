<?php
    include_once 'thuvien/db.php';
    
/*====================== Xem  ====================================*/
    function _xem(){
        $sql = "SELECT * FROM cong_viec";
        $dscv = mysql_query($sql);
        if(mysql_num_rows($dscv)>0){
            return mysql_fetch_array($dscv);
        }  else {
                return null;
        }
    }
    
/*====================== Xóa  ====================================*/
    function _xoa(){
        
    }
/*====================== Thêm  ====================================*/
    function _them(){
        
    }
/*====================== Cập nhật ====================================*/    
    function _sua(){
        
    }
/*====================== Danh sách  ====================================*/
     function _danhsach(){
        
    }



?>
