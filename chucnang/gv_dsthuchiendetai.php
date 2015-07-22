<?php
    include_once 'thuvien/db.php';
    
    function sodong_thdt($macb){
        $count = 0;
        $sqlSelect = "SELECT nth.manhomthuchien, dt.tendt".
                        " FROM nhom_thuc_hien nth". 
                        " JOIN ra_de_tai radt ON nth.manhomthuchien = radt.manhomthuchien".
                        " JOIN nhom_hocphan hp ON radt.manhomhp = hp.manhomhp".
                        " JOIN de_tai dt ON radt.madt = dt.madt".
                        " WHERE dt.macb='$macb'";                
        $ds = mysql_query($sqlSelect);

        if(isset($ds))
            $count = mysql_num_rows($ds);

        return $count;
    }
    
    
//Lấy danh sách đề tài của các nhóm trong 1 học kỳ niên khóa nào đó.
    function danhsach_lamDeTai($macb){
        $sql = "select *".
                " from nhom_thuc_hien nth". 
                " join dangky_nhom dk on nth.manhomthuchien = dk.manhomthuchien".
                " join sinh_vien sv on dk.mssv = sv.mssv".
                " join nhom_hocphan hp on dk.manhomhp = hp.manhomhp".
                " join ra_de_tai radt on nth.manhomthuchien = radt.manhomthuchien".
                " join de_tai dt on radt.madt = dt.madt".
                " WHERE dt.macb='$macb'";
        $ds = mysql_query($sql);

    }

    'select hp.tennhomhp, nth.manhomthuchien, sv.mssv, sv.hoten, radt.madt, dt.tendt
from nhom_thuc_hien nth 
join dangky_nhom dk on nth.manhomthuchien = dk.manhomthuchien
join sinh_vien sv on dk.mssv = sv.mssv
join nhom_hocphan hp on dk.manhomhp = hp.manhomhp
join ra_de_tai radt on nth.manhomthuchien = radt.manhomthuchien
join de_tai dt on radt.madt = dt.madt'
            
?>
