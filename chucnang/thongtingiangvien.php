<?php
    include 'thuvien/db.php';

    function gv_xem($macb){
        $sql = "SELECT *  FROM giang_vien WHERE macb='$macb'";
        $ds = mysql_query($sql);
        if(mysql_num_rows($ds)>0){
            return mysql_fetch_array($ds);
        }
        else return null;
    }
    function gv_xoa($macb){
        $sql = "DELETE FROM giang_vien WHERE macb='$macb'";
        mysql_query($sql);
    }
    function gv_them($macb,$ten,$gt,$email,$sdt,$hinh,$matkhau,$khoa,$quantri){
        $mk = md5($matkhau);
        $sql = "INSERT INTO giang_vien(macb,hoten,gioitinh,email,sdt,hinhdaidien,matkhau,ngaytao,khoa,quantri)
                  VALUES('$macb','$ten','$gt','$email',$sdt,'$hinh','$mk',now(),$khoa,1)";

        mysql_query($sql);
    }
    function gv_sua($macb,$ten,$gt,$email,$sdt,$hinh,$matkhau,$ngaytao,$khoa,$quantri){
        $mk = md5($matkhau);
        $sql = "UPDATE giang_vien SET macb='$macb',hoten='$ten',giotinh='$gt',email='$email',sdt='$sdt',
                   hinhdaidien='$hinh',matkhau='$mk',ngaytao='$ngaytao',khoa=$khoa,quantri='$quantri'
                  WHERE macb='$macb'";
        mysql_query($sql);
    }
    function gv_danhsach(){
        $sql = "SELECT *  FROM giang_vien";
        $ds = mysql_query($sql);
        if(mysql_num_rows($ds)>0){
            return $ds;
        }
        else return null;
    }
?>
