<?php
    include_once 'thuvien/db.php';
     
 /*========================== Lấy thông tin điểm số của mỗi sv trong 1 nhóm niên luận =====================================*/   
    function sv_diem($mssv){
        $sqlDiem = "SELECT mssv, diem".
                   " FROM chitiet_diem".
                   " WHERE mssv='$mssv'";    
         $dsdiem = mysql_query($sqlDiem);
         //echo $sqlDiem;
         if(mysql_num_rows($dsdiem)>0){
             return $dsdiem;
         }
         else return NULL;         
    }
 /*====================== Danh sách thành viên của 1 nhóm ====================================*/   
    function thanhvien($manth){
        $sql = "SELECT * FROM sinh_vien sv".
                " JOIN dangky_nhom dk ON sv.mssv=dk.mssv".
                " JOIN nhom_thuc_hien nth ON dk.manhomthuchien=nth.manhomthuchien".
                " WHERE nth.manhomthuchien='$manth'";
        $ds = mysql_query($sql);
        
        if(mysql_num_rows($ds)>0){
            return $ds;
        }
        else 
            return NULL;
    }
/*====================== Danh sách tiêu chí đánh giá của 1 cán bộ ====================================*/
    function diem_tc($macb){
        $sql = "SELECT tc.heso FROM tieu_chi_danh_gia tc".
                " JOIN quy_dinh qd ON tc.matc=qd.matc".
                " WHERE qd.macb='$macb'";
        $dstc = mysql_query($sql);
        //echo $sql;
        if(mysql_num_rows($dstc)>0){
            return $dstc;
        }
        else return null;
    }
/*========================== Tên nhóm học phần của sv đăng ký =====================================*/
    function namhoc_hp($manth){
        $sql = "SELECT radt.manhomthuchien, nk.nam, nk.hocky, hp.manhomhp, hp.tennhomhp, dt.madt, dt.tendt".
                " FROM nhom_hocphan hp".
                " JOIN nien_khoa nk ON hp.mank=nk.mank".
                " JOIN ra_de_tai radt ON hp.manhomhp=radt.manhomhp".
                " JOIN de_tai dt ON radt.madt = dt.madt".
                " WHERE radt.manhomthuchien='$manth'";
        $kq = mysql_query($sql);
       
        if(mysql_num_rows($kq)>0){
            $row = mysql_fetch_array($kq);
            echo  "<th style='width:6%;'>Năm học:".
                       "<input style='text-align:center' type='text' name='txtNamHoc' value='".$row['nam']."' class=\"form-control\" readonly=''/>".
                   "</th>".
                  "<th align='right' width='4%'>Học kỳ:".
                       "<input style='text-align:center' type='text' name='txtHocKi' value='".$row['hocky']."' class=\"form-control\" readonly=''/>".
                  "</th>".                    
                  "<th align='right' width='6%'>Nhóm học phần:".
                      "<input style='text-align:center' type='text' name='txtTenNhomHP' value='".$row['tennhomhp']."' class=\"form-control\" readonly=''/>".  
                  "</th>".
                  "<th align='right' width='4%'>Mã nhóm:".
                      "<input style='text-align:center' type='text' name='txtMaNhomThucHien' value='".$row['manhomthuchien']."' class=\"form-control\" readonly=''/>".  
                  "</th>".
                  "<th align='right' width='30%'>Đề tài:".
                      "<input type='text' name='txtTenDT' value='".$row['tendt']."' class=\"form-control\" readonly=''/>".                           
                  "</th>";            
        }
        else            
            return NULL;            
    }
/*========================== Tính tổng điểm của 1 sv =====================================*/
    function tongdiem($mssv){
        $sql = "SELECT mssv, sum(diem) tongdiem FROM chitiet_diem WHERE mssv='$mssv'";
        $dstongdiem = mysql_query($sql);
        
        if(mysql_num_rows($dstongdiem)>0){
            $d = mysql_fetch_array($dstongdiem);
            return $d['tongdiem'];
        } 
        else 
            return null;
    }
 /*========================== Quy điểm số ra điểm chữ =====================================*/ 
    function diemchu($mssv){
       $d = tongdiem($mssv);
        if($d<=0 && $d<4){
            return F;
        }
        else if($d<=4 || $d<=4.4){
            return 'D';
        }
        else if($d<=4.5 || $d<=4.9){
            return 'D+';
        }
        else if($d<=5.0 || $d<=5.9){
            return 'C';
        }
        else if($d<=6 || $d<=6.9){
            return 'C+';
        }
        else if($d<=7 || $d<=7.9){
            return 'B';
        }
        else if($d<=8 || $d<=8.9){
            return 'B+';
        }
        else     
            return 'A';
    }
 ?>
