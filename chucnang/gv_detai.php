<?php
    include_once 'thuvien/db.php';

/*====================== Xem đề tài ====================================*/
    function dt_xem($madt){
        $sql = "SELECT * 
                FROM de_tai AS dt 
                JOIN giang_vien AS gv ON dt.macb=gv.macb
                JOIN ra_de_tai AS radt ON dt.madt = radt.madt
                JOIN nhom_hocphan AS hp ON radt.manhomhp = hp.manhomhp
                JOIN nien_khoa AS nk ON hp.mahk_nk = nk.mahk_nk
                WHERE dt.madt='$madt'";
        $ds = mysql_query($sql);
        
        if(mysql_num_rows($ds)>0){
            return mysql_fetch_array($ds);
        }  
        else return NULL;
    }

/*====================== Xóa đề tài ====================================*/
    function dt_xoa($madt){
        $sql = "DELETE FROM de_tai WHERE madt='$madt'";
        mysql_query($sql);
    } 
/*====================== Thêm đề tài ====================================*/
    function dt_them($madt,$macb,$tendt,$mota,$congnghe,$taptin,$songuoi,$phanloai,$trangthai,$duyet,$ngaytao,$ghichu){
        $sql = "INSERT INTO de_tai(madt,macb,tendt,motadt,congnghe,taptindinhkem,songuoitoida,phanloai,trangthai,duyet,ngaytao,ghichu) 
                        VALUES('$madt','$macb','$tendt','$mota','$congnghe','$taptin',$songuoi,'$phanloai','$trangthai',$duyet,'$ngaytao','$ghichu')";
    
        mysql_query($sql);
    }
    
/*====================== Cập nhật đề tài ====================================*/
    function dt_sua($madt,$macb,$tendt,$mota,$congnghe,$taptin,$songuoi,$phanloai,$trangthai,$duyet,$ghichu){
        $sql = "UPDATE de_tai SET madt='$madt',$madt,macb='$macb',tendt='$tendt',motadt='$mota',congnghe='$congnghe',".
                    "taptindinhkem='$taptin',songuoitoida=$songuoi,phanloai='$phanloai',trangthai='$trangthai',".
                    "duyet=$duyet,ngaytao=now(),ghichu='$ghichu'".
                "WHERE madt='$madt'";     
        mysql_query($sql);
    }
    
/*====================== Danh sách đề tài - Phân trang ====================================*/
    function sodong(){
        $count = 0;

        $sqlSelect = "SELECT madt FROM de_tai";
        $ds = mysql_query($sqlSelect);

        if(isset($ds))
            $count = mysql_num_rows($ds);

        return $count;
    }
    function dt_danhsach(){
        global $sodongtrentrang;
            $tongsodong = sodong(); 
            $tranghientai = 1;
            if(isset($_GET['page']))
                    $tranghientai = $_GET['page'];

            $tongsotrang = $tongsodong%$sodongtrentrang > 0 ? 
                    ($tongsodong/$sodongtrentrang + 1) : $tongsodong/$sodongtrentrang;

            $vitridong = $sodongtrentrang*($tranghientai-1);

            $sqlSelect = "SELECT madt,tendt,motadt,congnghe,taptindinhkem,songuoitoida,phanloai,duyet,ngaytao,ghichu". 
                         "FROM de_tai".
                         " LIMIT $vitridong, $sodongtrentrang";
            $ds = mysql_query($sqlSelect);

            $madt= "";
            $tendt = "";
            $mota = "";
            $congnghe = "";
            $taptin = "";
            $songuoi = 0;
            $phanloai = "";
            $trangthai = "";
            $duyet = 0;
            $ngaytao = "";
            $ghichu = "";

            $stt = 1 + $vitridong;

            global $hinhcapnhat;
            global $hinhxoa;
            global $check;
            global $uncheck;
            global $tinyPDF;

            while(list($madt,$macb,$tendt,$mota,$congnghe,$taptin,$songuoi,$phanloai,$trangthai,$duyet,$ngaytao,$ghichu) 
                    = mysql_fetch_array($ds))
            {           
                 $dong = "<tr>".
                            "<td>$stt</td>".
                            "<td style='font-weight: bold;'>".
                                "<a href='#'>$tendt</a><br>".
                                "<a href='#'  align='center'><input type='image' src='$tinyPDF' name=''></a>".
                            "</td>".
                            "<td>$mota</td>". 
                            "<td>$congnghe</td>".
                            "<td align='center'>$songuoi</td>".
                            "<td>$ghichu</td>";
                            "<td>$phanloai</td>".
                            "<td align='center'>".
                                "<a href='#'><input type='image' src='$duyet==1 ? $check:$uncheck' name=''></a>".
                            "</td>".                           
                            "<td align='center'>".
                                "<a href='?cn=suadetai&id=$madt'><input type='image' src='$hinhcapnhat' name=''></a>&nbsp;&nbsp;&nbsp;".
                                "<input type='image' src='$hinhxoa' name=''>". 
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
