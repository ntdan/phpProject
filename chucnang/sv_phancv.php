<?php
    include_once 'thuvien/db.php';
    
/*====================== Xem tên Đề tài của 1 nhóm ====================================*/
    function xem_dtthuchien($manth){
        $sql = "SELECT *".
                " FROM de_tai dt".
                " JOIN ra_de_tai radt ON dt.madt=radt.madt".
                " WHERE radt.manhomthuchien='$manth'";
        $dtth = mysql_query($sql);
        if(mysql_num_rows($dtth)>0){
            return mysql_fetch_array($dtth);
        }  else {
                return null;
        }
    }
/*====================== Xem công việc ====================================*/
    function cv_xem(){
        $sql = "SELECT * FROM cong_viec";
        $dscv = mysql_query($sql);
        if(mysql_num_rows($dscv)>0){
            return mysql_fetch_array($dscv);
        }  else {
                return NULL;
        }
    }
    
/*====================== Xóa công việc ====================================*/
    function cv_xoa($macv){
        $sql = "DELETE FROM cong_viec WHERE macv='$macv'";
        mysql_query($sql);
    }
/*====================== Thêm công việc ====================================*/
    function cv_them($macv,$tencv,$giaocho,$bdkehoach,$ketthuctkehoach,$bdthucte,$ketthucte,$sogio_thucte,
            $taisdcv,$uutien,$trangthai,$tiendo,$ndthuchien,$ghichu)
    {
        $sql = "INSERT INTO cong_viec(macv,congviec,giaocho,ngaybatdau_kehoach,ngayketthuc_kehoach,ngaybatdau_thucte,".
                                "ngayketthuc_thucte,sogio_thucte,taisudung_cv,uutien,trangthai,tiendo,noidungthuchien,ghichu". 
                    "VALUES('$macv','$tencv','$giaocho','$bdkehoach','$ketthuctkehoach','$bdthucte','$ketthucte',$sogio_thucte,".
                        "'$taisdcv','$uutien','$trangthai',$tiendo,'$ndthuchien','$ghichu')";
        mysql_query($sql);
    }
/*====================== Cập nhật công việc ====================================*/    
    function cv_sua($macv,$tencv,$giaocho,$bdkehoach,$ketthuctkehoach,$bdthucte,$ketthucte,$sogio_thucte,
            $taisdcv,$uutien,$trangthai,$tiendo,$ndthuchien,$ghichu)
    {
        $sql = "UPDATE cong_viec SET congviec='$tencv',giaocho='$giaocho',ngaybatdau_kehoach='$bdkehoach',ngayketthuc_kehoach='$ketthuctkehoach',".
                                "ngaybatdau_thucte='$bdthucte',ngayketthuc_thucte='$ketthucte',sogio_thucte=$sogio_thucte,".
                                "taisudung_cv='$taisdcv',uutien='$uutien',trangthai='$trangthai',tiendo=$tiendo,noidungthuchien='$ndthuchien',ghichu='$ghichu'". 
                    "WHERE macv='$macv'";
        mysql_query($sql);
    }



?>
