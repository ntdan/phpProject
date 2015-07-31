<?php
    include_once 'thuvien/db.php';
    
    /*====================== Xem mã công việc của 1 nhóm ====================================*/
    function chon_tenCVchinh($manth,$matl,$submit){
        $sql = "SELECT *".
                " FROM ".
                " JOIN  ON ".
                " JOIN  on ".
                " WHERE  AND ";
        $ds = mysql_query($sql);
        $str = "onchange=\"document.forms[0].submit()\"";
        if($submit == FALSE){
            echo $str = "";
        }
        echo "<select onchange=\"document.forms['frm'].submit()\" class=\"form-control\" size='1' name='cbMaCV'>";
        while($row = mysql_fetch_array($ds)){
            echo "<option value='$row[macv]'>$row[congviec]</option>";
        }
        echo "</select>";
    }
?>
