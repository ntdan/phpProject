

<?php
    include_once 'thuvien/db.php';
    
    function hocky_nienkhoa()
    {
        $sql = "SELECT distinct(nam) nam FROM nien_khoa order by mank desc";
        $hk_nk = mysql_query($sql);
        
        
        $hk="";
        echo '<td align="right">Năm học: </td>
            <td><select name="cbNienKhoa" class="form-control">';
        while($hk = mysql_fetch_array($hk_nk))
        {
            echo '<option value="'.$hk['nam'].'">'.$hk['nam'].'</option>';
        }
        echo  ' </select> 
            <td align="right">Học kỳ:</td>
            <td><select name="cbHocKy" class="form-control">';
        
        $sql = "SELECT distinct(hocky) hocky FROM nien_khoa order by mank desc";
        $hk_nk = mysql_query($sql);
        while($hk = mysql_fetch_array($hk_nk))
        {
            echo '<option value="'.$hk['hocky'].'">'.$hk['hocky'].'</option>';
        }
        echo'    </select></td>';
        
    }
?>
