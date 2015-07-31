<?php
    include_once 'thuvien/db.php';
    include_once 'sv_diem.php';
     
 /*========================== Lấy thông tin điểm số của mỗi sv trong 1 nhóm niên luận =====================================*/   
    function gv_diem($mssv){
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
    function gv_laysv($manth){
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
    function gv_diem_tc($macb){
        $sql = "SELECT tc.matc,tc.heso FROM tieu_chi_danh_gia tc".
                " JOIN quy_dinh qd ON tc.matc=qd.matc".
                " WHERE qd.macb='$macb'";
        $dstc = mysql_query($sql);

        if(mysql_num_rows($dstc)>0){
            return $dstc;
        }
        else return null;
    }
/*========================== Năm học và hk mà cán bộ hướng dẫn niên luận =====================================*/
    function gv_namhoc_hk($macb){
        $sql = "SELECT nk.nam, nk.hocky".
                " FROM nhom_hocphan hp".
                " JOIN nien_khoa nk ON hp.mank=nk.mank".
                " JOIN ra_de_tai radt ON hp.manhomhp=radt.manhomhp".
                " JOIN de_tai dt ON radt.madt = dt.madt".
                " WHERE dt.macb='$macb'";
        $kq = mysql_query($sql);
       
        if(mysql_num_rows($kq)>0){
            $row = mysql_fetch_array($kq);
                echo  "<th style='width:4%;'>Năm học:".
                           "<input style='text-align:center' type='text' name='txtNamHoc' value='".$row['nam']."' class=\"form-control\" readonly=''/>".
                       "</th>".
                      "<th align='right' width='3%'>Học kỳ:".
                           "<input style='text-align:center' type='text' name='txtHocKi' value='".$row['hocky']."' class=\"form-control\" readonly=''/>".
                      "</th>";                            
            } 
        else            
            return NULL;            
    }
/*========================== Tạo Selectbox: 'tên nhóm học phần, mã nhóm niên luận, đề tài' mà nhóm đăng ký của 1 cán bộ =====================================*/
    function gv_manthdt_hp($macb){        
        $sqlTenHp = "SELECT hp.manhomhp, hp.tennhomhp".
                " FROM nhom_hocphan hp".
                " JOIN nien_khoa nk ON hp.mank=nk.mank".
                " JOIN ra_de_tai radt ON hp.manhomhp=radt.manhomhp".
                " JOIN de_tai dt ON radt.madt = dt.madt".
                " WHERE dt.macb='$macb'";
        $kqTenHp = mysql_query($sqlTenHp);
        echo "<th align='center' width='4%' name='cbNhomHP'>Nhóm học phần:".
                "<select class=\"form-control\" size='1' align='center'>";
        while($rw = mysql_fetch_array($kqTenHp)){
               echo  "<option value='".$rw['manhomhp']."'>".$rw['tennhomhp']."</option>";
        }
        echo "</select></th>";
        
        $sqlMaNhom = "SELECT radt.manhomthuchien".
                " FROM nhom_hocphan hp".
                " JOIN nien_khoa nk ON hp.mank=nk.mank".
                " JOIN ra_de_tai radt ON hp.manhomhp=radt.manhomhp".
                " JOIN de_tai dt ON radt.madt = dt.madt".
                " WHERE dt.macb='$macb'";
        $kqMaNhom = mysql_query($sqlMaNhom);       
        echo "<th align='center' width='6%' name='cbNhomNL'>Nhóm niên luận:".
                "<select class=\"form-control\" size='1' align='center'>";
        while($rw = mysql_fetch_array($kqMaNhom)){
               echo  "<option value='".$rw['manhomthuchien']."'>".$rw['manhomthuchien']."</option>";
        }
        echo "</select></th>";
        
        $sqlDeTai = "SELECT dt.madt, dt.tendt".
                " FROM nhom_hocphan hp".
                " JOIN nien_khoa nk ON hp.mank=nk.mank".
                " JOIN ra_de_tai radt ON hp.manhomhp=radt.manhomhp".
                " JOIN de_tai dt ON radt.madt = dt.madt".
                " WHERE dt.macb='$macb'";
        $kqDT = mysql_query($sqlDeTai);
        echo "<th align='center' width='20%' name='cbTenDT'>Tên đề tài:".
                "<select class=\"form-control\" size='1' align='center'>";
        while($rw = mysql_fetch_array($kqDT)){
               echo  "<option value='".$rw['madt']."'>".$rw['tendt']."</option>";
        }
        echo "</select></th>";
    }

/*========================== Tính tổng điểm của 1 sv =====================================*/
         //Đã viết hàm này trong file 'sv_diem.php'
    
 /*========================== Quy điểm số ra điểm chữ =====================================*/ 
     //Đã viết hàm này trong file 'sv_diem.php'
    
 /*========================== Nhập điểm của các sv trong 1 nhóm niên luận của 1 nhóm học phần ===========================*/ 
    function gv_luudiem($matc,$mssv,$diem){
        $sqlLuuDiem = "INSERT INTO chitiet_diem(matc,mssv,diem) VALUES($matc,$mssv,$diem)";
        mysql_query($sqlLuuDiem);
    }
/*========================== Cập nhật điểm của các sv trong 1 nhóm niên luận của 1 nhóm học phần ===========================*/ 
    function gv_capnhatdiem($matc,$mssv,$diem){
        $sqlCapNhatDiem = "UPDATE chitiet_diem SET diem=$diem WHERE mssv='$mssv' AND matc='$matc'";
        mysql_query($sqlCapNhatDiem);
    }
 ?>
