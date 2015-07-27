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

    //lấy thông tin nhóm hoc phần mà giảng viên nào đó dạy trong 1 hk năm học nào đó
'select distinct gv.macb, gv.hoten, hp.tennhomhp, nk.nam, nk.hocky
from giang_vien gv
join de_tai dt on gv.macb=dt.macb
join ra_de_tai radt on dt.madt=radt.madt
join nhom_hocphan hp on radt.manhomhp=hp.manhomhp
join nien_khoa nk on hp.mank=nk.mank'

?>
