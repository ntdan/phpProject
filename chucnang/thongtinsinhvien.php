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
    function sv_them($mssv,$ten,$gt,$ngaysinh,$khoahoc,$email,$sdt,$hinh,$congnghe,$laptrinh,$kinhnghiem,$matkhau){
        $sql = "INSERT INTO sinh_vien(mssv,hoten,gioitinh,ngaysinh,khoahoc,email,sdt,hinhdaidien,kynangcongnghe,kienthuclaptrinh,kinhnghiem,matkhau) 
                    VALUES('$mssv','$ten','$gt','$ngaysinh',$khoahoc,'$email',$sdt,'$hinh','$congnghe','$laptrinh','$kinhnghiem','$matkhau')";
        mysql_query($sql);
    }
    function sv_sua(){
        $sql = "UPDATE sinh_vien SET mssv='$mssv',hoten='$ten',gioitinh='$gt',ngaysinh='$ngaysinh',
                    khoahoc=$khoahoc,email='$email',sdt=$sdt,hinhdaidien='$hinh',kynangcongnghe='$congnghe',
                    kienthuclaptrinh='$laptrinh',kinhnghiem='$kinhnghiem',matkhau='$matkhau')
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
