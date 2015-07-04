<?php

function thongtin_gv($ma){
   $select ="SELECT macb, hoten, email, sdt FROM giangvien where $ma";
   $ttgv = mysql_query($select);
   
   while($row = mysql_fetch_assoc($ttgv)){
       if($magv == $row['macb']){
           
       }
   }
}

?>
