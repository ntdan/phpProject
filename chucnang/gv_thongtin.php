<?php
    include_once 'thuvien/db.php';
    
/*======================== Lay thong tin gv =======================*/
    function gv_xem($macb){
        $sql = "SELECT *  FROM giang_vien WHERE macb='$macb'";
        $ds = mysql_query($sql);
        if(mysql_num_rows($ds)>0){
            return mysql_fetch_array($ds);
        }
        else return null;
    }
/*======================== Xóa thong tin gv =======================*/
    function gv_xoa($macb){
        $delete = "DELETE FROM giang_vien WHERE macb='$macb'";
        mysql_query($delete);
    }    
 /*   
  * function gv_xoahinh($macb,$hinhdaidien){
        global $thumucHinhDaiDien;
        $sql = "UPDATE giang_vien SET hinhdaidien='' WHERE macb='$macb' ";
        mysql_query($sql);
        
        unlink($thumucHinhDaiDien."/".$hinhdaidien);
    }
  * 
  */
/*======================== Them thong tin gv =======================*/
    function gv_them($macb,$ten,$gt,$ngaysinh,$email,$sdt,$hinh,$matkhau,$khoa,$quantri){
        $mk = md5($matkhau);
        $sql = "INSERT INTO giang_vien(macb,hoten,gioitinh,ngaysinh,email,sdt,hinhdaidien,matkhau,ngaytao,khoa,quantri)
                  VALUES('$macb','$ten','$gt','$ngaysinh','$email',$sdt,'$hinh','$mk',now(),$khoa,1)";

        mysql_query($sql);
       // echo $sql;
    }
/*======================== Cap nhat thong tin gv =======================*/
    function gv_sua($macb,$ten,$gt,$ngaysinh,$email,$sdt,$hinh,$matkhau,$khoa,$quantri){
        $mk = md5($matkhau);
        $sql = "UPDATE giang_vien SET macb='$macb',hoten='$ten',gioitinh='$gt',ngaysinh='$ngaysinh',email='$email',sdt='$sdt',
                   hinhdaidien='$hinh',matkhau='$mk',ngaytao=now(),khoa=$khoa,quantri=$quantri
                WHERE macb='$macb'";
        mysql_query($sql);
        echo $sql;
    }
/*======================== Doi mat khau gv =======================*/
    function gv_doimatkhau($macb,$hinh,$matkhau){
        $mk = md5($matkhau);
        $sql = "UPDATE giang_vien SET hinhdaidien='$hinh',matkhau='$mk'
                    WHERE macb='$macb'";
        mysql_query($sql);
        
        echo $sql;
    }
/*======================== Lay danh sách thong tin gv =======================*/
/*    function gv_danhsach(){
        $sql = "SELECT *  FROM giang_vien";
        $ds = mysql_query($sql);
        if(mysql_num_rows($ds)>0){
            return $ds;
        }
        else return null;
    }*/
/*======================== Danh sach phan trang =======================*/
    function sodong_gv(){
        $count = 0;

        $sqlSelect = "SELECT macb FROM giang_vien";
        $ds = mysql_query($sqlSelect);

        if(isset($ds))
            $count = mysql_num_rows($ds);

        return $count;
    }
    function danhsach_gv()
       {
            global $sodongtrentrang;
            $tongsodong = sodong_gv(); 
            $tranghientai = 1;
            if(isset($_GET['page']))
                    $tranghientai = $_GET['page'];

            $tongsotrang = $tongsodong%$sodongtrentrang > 0 ? 
                    ($tongsodong/$sodongtrentrang + 1) : $tongsodong/$sodongtrentrang;

            $vitridong = $sodongtrentrang*($tranghientai-1);

            $sqlSelect = "SELECT macb,hoten,email,ngaytao,khoa FROM giang_vien".
                                            " LIMIT $vitridong, $sodongtrentrang";
            $ds = mysql_query($sqlSelect);

            $macb= "";
            $ten = "";
            $email = "";
            $ngaytao = "";
            $key = 0;

            $stt = 1 + $vitridong;

            global $hinhcapnhat;
            global $hinhxoa;
            global $lock;
            global $unlock;

            while(list($macb, $ten, $email, $ngaytao, $key) = mysql_fetch_array($ds))
            {                     
                    $dong = "<tr>".
                                "<td align='center'>$stt</td>".
                                "<td align='center'>$macb</td>".
                                "<td>$ten</td>".
                                "<td>$email</td>".
                                "<td>..NULL..</td>".                                        
                                "<td align='center'>$ngaytao</td>".
                                "<td align='center'>".
                                    "<a href='#'><img src='$unlock'></a>".
                                "</td>".
                                "<td align='center'>".
                                     "<a href='?cn=capnhatgiangvien&id=$macb'><img src='$hinhcapnhat' /></a>&nbsp;&nbsp;&nbsp;".
                                     "<a onclick=\"return confirm('Giảng viên --$ten-- sẽ bị xóa?');\" href='?cn=qtgv&page=$tranghientai&id=$macb'><img src='$hinhxoa'/></a> ". 
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
