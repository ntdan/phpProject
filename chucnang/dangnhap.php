<?php
    include_once '../thuvien/db.php';

/*====================== Danh sách  ====================================*/
     function gv_dangnhap($tendangnhap,$matkhau){
         $mk = md5($matkhau);
        $sqlGV = "SELECT macb,hoten,quantri FROM giang_vien".
                 " WHERE macb='$tendangnhap' AND matkhau='$mk' AND khoa=0";
        $kqgv = mysql_query($sqlGV);
        //echo $sqlGV;
        
        if(mysql_num_rows($kqgv)>0){
            $rw = mysql_fetch_row($kqgv);
            $sessionUSER = array(
                "macb" => $rw[0],
                "hoten" => $rw[1],
                "quantri" => $rw[2]
            );
            $_SESSION['user'] = $sessionUSER; 
            return $_SESSION['user'];
        }
        else{
            $_SESSION['user'] = null;
            return "";
        }     
    }
    
    function sv_dangnhap($tendangnhap,$matkhau){
         $mk = md5($matkhau);
        $sqlSV = "SELECT sv.mssv,sv.hoten,dk.nhomtruong FROM sinh_vien sv".
                " JOIN dangky_nhom dk ON sv.mssv=dk.mssv".
                " WHERE sv.mssv='$tendangnhap' AND sv.matkhau='$mk' AND khoa=0";
        $kqsv = mysql_query($sqlSV);
        //echo $sqlSV;
        
        if(mysql_num_rows($kqsv)>0){
           $rw = mysql_fetch_row($kqsv); 
           $sessionUSER = array(
               "mssv" => $rw[0],
               "hoten" => $rw[1],
               "nhomtruong" => $rw[2]
           );
            $_SESSION['user'] = $sessionUSER; 
            return $sessionUSER;
        }
        else{
            $_SESSION['user'] = null;
            return "";
        }          
    }



?>
