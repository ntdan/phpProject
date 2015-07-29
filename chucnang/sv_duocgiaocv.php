<?php
        include_once 'thuvien/db.php';
        
/*======================== Danh sách công việc được giao của sinh viên ==================================*/ 
        function sv_sodongcv($mssv){
        $count = 0;

        $sqlSelect = "SELECT * FROM dangky_nhom dk".
                    " JOIN nhom_thuc_hien nth ON dk.manhomthuchien=nth.manhomthuchien".
                    " JOIN thuc_hien th ON nth.manhomthuchien=th.manhomthuchien".
                    " JOIN cong_viec cv ON th.macv=cv.macv".
                    " WHERE dk.mssv='$mssv'";
        $ds = mysql_query($sqlSelect);

        if(isset($ds))
            $count = mysql_num_rows($ds);

        return $count;
    }
    function danhsach_viecduocgiao($hoten){
        global $sodongtrentrang;
            $tongsodong = sv_sodongcv($mssv); 
            $tranghientai = 1;
            if(isset($_GET['page']))
                    $tranghientai = $_GET['page'];

            $tongsotrang = $tongsodong%$sodongtrentrang > 0 ? 
                    ($tongsodong/$sodongtrentrang + 1) : $tongsodong/$sodongtrentrang;

            $vitridong = $sodongtrentrang*($tranghientai-1);

            $sqlSelect = "SELECT cv.macv,cv.congviec,cv.giaocho,cv.ngaybatdau_kehoach,cv.ngayketthuc_kehoach".
                                 ",cv.uutien,cv.trangthai,cv.noidungthuchien,cv.tiendo".
                         " FROM dangky_nhom dk".
                         " JOIN nhom_thuc_hien nth ON dk.manhomthuchien=nth.manhomthuchien".
                         " JOIN thuc_hien th ON nth.manhomthuchien=th.manhomthuchien".
                         " JOIN cong_viec cv ON th.macv=cv.macv".
                         " WHERE dk.mssv='$mssv'".
                         " LIMIT $vitridong, $sodongtrentrang";
            $ds = mysql_query($sqlSelect);

            $macv = "";
            $tencv = "";
            $bdkehoach = "";
            $ktkehoach = "";
            $uutien = "";
            $giaocho = "";
            $noidung = "";
            $trangthai = "";
            $tiendo = 0;

            $stt = 1 + $vitridong;

            global $hinhcapnhat;
            global $hinhxoa;

            while(list($macv,$tencv,$bdkehoach,$ktkehoach,$uutien,$giaocho,$noidung,$trangthai,$tiendo) = mysql_fetch_array($ds))
            { 
                 $dong = "<tr>".
                             "<td align='center'>$stt</td>".
                             "<td>$tencv</td>".
                             "<td>$trangthai</td>".
                             "<td>$bdkehoach</td>".
                             "<td>$ktkehoach</td>".
                             "<td>$uutien</td>".
                             "<td>$giaocho</td>".
                             "<td>$noidung</td>".
                             "<td>$tiendo</td>".
                        "</tr>";                         

                 $stt++;
                 echo $dong;
            }	

            if($tongsodong > $sodongtrentrang)
            {
                    $trang = 1;	
                    echo "<tr><td colspan='9'><div class=\"col-md-12\" align=\"center\">";

                    echo phanTrang($tongsodong, $tranghientai);
                    echo "</div></td></tr>";
            }
    }
?>
