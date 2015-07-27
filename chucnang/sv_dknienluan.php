<?php
    include_once 'thuvien/db.php';

    
/*====================== Xem thông tin cán bộ của 1 đề tài ====================================*/  
     function dt_canbo($manhp){
        $sql = "SELECT * FROM de_tai dt JOIN giang_vien gv ON dt.macb=gv.macb".
                " JOIN ra_de_tai radt ON dt.madt=radt.madt".
                " JOIN nhom_hocphan hp ON radt.manhomhp=hp.manhomhp WHERE radt.manhomhp='$manhp'";
        $ds = mysql_query($sql);
        
        if(mysql_num_rows($ds)>0){
            return mysql_fetch_array($ds);
        }  
        else return NULL;
    }
/*====================== Xem đề tài của 1 GV ====================================*/
    function detai_canbo($macb){
        $sql = "SELECT * FROM de_tai WHERE macb='$macb'";
        $ds = mysql_query($sql);
        
        echo "<select class=\"form-control\" size='1' name='cbTenDT'>";
        while($row = mysql_fetch_array($ds)){
            echo "<option value='$row[tendt]'>$row[tendt]</option>";
        }
        echo "</select>";
    }
?>
