<?php
    include_once 'thuvien/db.php';
    


 /*====================== Xem tên thành viên của 1 nhóm 'sv.mssv, sv.hoten, nth.manhomthuchien' ====================================*/   
    function xem_thanhvien($manth){
        $sql = "SELECT * FROM sinh_vien sv".
                " JOIN dangky_nhom dk ON sv.mssv=dk.mssv".
                " JOIN nhom_thuc_hien nth ON dk.manhomthuchien=nth.manhomthuchien".
                " WHERE nth.manhomthuchien='$manth'";
        $ds = mysql_query($sql);
        echo "<select class=\"form-control\" size='1' name='cbGiaoCho'>";
        while($row = mysql_fetch_array($ds)){
            echo "<option value='$row[hoten]'>$row[hoten]</option>";
        }
        echo "</select>";
    }
/*====================== Xem mã công việc của 1 nhóm ====================================*/
    function xem_maCV($manth){
        $sql = "SELECT * FROM thuc_hien WHERE manhomthuchien='$manth'";
        $ds = mysql_query($sql);
        echo "<select class=\"form-control\" size='1' name='cbPhuThuoc'>";
        while($row = mysql_fetch_array($ds)){
            echo "<option value='$row[macv]'>$row[macv]</option>";
        }
        echo "</select>";
    }
    
/*====================== Xem tên Đề tài của 1 nhóm ====================================*/
    function xem_dtthuchien($manth){
        $sql = "SELECT *".
                " FROM de_tai dt".
                " JOIN ra_de_tai radt ON dt.madt=radt.madt".
                " WHERE radt.manhomthuchien='$manth'";
        $dtth = mysql_query($sql);
        if(mysql_num_rows($dtth)>0){
            return mysql_fetch_array($dtth);
        }  else {
                return null;
        }
    }
/*====================== Xem công việc ====================================*/
    function cv_xem($manth){
        $sql = "SELECT * FROM cong_viec";
        $dscv = mysql_query($sql);
        if(mysql_num_rows($dscv)>0){
            return mysql_fetch_array($dscv);
        }  else {
                return NULL;
        }
    }
    
/*====================== Xóa công việc ====================================*/
    function cv_xoa($macv){
        $sql = "DELETE FROM cong_viec WHERE macv='$macv'";
        mysql_query($sql);
    }
/*====================== Thêm công việc ====================================*/
    function cv_them($macv,$tencv,$giaocho,$bdkehoach,$ketthuctkehoach,$bdthucte,$ketthucte,$sogio_thucte,
            $phuthuoc,$uutien,$trangthai,$tiendo,$ndthuchien,$ghichu)
    {
        $sql = "INSERT INTO cong_viec(macv,congviec,giaocho,ngaybatdau_kehoach,ngayketthuc_kehoach,ngaybatdau_thucte,".
                                "ngayketthuc_thucte,sogio_thucte,phuthuoc_cv,uutien,trangthai,tiendo,noidungthuchien,ghichu)". 
                    "VALUES('$macv','$tencv','$giaocho','$bdkehoach','$ketthuctkehoach','$bdthucte','$ketthucte',$sogio_thucte,".
                        "'$phuthuoc','$uutien','$trangthai',$tiendo,'$ndthuchien','$ghichu')";
        mysql_query($sql);
        //echo $sql;
    }
/*====================== Cập nhật công việc ====================================*/    
    function cv_sua($macv,$tencv,$giaocho,$bdkehoach,$ketthuctkehoach,$bdthucte,$ketthucte,$sogio_thucte,
            $phuthuoc,$uutien,$trangthai,$tiendo,$ndthuchien,$ghichu)
    {
        $sql = "UPDATE cong_viec SET congviec='$tencv',giaocho='$giaocho',ngaybatdau_kehoach='$bdkehoach',ngayketthuc_kehoach='$ketthuctkehoach',".
                                "ngaybatdau_thucte='$bdthucte',ngayketthuc_thucte='$ketthucte',sogio_thucte=$sogio_thucte,".
                                "phuthuoc_cv='$phuthuoc',uutien='$uutien',trangthai='$trangthai',tiendo=$tiendo,noidungthuchien='$ndthuchien',ghichu='$ghichu'". 
                    "WHERE macv='$macv'";
        mysql_query($sql);
    }

