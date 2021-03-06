<?php
    include_once 'thuvien/db.php';
 
/*====================== Mã đề tài tự tăng ====================================*/
    function madt_tutang(){
        $sql = "SELECT madt FROM de_tai ORDER BY madt DESC";
        $kq = mysql_query($sql);
        
        if(mysql_num_rows($kq)>0){
            $macuoi = mysql_fetch_array($kq);
            $ma = $macuoi['madt'];  //Lấy mã cuối cùng của nhóm thưc hiện
            return $so = (int)$ma + 1;
        }      
    }
 /*====================== Xem đề tài ====================================*/
    function dt_xem($madt){
        $sql = "SELECT * FROM de_tai WHERE madt='$madt'";
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
    function dt_them($madt,$macb,$tendt,$mota,$congnghe,$taptin,$songuoi,$phanloai,$trangthai,$duyet,$ghichu){
        $sql = "INSERT INTO de_tai(madt,macb,tendt,motadt,congnghe,taptindinhkem,songuoitoida,phanloai,trangthai,duyet,ngaytao,ghichudt) 
                        VALUES('$madt','$macb','$tendt','$mota','$congnghe','$taptin',$songuoi,'$phanloai','$trangthai',$duyet,now(),'$ghichu')";
    
        mysql_query($sql);
    }
    
/*====================== Cập nhật đề tài ====================================*/
    function dt_sua($madt,$tendt,$mota,$congnghe,$taptin,$songuoi,$phanloai,$trangthai,$duyet,$ghichu){
        $sql = "UPDATE de_tai SET madt='$madt',tendt='$tendt',motadt='$mota',congnghe='$congnghe',".
                    "taptindinhkem='$taptin',songuoitoida=$songuoi,phanloai='$phanloai',trangthai='$trangthai',".
                    "duyet=$duyet,ngaytao=now(),ghichudt='$ghichu'".
                "WHERE madt='$madt'";     
        mysql_query($sql);
    }
/*====================== Cập nhật Duyệt đề tài ====================================*/
    function capnhat_duyet($madt,$duyet){
        $sql = "UPDATE de_tai SET duyet=$duyet WHERE madt='$madt'";
        mysql_query($sql);
    }
/*====================== Danh sách đề tài - Phân trang ====================================*/
    function sodong_dt($macb){
        $count = 0;

        $sqlSelect = "SELECT madt FROM de_tai WHERE macb='$macb'";
        $ds = mysql_query($sqlSelect);

        if(isset($ds))
            $count = mysql_num_rows($ds);

        return $count;
    }
    function dt_danhsach($macb){
        global $sodongtrentrang;
            $tongsodong = sodong_dt($macb); 
            $tranghientai = 1;
            if(isset($_GET['page']))
                    $tranghientai = $_GET['page'];

            $tongsotrang = $tongsodong%$sodongtrentrang > 0 ? 
                    ($tongsodong/$sodongtrentrang + 1) : $tongsodong/$sodongtrentrang;

            $vitridong = $sodongtrentrang*($tranghientai-1);

            $sqlSelect = "SELECT madt,macb,tendt,motadt,congnghe,taptindinhkem,songuoitoida,phanloai,trangthai,duyet,ngaytao,ghichudt". 
                         " FROM de_tai WHERE macb='$macb'".
                         " LIMIT $vitridong, $sodongtrentrang";
            $ds = mysql_query($sqlSelect);

            $madt = "";
            $macb = "";
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
                 $hd = $duyet == 0 ? $uncheck : $check;
                 //$mta = substr($mota, 0, 50);
                 //$cn = substr($congnghe, 0, 50);
                 //$gchu = substr($ghichu, 0, 50);
                 
                 $dong = "<tr>".
                            "<td>$stt</td>".
                            "<td style='font-weight: bold;'>".
                                "<a href='#'>$tendt</a><br>".
                                "<a href='$taptin'  align='center'><input type='image' src='$tinyPDF' name=''></a>".
                            "</td>".
                            "<td>$mota<br></td>". 
                            "<td>$congnghe<br></td>".
                            "<td align='center'>$songuoi</td>".
                            "<td>$ghichu<br></td>".
                            "<td>$phanloai</td>".
                            "<td align='center'>".
                                "<a href='?cn=dsdt&d=$duyet&id=$madt'><img src='$hd'/></a>".
                            "</td>".                           
                            "<td align='center'>".
                                "<a href='?cn=suadetai&id_dt=$madt'><img src='$hinhcapnhat' /></a>&nbsp;&nbsp;&nbsp;".
                                "<a onclick=\"return confirm('Đề tài --$tendt-- sẽ bị xóa?');\" href='?cn=dsdt&page=$tranghientai&id=$madt'><img src='$hinhxoa'/></a> ".
                            "</td>".            
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
<!--   
/*====================== Thông tin đề tài từ bảng de_tai, giang_vien, ra_de_tai, nhom_hocphan, nien_khoa ====================================*/

      $sql = "SELECT * 
                FROM de_tai AS dt 
                JOIN giang_vien AS gv ON dt.macb=gv.macb
                JOIN ra_de_tai AS radt ON dt.madt = radt.madt
                JOIN nhom_hocphan AS hp ON radt.manhomhp = hp.manhomhp
                JOIN nien_khoa AS nk ON hp.mank = nk.mank
                WHERE dt.macb='$macb' AND dt.madt='$madt'";
        $ds = mysql_query($sql);
    
 /*====================== Chọn năm học ====================================*/   
    function chonNamHoc($mank, $submit)
	{
		$select = "SELECT mank,nam,hocky FROM nien_khoa order by nam";
                $dsNam  = mysql_query($select);
		// document.forms[0].submit(); => click len nut submit
		$str = " onChange=\"document.forms[0].submit();\" ";
		if($submit == false)
			$str = "";
			
        // dem so dong nhan duoc
        if(mysql_num_rows($dsNam) > 0)
        {
			echo "<select name='cbmNamHoc' $str>";
				echo "<option value='-1'>";
					echo "Tất cả";
				echo "</option>";
				while($row = mysql_fetch_array($dsNam))
				{
					if($lsp==$row['mank'])
					{
						echo "<option selected value='".$row['mank']."'>";
					}else
					{
						echo "<option value='".$row['mank']."'>";
					}
					echo $row['nam'];
					echo "</option>";
				}
			echo "</select>";
		}
		else
		{
			return "";
		}
	}
-->
