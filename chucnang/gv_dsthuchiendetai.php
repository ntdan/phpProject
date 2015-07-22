<?php

    function xem_dslamDeTai(){
        $sql = "";
        $ds = mysql_query($sql);
        if(mysql_num_rows($ds)>0){
            return mysql_fetch_array($ds);
        }
        else return NULL;
    }
?>
