<?php
        include_once 'thuvien/db.php';
        
/*======================== Danh sách công việc được giao của sinh viên ==================================*/ 
    function sv_sodongcvduocgiao($mssv){
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
    function danhsach_viecduocgiao($mssv,$hoten,$manth){
        global $sodongtrentrang;
            $tongsodong = sv_sodongcvduocgiao($mssv); 
            $tranghientai = 1;
            if(isset($_GET['page']))
                    $tranghientai = $_GET['page'];

            $tongsotrang = $tongsodong%$sodongtrentrang > 0 ? 
                    ($tongsodong/$sodongtrentrang + 1) : $tongsodong/$sodongtrentrang;

            $vitridong = $sodongtrentrang*($tranghientai-1);
            
            $sqlSelect = "SELECT distinct cv.macv,cv.congviec,cv.giaocho,cv.ngaybatdau_kehoach,cv.ngayketthuc_kehoach".
                                 ",cv.sogio_thucte,cv.phuthuoc_cv,cv.uutien,cv.trangthai,cv.tiendo,cv.noidungthuchien".
                         " FROM dangky_nhom dk".
                         " JOIN nhom_thuc_hien nth ON dk.manhomthuchien=nth.manhomthuchien".
                         " JOIN thuc_hien th ON nth.manhomthuchien=th.manhomthuchien".
                         " JOIN cong_viec cv ON th.macv=cv.macv".
                         " WHERE th.manhomthuchien='$manth' AND (cv.giaocho like '$hoten' OR cv.giaocho like 'cả nhóm')".
                         " LIMIT $vitridong, $sodongtrentrang";
            $ds = mysql_query($sqlSelect);
            
            $macv = "";
            $tencv = "";
            $giaocho = "";
            $bdkehoach = "";
            $ktkehoach = "";
            $sogio = 0;
            $phuthuoc = "";
            $uutien = "";
            $trangthai = "";
            $tiendo = 0;
            $noidung = "";

            $stt = 1 + $vitridong;

            global $hinhcapnhat;
            global $hinhxoa;
            
            while(list($macv,$tencv,$giaocho,$bdkehoach,$ktkehoach,$sogio,$phuthuoc,
                    $uutien,$trangthai,$tiendo,$noidung) = mysql_fetch_array($ds))
            { 
                    $dong = "<tr>".
                             "<td align='center'>$stt</td>".
                            "<td><a href='#' data-toggle=\"tooltip\" data-placement=\"bottom\" title='Nội dung thực hiện: $noidung'>".
                                       "$tencv".
                            "</a></td>".
                             "<td>$giaocho</td>".
                             "<td align='center'>$bdkehoach</td>".
                             "<td align='center'>$ktkehoach</td>".
                             "<td align='center'>$sogio</td>".
                             "<td align='center'>$phuthuoc</td>".
                             "<td align='center'>$uutien</td>".
                             "<td align='center'>$trangthai</td>".
                             "<td>".
                                "<div class=\"progress\">".  
                                    "<div class=\"progress-bar\" role=\"progressbar\" aria-valuenow='$tiendo' aria-valuemin='0' aria-valuemax='100' style='width:$tiendo%'>".  
                                        "<p style='color: orange;'>$tiendo% </p>". 
                                    "</div>".  
                                "</div>".  
                             "</td>".
                        "</tr>"; 
                    
                echo $dong;                                         
                $stt++;
            }	

            if($tongsodong > $sodongtrentrang)
            {
                    $trang = 1;	
                    echo "<tr><td colspan='10'><div class=\"col-md-12\" align=\"center\">";

                    echo phanTrang($tongsodong, $tranghientai);
                    echo "</div></td></tr>";
            }
    }
?>
