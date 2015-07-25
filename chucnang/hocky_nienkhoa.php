

<?php
    include_once 'thuvien/db.php';
    
    function hocky_nienkhoa()
    {
        $sql = "SELECT distinct(nam) nam FROM nien_khoa order by mank desc";
        $hk_nk = mysql_query($sql);
        
        
        $hk="";
        echo '<th align="right" width="10%">Năm học: </th>
            <th width="13%"><select name="cbNienKhoa" class="form-control">';
        while($hk = mysql_fetch_array($hk_nk))
        {
            echo '<option value="'.$hk['nam'].'">'.$hk['nam'].'</option>';
        }
        echo  ' </select></th> 
            <th align="right" width="10%">Học kỳ:</th>
            <th width="10%"><select name="cbHocKy" class="form-control">';
        
        $sql = "SELECT distinct(hocky) hocky FROM nien_khoa order by mank desc";
        $hk_nk = mysql_query($sql);
        while($hk = mysql_fetch_array($hk_nk))
        {
            echo '<option value="'.$hk['hocky'].'">'.$hk['hocky'].'</option>';
        }
        echo'    </select></th>';        
    }
    
    function nhomhp($mank){
        $sql = "SELECT * FROM nhom_hocphan WHERE mank='$mank'";
        $kq = mysql_query($sql);
        
        $tenhp = "";
        echo '<td align="right">Nhóm học phần:</td>
              <td><select name="cbNhomHP" class="form-control">';
        while($tenhp = mysql_fetch_array($kq))
        {
            echo '<option value="'.$tenhp['tennhomhp'].'">'.$tenhp['tennhomhp'].'</option>';
        }
        echo '</select></td>';
              
    }
   // echo nhomhp(1);
   
?>
