<?php
    include_once 'thuvien/db.php';
    
/*====================== Danh sách thành viên ====================================*/
     function danhsach_thanhvien($manth){
         //nth.manhomthuchien, sv.hoten, dk.nhomtruong, dt.tendt
        $sql = "SELECT *". 
                " FROM nhom_thuc_hien nth".
                " JOIN dangky_nhom dk ON nth.manhomthuchien = dk.manhomthuchien".
                " JOIN sinh_vien sv ON dk.mssv=sv.mssv".
                " WHERE nth.manhomthuchien='$manth'";
        $ds = mysql_query($sql);
echo $sql;
        if(mysql_num_rows($ds)>0){
            return $ds;
        }
        else return null;
    }
/*====================== Danh sách đề tài của các nhóm thực hiện ====================================*/    
    function detai_nhom($manth){
        $sql = "SELECT * FROM de_tai dt JOIN ra_de_tai radt ON dt.madt=radt.madt WHERE radt.manhomthuchien='$manth'";
        $kq = mysql_query($sql);
        if(mysql_num_rows($kq)>0){
            return $kq;
        }
        else return null;
    }
 /*====================== Danh sách công việc chính của công việc phụ thuộc====================================*/   
    function cv_chinh($manth,$macv){
        $sql = "SELECT *".
                " FROM nhom_thuc_hien nth".
                " JOIN thuc_hien th ON nth.manhomthuchien=th.manhomthuchien".
                " JOIN cong_viec cv on th.macv=cv.macv".
                " WHERE th.manhomthuchien='$manth' AND cv.macv='$macv' AND cv.phuthuoc_cv='0'";
        $dsct = mysql_query($sql);
        //echo $sql;
        if(mysql_num_rows($dsct)>0){
            return $dsct;
        }
        else return NULL;
        
    }
  /*====================== Danh sách công việc chính của 1 nhóm niên luận ====================================*/   
    function nhomcv_chinh($manth){
        $sql = "SELECT *".
                " FROM nhom_thuc_hien nth".
                " JOIN thuc_hien th ON nth.manhomthuchien=th.manhomthuchien".
                " JOIN cong_viec cv on th.macv=cv.macv".
                " WHERE th.manhomthuchien='$manth' AND cv.phuthuoc_cv='0'";
        $dsct = mysql_query($sql);
        //echo $sql;
        if(mysql_num_rows($dsct)>0){
            return $dsct;
        }
        else return NULL;
        
    }
 /*====================== Danh sách công việc phụ thuộc ====================================*/
    function cv_phuthuoc($macv){
        $sql = "SELECT macv,congviec,giaocho,ngaybatdau_kehoach,ngayketthuc_kehoach,ngaybatdau_thucte,ngayketthuc_thucte".
                      ",sogio_thucte,phuthuoc_cv,trangthai,tiendo,noidungthuchien,ghichu".
               " FROM cong_viec".
               " WHERE phuthuoc_cv='$macv'";
        $dscv = mysql_query($sql);
        if(mysql_num_rows($dscv)>0){
            return $dscv;
        }
        else return NULL;
        
    }
/*====================== Danh sách công việc cho từng thành viên ====================================*/
  function sodong_cvphuthuoc($macv){
        $count = 0;

        $sqlSelect = "SELECT * FROM cong_viec WHERE phuthuoc_cv='$macv'";
        $dscv = mysql_query($sqlSelect);

        if(isset($dscv))
            $count = mysql_num_rows($dscv);

        return $count;
    }   
    function gv_ds_chitietcv($macv){
        global $sodongtrentrang;
            $tongsodong = sodong_cvphuthuoc($macv); 
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
            //echo $sqlSelect;

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

            while(list($macv,$tencv,$giaocho,$bdthucte,$ketthucte,$sogio_thucte,$phuthuoc,$trangthai,
                    $tiendo,$ndthuchien,$ghichu) = mysql_fetch_array($ds))
            {                     
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
                     "</tr>";

                 $stt++;
                 echo $dong;
            }	

            if($tongsodong > $sodongtrentrang)
            {
                
                    $trang = 1;	
                    echo "<tr><td colspan='9'>".
                             "<div class=\"col-md-12\" align=\"center\">";

                    echo phanTrang($tongsodong, $tranghientai);
                    echo     "</div></td>".
                         "</tr>";
            }
    }    
    

"select distinct nth.manhomthuchien, cv.congviec, cv.giaocho, cv.tiendo, cv.ngaybatdau_thucte, cv.ngayketthuc_thucte, cv.sogio_thucte, cv.noidungthuchien
from cong_viec cv 
join thuc_hien th on cv.macv=th.macv
join nhom_thuc_hien nth on th.manhomthuchien=th.manhomthuchien
where th.manhomthuchien = NTH02"
?>
