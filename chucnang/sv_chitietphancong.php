<?php
    include_once 'thuvien/db.php';
    
/*====================== Xem công việc của 1 phụ thuộc nhóm theo mã công việc chính ====================================*/    
    function thongtin_cvNhom($manth, $macv){
        $sql = "SELECT * ".
                " FROM cong_viec cv".
                " JOIN thuc_hien th ON cv.macv=th.macv".
                " WHERE th.manhomthuchien='$manth' AND cv.macv='$macv'";
        $dscv = mysql_query($sql);
        //echo $sql;
        if(mysql_num_rows($dscv)>0){
            return mysql_fetch_array($dscv);
        }
        else {
                return NULL;
        }
    }
/*====================== Danh sách công việc chính của 1 côg việc phụ thuộc ====================================*/   
    function maCVchinh($manth,$macv){
        $sql = "SELECT *".
                " FROM nhom_thuc_hien nth".
                " JOIN thuc_hien th ON nth.manhomthuchien=th.manhomthuchien".
                " JOIN cong_viec cv on th.macv=cv.macv".
                " WHERE th.manhomthuchien='$manth' AND cv.macv='$macv'";
        $dsct = mysql_query($sql);
        //echo $sql;
        if(mysql_num_rows($dsct)>0){
            return mysql_fetch_array($dsct);
        }
        else return NULL;
        
    }
/*======================== Xóa công việc phụ thuộc ==================================================*/
    function xoa_cvphu($manth,$macv){
        $connect = mysqli_connect('localhost','root','','qlnienluan_ktpm');
        
        $sqlDelete = "DELETE FROM thuc_hien WHERE macv='$macv' AND manhomthuchien='$manth';".
                     " DELETE FROM cong_viec WHERE macv='$macv'";
        //echo $sqlDelete;
        mysqli_multi_query($connect,$sqlDelete);
    }
/*====================== Lấy mã công việc mà cv đang cập nhật phụ thuộc ====================================*/   
function xem_maCVphuthuoc($manth){
        $sql = "SELECT *".
                " FROM nhom_thuc_hien nth".
                " JOIN thuc_hien th ON nth.manhomthuchien=th.manhomthuchien".
                " JOIN cong_viec cv on th.macv=cv.macv".
                " WHERE th.manhomthuchien='$manth' AND cv.phuthuoc_cv='0'";;
        $ds = mysql_query($sql);
        echo "<select class=\"form-control\" size='1' name='cbMaCvPhuThuoc'>";
        while($row = mysql_fetch_array($ds)){
            echo "<option value='$row[macv]'>$row[macv]</option>";
        }
        echo "</select>";
    }
 /*====================== Danh sách công việc cho từng thành viên ====================================*/
    function sodong_chitietcv($macv){
        $count = 0;

        $sqlSelect = "SELECT * FROM cong_viec WHERE phuthuoc_cv='$macv'";
        $dscv = mysql_query($sqlSelect);

        if(isset($dscv))
            $count = mysql_num_rows($dscv);

        return $count;
    }   
    function ds_chitietcv($manth,$macv){
            $cvchinh = cv_chinh($manth,$macv);
            if($cvchinh == NULL){
                return;
            }            
            $cvchinh = mysql_fetch_array($cvchinh);
        
        global $sodongtrentrang;
            $tongsodong = sodong_chitietcv($macv); 
            $tranghientai = 1;
            if(isset($_GET['page']))
                    $tranghientai = $_GET['page'];

            $tongsotrang = $tongsodong%$sodongtrentrang > 0 ? 
                    ($tongsodong/$sodongtrentrang + 1) : $tongsodong/$sodongtrentrang;

            $vitridong = $sodongtrentrang*($tranghientai-1);

            $sqlSelect = "SELECT macv,congviec,giaocho,ngaybatdau_thucte,ngayketthuc_thucte".
                         ",sogio_thucte,phuthuoc_cv,trangthai,tiendo,noidungthuchien,ghichu".
                         " FROM cong_viec WHERE phuthuoc_cv='$macv'".
                         " LIMIT $vitridong, $sodongtrentrang";
            $ds = mysql_query($sqlSelect);

            $macv = "";
            $tencv = "";
            $giaocho = "";
            $bdthucte = "";
            $ketthucte = "";
            $sogio_thucte = 0;
            $phuthuoc = "0";
            $trangthai = "";
            $tiendo = 0;
            $ndthuchien = "";
            $ghichu = "";

            $stt = 1 + $vitridong;

            global $hinhcapnhat;
            global $hinhxoa;
 //Cập nhật nếu trang thai = 'Hoàn thành' thì cập nhật tiến độ = 100          
            $trangthaicn = strcasecmp($trangthai, 'Hoàn thành');
            if($trangthaicn == 0){
                $sqltiendo = "UPDATE cong_viec SET tiendo=100 WHERE macv='$macv'";
            }
            
            while(list($macv,$tencv,$giaocho,$bdthucte,$ketthucte,$sogio_thucte,$phuthuoc,$trangthai,$tiendo,$ndthuchien,$ghichu) = mysql_fetch_array($ds))
            {           
                //Cập nhật nếu trang thai = 'Hoàn thành' thì cập nhật tiến độ = 100          
                    $trangthaicn = strcasecmp($trangthai, 'Hoàn thành');
                    if($trangthaicn == 0){
                        $sqltiendo = "UPDATE cong_viec SET tiendo=100 WHERE macv='$macv'";
                    }
                    
                 $dong = "<tr>".
                            "<td>$stt</td>".
                            "<td>$macv</td>".
                            "<td>$tencv</td>".
                            "<td>$giaocho</td>".
                            "<td>$bdthucte</td>".
                            "<td>$ketthucte</td>".
                            "<td>$sogio_thucte</td>".
                            "<td>$ndthuchien</td>".
                            "<td>".
                                "<div class=\"progress\">".
                                    "<div class='progress-bar progress-bar-success' role='progressbar' aria-valuenow='$tiendo' aria-valuemin='0' aria-valuemax='100' style='width: $tiendo%;'>".
                                      "$tiendo%".
                                    "</div>".
                                "</div>".
                            "</td>".
                            "<td align='center'>".
                                "<a href='?cn=capnhatchitietphancong&id_manth=$manth&id_macv=$macv'><img src='$hinhcapnhat' /></a>&nbsp;&nbsp;&nbsp;".
                                "<a onclick=\"return confirm('Công việc --$tencv-- sẽ bị xóa?');\" href='?cn=dschitietphancong&id_manth=$manth&id_macv=".$cvchinh['macv']."&page=$tranghientai&id_macvphu=$macv'>".
                                    "<img src='$hinhxoa'/>".
                                "</a> ".
                            "</td>".
                        "</tr>";

                 $stt++;
                 echo $dong;
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
