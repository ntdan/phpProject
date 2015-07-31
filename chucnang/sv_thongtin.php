<?php

    include_once 'thuvien/db.php';
    
/* ======================== Lây các mã khi đã đăng ký nhóm niên luận của 1 sv======================= */
    function sv_maNhomNL($mssv){
        $sqlNhom = "SELECT mssv,manhomhp,manhomthuchien,nhomtruong FROM dangky_nhom WHERE mssv='$mssv'";
        $manhom = mysql_query($sqlNhom);
       
        if(mysql_num_rows($manhom) > 0){
            return mysql_fetch_array($manhom);
        }
    }
 /* ======================== Lây mã cán bộ hướng dẫn niên luận của 1 sv======================= */
    function sv_maCB($mssv){
        $sqlMa = "SELECT dk.mssv, dt.macb FROM dangky_nhom dk".
                 " JOIN ra_de_tai radt ON dk.manhomhp=radt.manhomhp".
                 " JOIN de_tai dt ON radt.madt=dt.madt".
                 " WHERE mssv='$mssv'";
        $macb = mysql_query($sqlMa);
       
        if(mysql_num_rows($macb) > 0){
            return mysql_fetch_array($macb);
        }
    }
/* ======================== Lay thong tin sv======================= */
    function sv_xem($mssv) {
        $sql = "SELECT * FROM sinh_vien WHERE mssv='$mssv'";
        $ds_sv = mysql_query($sql);

        if (mysql_num_rows($ds_sv) > 0) {
            return mysql_fetch_array($ds_sv);
        }
        else
            return null;
    }

/* ======================== Xoa thong tin sv======================= */

    function sv_xoa($mssv) {
        $sql = "DELETE FROM sinh_vien WHERE mssv='$mssv'";
        mysql_query($sql);
    }

/* ======================== Them thong tin sv======================= */

    function sv_them($mssv, $ten, $gt, $ngaysinh, $khoahoc, $email, $sdt, $hinh, $congnghe, $laptrinh, $kinhnghiem, $matkhau, $khoa) {
        $mk = md5($matkhau);
        $sql = "INSERT INTO sinh_vien(mssv,hoten,gioitinh,ngaysinh,khoahoc,email,sdt,hinhdaidien,kynangcongnghe,kienthuclaptrinh,kinhnghiem,matkhau,ngaytao,khoa) 
                        VALUES('$mssv','$ten','$gt','$ngaysinh',$khoahoc,'$email',$sdt,'$hinh','$congnghe','$laptrinh','$kinhnghiem','$mk',now(),$khoa)";
        mysql_query($sql);
        //echo $sql;
    }

/* ======================== Them thong tin khac ======================= */

    function sv_themchitiet($mssv, $hinh, $congnghe, $laptrinh, $kinhnghiem) {
        $sql = "UPDATE sinh_vien SET hinhdaidien='$hinh',kynangcongnghe='$congnghe',kienthuclaptrinh='$laptrinh',kinhnghiem='$kinhnghiem' 
                        WHERE mssv='$mssv'";
        mysql_query($sql);
    }

/* ======================== Cap nhat thong tin sv ======================= */

    function sv_sua($mssv, $ten, $gt, $ngaysinh, $khoahoc, $email, $sdt, $hinh, $congnghe, $laptrinh, $kinhnghiem, $matkhau, $khoa) {
        $mk = md5($matkhau);
        $sql = "UPDATE sinh_vien SET mssv='$mssv',hoten='$ten',gioitinh='$gt',ngaysinh='$ngaysinh',
                        khoahoc=$khoahoc,email='$email',sdt=$sdt,hinhdaidien='$hinh',kynangcongnghe='$congnghe',
                        kienthuclaptrinh='$laptrinh',kinhnghiem='$kinhnghiem',matkhau='$mk',ngaytao=now(),khoa=$khoa
                    WHERE mssv='$mssv'";
        mysql_query($sql);
    }

/* ======================== Doi mat khau sv ======================= */

    function sv_doimatkhau($mssv, $hinh, $matkhau) {
        $mk = md5($matkhau);
        $sql = "UPDATE sinh_vien SET hinhdaidien='$hinh',matkhau='$mk'
                        WHERE mssv='$mssv'";
        mysql_query($sql);
    }

/* ======================== Lay danh sách thong tin sv ======================= */

    function sv_danhsach() {

        $sql = "SELECT * FROM sinh_vien";
        $ds_sv = mysql_query($sql);

        if (mysql_num_rows($ds_sv) > 0) {
            return $ds_sv;
        }
        else
            return null;
    }
 /*======================== Danh sach phan trang =======================*/
    function sodong_sv(){
        $count = 0;

        $sqlSelect = "SELECT mssv FROM sinh_vien";
        $ds = mysql_query($sqlSelect);

        if(isset($ds))
            $count = mysql_num_rows($ds);

        return $count;
    }
    function danhsach_sv()
    {
         global $sodongtrentrang;
         $tongsodong = sodong_sv(); 
         $tranghientai = 1;
         if(isset($_GET['page']))
                 $tranghientai = $_GET['page'];

         $tongsotrang = $tongsodong%$sodongtrentrang > 0 ? 
                 ($tongsodong/$sodongtrentrang + 1) : $tongsodong/$sodongtrentrang;

         $vitridong = $sodongtrentrang*($tranghientai-1);

         $sqlSelect = "SELECT mssv,hoten,email,ngaytao,khoa FROM sinh_vien".
                                         " LIMIT $vitridong, $sodongtrentrang";
         $ds = mysql_query($sqlSelect);

         $mssv= "";
         $ten = "";
         $email = "";
         $ngaytao = "";
         $key = 0;

         $stt = 1 + $vitridong;

         global $hinhcapnhat;
         global $hinhxoa;
         global $lock;
         global $unlock;

         while(list($mssv, $ten, $email, $ngaytao, $key) = mysql_fetch_array($ds))
         {                     
                 $dong = "<tr>".
                             "<td align='center'>$stt</td>".
                             "<td align='center'>$mssv</td>".
                             "<td>$ten</td>".
                             "<td>$email</td>".
                             "<td>..NULL..</td>".                                        
                             "<td align='center'>$ngaytao</td>".
                             "<td align='center'>".
                                 "<a href='#'><img src='$unlock'></a>".
                             "</td>".
                             "<td align='center'>".
                                  "<a href='?cn=capnhatsinhvien&id=$mssv'><input type='image' src='$hinhcapnhat' name=''></a>&nbsp;&nbsp;&nbsp;".
                                  "<a onclick=\"return confirm('Sinh viên --$ten-- sẽ bị xóa?');\" href='?cn=qtsv&page=$tranghientai&id=$mssv'><img src='$hinhxoa'/></a> ".
                             "</td>".
                         "</tr>";

                 $stt++;
                 echo $dong;
         }	

         if($tongsodong > $sodongtrentrang)
         {
                 $trang = 1;	
                 echo "<tr><td colspan='8'><div class=\"col-md-12\" align=\"center\">";

                 echo phanTrang($tongsodong, $tranghientai);
                 echo "</div></td></tr>";
         }
     } 
?>
