<?php
    include_once 'thuvien/db.php';

/*====================== Xem tiêu chí đánh giá ====================================*/
    function tc_xem($matc){
        $sql = "SELECT * FROM tieu_chi_danh_gia WHERE matc='$matc'";
        $dstc = mysql_query($sql);
        if(mysql_num_rows($dstc) > 0){
            return mysql_fetch_array($dstc);
        }else 
            return NULL;          
    }
/*====================== Xóa tiêu chí đánh giá ====================================*/
    function tc_xoa($matc){
        $sql = "DELETE FROM tieu_chi_danh_gia WHERE matc='$matc'";
        mysql_query($sql);
    }
/*====================== Thêm tiêu chí đánh giá ====================================*/
    function tc_them($matc,$noidungtc,$heso){
        $sql = "INSERT INTO tieu_chi_danh_gia(matc,noidungtc,heso,ngaytao) VALUES('$matc','$noidungtc',$heso,now())";
        mysql_query($sql);
    }
/*====================== Cập nhật tiêu chí đánh giá ====================================*/
    function tc_sua($matc,$noidungtc,$heso){
        $sql = "UPDATE tieu_chi_danh_gia SET noidungtc='$noidungtc',heso=$heso,ngaytao=now()
                WHERE matc='$matc'";
        mysql_query($sql);
        //echo $sql;
    }
/*====================== Danh sách tiêu chí đánh giá ====================================*/
    function tc_danhsach(){
        $sql = "SELECT * FROM tieu_chi_danh_gia";
        $dstc = mysql_query($sql);
        if(mysql_num_rows($dstc)>0){
            return $dstc;
        }
        else return null;
    }
?>
