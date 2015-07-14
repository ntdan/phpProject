<?php
    include 'thuvien/db.php';

    function sv_xem($mssv){
        $sql = "SELECT * FROM sinh_vien WHERE mssv='$mssv'";
        $ds_sv = mysql_query($sql);
        
        if(mysql_num_rows($ds_sv)>0){
            return mysql_fetch_array($ds_sv);
        }
        else return null;
    }
    function sv_xoa($mssv){
        $sql = "DELETE FROM sinh_vien WHERE mssv='$mssv'";
        mysql_query($sql);
    }
    function sv_them($mssv,$ten,$gt,$ngaysinh,$khoahoc,$email,$sdt,$hinh,$congnghe,$laptrinh,$kinhnghiem,$matkhau,$khoa){
        $mk = md5($matkhau);
        $sql = "INSERT INTO sinh_vien(mssv,hoten,gioitinh,ngaysinh,khoahoc,email,sdt,hinhdaidien,kynangcongnghe,kienthuclaptrinh,kinhnghiem,matkhau,ngaytao,khoa) 
                    VALUES('$mssv','$ten','$gt','$ngaysinh',$khoahoc,'$email',$sdt,'$hinh','$congnghe','$laptrinh','$kinhnghiem','$mk',now(),$khoa)";
        mysql_query($sql);
        echo $sql;
    }
    function sv_themchitiet($mssv,$hinh,$congnghe,$laptrinh,$kinhnghiem){
        $sql = "UPDATE sinh_vien SET hinhdaidien='$hinh',kynangcongnghe='$congnghe',kienthuclaptrinh='$laptrinh',kinhnghiem='$kinhnghiem' 
                    WHERE mssv='$mssv'";
        mysql_query($sql);
    }
    function sv_sua($mssv,$ten,$gt,$ngaysinh,$khoahoc,$email,$sdt,$hinh,$congnghe,$laptrinh,$kinhnghiem,$matkhau,$khoa){
        $mk = md5($matkhau);
        $sql = "UPDATE sinh_vien SET mssv='$mssv',hoten='$ten',gioitinh='$gt',ngaysinh='$ngaysinh',
                    khoahoc=$khoahoc,email='$email',sdt=$sdt,hinhdaidien='$hinh',kynangcongnghe='$congnghe',
                    kienthuclaptrinh='$laptrinh',kinhnghiem='$kinhnghiem',matkhau='$mk',ngaytao=now(),khoa=$khoa
                WHERE mssv='$mssv'";
        mysql_query($sql);
    }    
    function sv_doimatkhau($mssv,$hinh,$matkhau){
        $mk = md5($matkhau);
        $sql = "UPDATE sinh_vien SET hinhdaidien='$hinh',matkhau='$mk'
                    WHERE mssv='$mssv'";
        mysql_query($sql);
    }
    function sv_danhsach(){
        $sql = "SELECT * FROM sinh_vien";
        $ds_sv = mysql_query($sql);
        
        if(mysql_num_rows($ds_sv)>0){
            return $ds_sv;
        }
        else return null;
    }
?>
