<?php
    $conn = mysql_connect('localhost', 'root', '') or die('Không kết nối được với CSDL!');
    mysql_select_db('qlnienluan_ktpm',$conn);
    mysql_set_charset('utf8',$conn); //chỉ cần thêm dòng này để không bị lỗi phông khi load từ CSDL

?>
