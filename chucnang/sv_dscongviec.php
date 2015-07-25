<?php
    include_once 'thuvien/db.php';

/*====================== Danh sách công việc ====================================*/
      function sodong_cv(){
        $count = 0;

        $sqlSelect = "SELECT macv FROM cong_viec";
        $dscv = mysql_query($sqlSelect);

        if(isset($dscv))
            $count = mysql_num_rows($dscv);

        return $count;
    }
    function cv_danhsach(){
        global $sodongtrentrang;
            $tongsodong = sodong_cv(); 
            $tranghientai = 1;
            if(isset($_GET['page']))
                    $tranghientai = $_GET['page'];

            $tongsotrang = $tongsodong%$sodongtrentrang > 0 ? 
                    ($tongsodong/$sodongtrentrang + 1) : $tongsodong/$sodongtrentrang;

            $vitridong = $sodongtrentrang*($tranghientai-1);

            $sqlSelect = "SELECT macv,congviec,giaocho,ngaybatdau_kehoach,ngayketthuc_kehoach,ngaybatdau_thucte,".
                                "ngayketthuc_thucte,sogio_thucte,uutien,trangthai,tiendo,noidungthuchien,ghichu". 
                         " FROM cong_viec".
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
            $uutien = "";
            $trangthai = "";
            $tiendo = 0;
            $ndthuchien = "";
            $ghichu = "";

            $stt = 1 + $vitridong;

            global $hinhcapnhat;
            global $hinhxoa;

            while(list($macv,$tencv,$giaocho,$bdkehoach,$ketthuctkehoach,$bdthucte,$ketthucte,$sogio_thucte,
                    $uutien,$trangthai,$tiendo,$ndthuchien,$ghichu) = mysql_fetch_array($ds))
            {          
                 $dong = "<tr>".
                            "<td align='center'>$stt</td>".
                            "<td style='font-weight: bold;'>".
                                "<a href='#'>$tencv</a><br>".
                            "</td>".
                            "<td align='center'>$trangthai</td>".
                            "<td>$giaocho</td>". 
                            "<td>$bdkehoach</td>".
                            "<td>$ketthuctkehoach</td>".
                            "<td>$bdthucte</td>".
                            "<td>$ketthucte</td>".
                            "<td align='center'>$sogio_thucte</td>".
                            "<td>$tiendo</td>".
                            "<td>$ndthuchien</td>".            
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


?>
<!-- cv_danhsach($manth)
        "SELECT macv,congviec,giaocho,ngaybatdau_kehoach,ngayketthuc_kehoach,ngaybatdau_thucte,".
                    "ngayketthuc_thucte,sogio_thucte,uutien,trangthai,tiendo,noidungthuchien,ghichu". 
             " FROM cong_viec cv".
             " JOIN thuc_hien th ON cv.macv=th.macv".
             " WHERE th.manhomthuchien='$manth'".
             " LIMIT $vitridong, $sodongtrentrang";-->