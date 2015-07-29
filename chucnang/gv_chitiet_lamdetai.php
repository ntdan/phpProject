<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<?php
    include_once 'thuvien/db.php';
    
    function sodong_chitiet_thdt($macb){
        $count = 0;
        $sqlSelect = "SELECT nth.manhomthuchien, dt.tendt".
                        " FROM nhom_thuc_hien nth". 
                        " JOIN ra_de_tai radt ON nth.manhomthuchien = radt.manhomthuchien".
                        " JOIN nhom_hocphan hp ON radt.manhomhp = hp.manhomhp".
                        " JOIN de_tai dt ON radt.madt = dt.madt".
                        " WHERE dt.macb='$macb'";                
        $ds = mysql_query($sqlSelect);

        if(isset($ds))
            $count = mysql_num_rows($ds);

        return $count;
    }
    
    
//Lấy danh sách đề tài của các nhóm trong 1 học kỳ niên khóa nào đó.
    function d_lamDeTai($macb){
        $sql = "select *".
                " from nhom_thuc_hien nth". 
                " join dangky_nhom dk on nth.manhomthuchien = dk.manhomthuchien".
                " join sinh_vien sv on dk.mssv = sv.mssv".
                " join nhom_hocphan hp on dk.manhomhp = hp.manhomhp".
                " join ra_de_tai radt on nth.manhomthuchien = radt.manhomthuchien".
                " join de_tai dt on radt.madt = dt.madt".
                " WHERE dt.macb='$macb'";
        $ds = mysql_query($sql);
    }

    function danhsach_lamDeTai($macb){
        global $sodongtrentrang;
            $tongsodong = sodong_thdt($macb); 
            $tranghientai = 1;
            if(isset($_GET['page']))
                    $tranghientai = $_GET['page'];

            $tongsotrang = $tongsodong%$sodongtrentrang > 0 ? 
                    ($tongsodong/$sodongtrentrang + 1) : $tongsodong/$sodongtrentrang;

            $vitridong = $sodongtrentrang*($tranghientai-1);

            $sqlSelect = "SELECT nth.manhomthuchien, dt.tendt, sv.hoten, nth.tochucnhom, nth.lichhop, nth.sogio_thucte, nth.tiendo".
                            " FROM nhom_thuc_hien nth". 
                            " JOIN dangky_nhom dk ON nth.manhomthuchien = dk.manhomthuchien".
                            " JOIN sinh_vien sv ON dk.mssv = sv.mssv".
                            " JOIN nhom_hocphan hp ON dk.manhomhp = hp.manhomhp".
                            " JOIN ra_de_tai radt ON nth.manhomthuchien = radt.manhomthuchien".
                            " JOIN de_tai dt ON radt.madt = dt.madt".
                            " WHERE dt.macb='$macb' AND dk.nhomtruong=1".
                            " LIMIT $vitridong, $sodongtrentrang";                    
            $ds = mysql_query($sqlSelect);

            $manth = "";
            $tendt = "";
            $sv = "";
            $tochuc = "";
            $lichhop = "";
            $gioduan = 0;
            $tiendo = 0;

            $stt = 1 + $vitridong;

            global $hinhcapnhat;
            global $hinhxoa;
            global $check;
            global $uncheck;
            global $tinyPDF;

            while(list($manth,$tendt,$sv,$tochuc,$lichhop,$gioduan,$tiendo) = mysql_fetch_array($ds))
            {         
                $b = "";
                $buoi = substr($lichhop, 0,1);
                $bs = strcasecmp($buoi, 'S');
                $bc = strcasecmp($buoi, 'C');
                
                if($bs == 0){
                    $b="Sáng thứ "; 
                }
                else if($bc == 0){
                    $b="Chiều thứ "; 
                }
                $so = substr($lichhop,1,1);
                
                 $dong = "<tr>".
                            "<td align='center'>$stt</td>".
                            "<td align='center'>$manth</td>".
                            "<td><a href='?cn=chitietkehoach&id_nth=$manth'>$tendt</a></td>".
                            "<td align='center'>$sv</td>".
                            "<td>$tochuc</td>".
                            "<td align='center'>$b$so</td>".
                            "<td align='center'>$gioduan giờ</td>".
                            "<td>".
                                "<div class=\"progress\">".  
                                    "<div class=\"progress-bar\" role=\"progressbar\" aria-valuenow=$tiendo aria-valuemin='0' aria-valuemax='100' style='width:$tiendo%;'>".  
                                        "<p style='color:orange;'>$tiendo%</p>".  
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
                    echo "<tr><td colspan='8'><div class=\"col-md-12\" align=\"center\">";

                    echo phanTrang($tongsodong, $tranghientai);
                    echo "</div></td></tr>";
            }
    }


    'select nth.manhomthuchien, dt.tendt, sv.hoten, nth.tochucnhom, nth.lichhop, nth.tiendo
from nhom_thuc_hien nth 
join dangky_nhom dk on nth.manhomthuchien = dk.manhomthuchien
join sinh_vien sv on dk.mssv = sv.mssv
join nhom_hocphan hp on dk.manhomhp = hp.manhomhp
join ra_de_tai radt on nth.manhomthuchien = radt.manhomthuchien
join de_tai dt on radt.madt = dt.madt
where dt.macb=2134 and dk.nhomtruong=1'
            
?>
