<?php
    include_once 'thuvien/db.php';
    
/*====================== Xem thông tin cán bộ của 1 đề tài ====================================*/  
     function dt_canbo($manhp){
        $sql = "SELECT * FROM de_tai dt JOIN giang_vien gv ON dt.macb=gv.macb".
                " JOIN ra_de_tai radt ON dt.madt=radt.madt".
                " JOIN nhom_hocphan hp ON radt.manhomhp=hp.manhomhp WHERE radt.manhomhp='$manhp'";
        $ds = mysql_query($sql);
        
        if(mysql_num_rows($ds)>0){
            return mysql_fetch_array($ds);
        }  
        else return NULL;
    }
/*====================== Xem đề tài của 1 GV ====================================*/
    function detai_canbo($macb){
        $sql = "SELECT * FROM de_tai WHERE macb='$macb'";
        $ds = mysql_query($sql);
        
        echo "<select class=\"form-control\" size='1' name='cbTenDT'>";
        while($row = mysql_fetch_array($ds)){
            echo "<option value='$row[tendt]'>$row[tendt]</option>";
        }
        echo "</select>";
    }
/*====================== Lấy mssv của 1 nhóm hoc phần ====================================*/
    function lay_mssv($manhomhp){
        $sql = "SELECT distinct mssv, manhomhp FROM dangky_nhom WHERE manhomhp='$manhomhp'";
        $ds = mysql_query($sql);
        if(mysql_num_rows($ds)>0){
            return $ds;
        }
        else
            return null;
    }
 /*====================== Đăng ký thành viên nhóm ====================================*/
    function sv_dangkythanhvien($mssv,$manhomhp,$manhomthuchien,$nhomtruong){
        $sqlDangKy = "INSERT INTO dangky_nhom(mssv,manhomhp,nhomtruong)".
                            " VALUES('$mssv','$manhomhp','$manhomthuchien','$nhomtruong')";
        $kq = mysql_query($sql);
        
    }
 /*====================== Lưu kết quả đăng ký đề tài nhóm niên luận ====================================*/
    function sv_dangky($madt,$mahp,$manth,$lichhop,$tochucnhom,$bdkh,$ktkh,$bdtt,$kttt,$giothucte,$tiendo,$hoanthanh,
            $phamvidt,$ghichu,$nhanxet,$chapnhat)
    {
        $connect = mysqli_connect('localhost', 'root', '', 'qlnienluan_ktpm');
        mysqli_set_charset($connect, 'utf8');
        
        $sqlDangKy = "INSERT INTO nhom_thuc_hien(manhomthuchien,lichhop,tochucnhom,ngaybatdau_kehoach,". 
                                "ngayketthuc_kehoach,ngaybatdau_thucte,ngayketthuc_thucte,sogio_thucte".
                                " ,tiendo,hoanthanh,phamvi_detai,ghichu,nhanxet,chapnhan)".
                         " VALUES('$manth','$lichhop','$tochucnhom','$bdkh','$ktkh','$bdtt','$kttt',$giothucte,$tiendo,$hoanthanh".
                                    ",'$phamvidt','$ghichu','$nhanxet',$chapnhat); ".
                     "INSERT INTO ra_de_tai(madt,manhomhp,manhomthuchien) VALUES($madt,$mahp,$manth)";
        $kq = mysqli_multi_query($sql);
        
    }
?>