/*====================== Danh sách công việc theo nhóm ====================================*/
      function sodong_cv($manth){
        $count = 0;

        $sqlSelect = "select th.manhomthuchien, cv.macv".
                      " FROM cong_viec cv".
                      " JOIN thuc_hien th ON cv.macv=th.macv".
                      " WHERE th.manhomthuchien = '$manth'";
        $dscv = mysql_query($sqlSelect);

        if(isset($dscv))
            $count = mysql_num_rows($dscv);

        return $count;
    }
    function danhsach_phancv($manth){
        global $sodongtrentrang;
            $tongsodong = sodong_cv($manth); 
            $tranghientai = 1;
            if(isset($_GET['page']))
                    $tranghientai = $_GET['page'];

            $tongsotrang = $tongsodong%$sodongtrentrang > 0 ? 
                    ($tongsodong/$sodongtrentrang + 1) : $tongsodong/$sodongtrentrang;

            $vitridong = $sodongtrentrang*($tranghientai-1);

            $sqlSelect = "SELECT cv.macv,congviec,giaocho,ngaybatdau_kehoach,ngayketthuc_kehoach,ngaybatdau_thucte,".
                                "ngayketthuc_thucte,sogio_thucte,phuthuoc_cv,uutien,trangthai,tiendo,noidungthuchien,ghichu". 
                         " FROM cong_viec cv".
                         " JOIN thuc_hien th ON cv.macv=th.macv".
                         " WHERE th.manhomthuchien='$manth'".
                         " LIMIT $vitridong, $sodongtrentrang";
            $ds = mysql_query($sqlSelect);

            $macv = "";
            $tencv = "";
            $giaocho = "";
            $bdkehoach = "";
            $ketthuctkehoach = "";
            $bdthucte = "";
            $ketthucte = "";
            $sogio_thucte = 0;
            $phuthuoc = 0;
            $uutien = "";
            $trangthai = "";
            $tiendo = 0;
            $ndthuchien = "";
            $ghichu = "";

            $stt = 1 + $vitridong;

            global $hinhcapnhat;
            global $hinhxoa;

            while(list($macv,$tencv,$giaocho,$bdkehoach,$ketthuctkehoach,$bdthucte,$ketthucte,$sogio_thucte,$phuthuoc,
                    $uutien,$trangthai,$tiendo,$ndthuchien,$ghichu) = mysql_fetch_array($ds))
            {          
                 $dong = "<tr>".
                            "<td>$stt</td>".
                            "<td>$macv</td>".
                            "<td>$tencv</td>".
                            "<td>$giaocho</td>".
                            "<td>$bdkehoach</td>".
                            "<td>$ketthuctkehoach</td>".
                            "<td>$bdthucte</td>".
                            "<td>$ketthucte</td>".
                            "<td>$sogio_thucte</td>".
                            "<td>$ndthuchien</td>".
                            "<td>$phuthuoc</td>".
                            "<td>".
                                "<div class=\"progress\">".  
                                    "<div class=\"progress-bar\" role=\"progressbar\" aria-valuenow='$tiendo' aria-valuemin='0' aria-valuemax='100' style='width:$tiendo%'>".  
                                        "<p style='color: orange;'>$tiendo% </p>". 
                                    "</div>".  
                                "</div>".  
                            "</td>".
                        "</tr>";

                 $stt++;
                 echo $dong;
            }	

            if($tongsodong > $sodongtrentrang)
            {
                
                    $trang = 1;	
                    echo "<tr><td colspan='11'><div class=\"col-md-12\" align=\"center\">";

                    echo phanTrang($tongsodong, $tranghientai);
                    echo "</div></td></tr>";
            }
    }
/*====================== Danh sách công việc cho từng thành viên ====================================*/
    
?>
