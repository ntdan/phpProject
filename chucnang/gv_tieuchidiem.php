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
    function tc_them($macb,$matc,$noidungtc,$heso){
        $connect = mysqli_connect('localhost', 'root', '', 'qlnienluan_ktpm');
        mysqli_set_charset($connect, 'utf8');
        
        $sql = "INSERT INTO tieu_chi_danh_gia(matc,noidungtc,heso,ngaytao) VALUES('$matc','$noidungtc',$heso,now());".
                " INSERT INTO quy_dinh(macb,matc) VALUES('$macb','$matc')";
        mysqli_multi_query($sql);
    }
/*====================== Cập nhật tiêu chí đánh giá ====================================*/
    function tc_sua($matc,$noidungtc,$heso){
        $sql = "UPDATE tieu_chi_danh_gia SET noidungtc='$noidungtc',heso=$heso,ngaytao=now()
                WHERE matc='$matc'";
        mysql_query($sql);
        //echo $sql;
    }
/*====================== Danh sách tiêu chí đánh giá của 1 cán bộ ====================================*/
    function tc_danhsach($macb){
        $sql = "SELECT * FROM tieu_chi_danh_gia tc".
                " JOIN quy_dinh qd ON tc.matc=qd.matc".
                " WHERE qd.macb='$macb'";
        $dstc = mysql_query($sql);
        
        if(mysql_num_rows($dstc)>0){
            return $dstc;
        }
        else return null;
    }
/*====================== Mã tiêu chí tự tăng ====================================*/
    function matc_tutang(){
        $sqlMaTC = "SELECT matc FROM tieu_chi_danh_gia ORDER BY matc DESC";
        $kq = mysql_query($sqlMaTC);

        if(mysql_num_rows($kq)>0){
            $macuoi = mysql_fetch_array($kq);
            $ma = $macuoi['matc'];  //Lấy mã cuối cùng của nhóm thưc hiện
            return $so = (int)$ma + 1;
        }     
    }
?>
