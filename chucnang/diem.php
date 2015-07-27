<?php
    include_once 'thuvien/db.php';

    'select dk.mssv, nth.manhomthuchien, ctd.matc, ctd.diem
from chitiet_diem ctd
join nhom_thuc_hien nth on ctd.manhomthuchien=nth.manhomthuchien
join dangky_nhom dk on nth.manhomthuchien=dk.manhomthuchien'
?>
