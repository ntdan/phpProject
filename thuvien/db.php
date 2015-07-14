<?php
    $conn = mysql_connect('localhost', 'root', '') or die('Không kết nối được với CSDL!');
    mysql_select_db('qlnienluan_ktpm',$conn);
    mysql_set_charset('utf8',$conn); //chỉ cần thêm dòng này để không bị lỗi phông khi load từ CSDL
    
    function bo_dau_cau($str){
        if(!$str) return false;
        $unicode = array( 
            'a'=>'á|à|ả|ã|ạ|ă|ắ|ặ|ằ|ẳ|ẵ|â|ấ|ầ|ẩ|ẫ|ậ', 
            'd'=>'đ', 
            'e'=>'é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ', 
            'i'=>'í|ì|ỉ|ĩ|ị', 
            'o'=>'ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ', 
            'u'=>'ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự', 
            'y'=>'ý|ỳ|ỷ|ỹ|ỵ',
            'A'=>'Á|À|Ả|Ã|Ạ|Ă|Ắ|Ặ|Ằ|Ẳ|Ẵ|Â|Ấ|Ầ|Ẩ|Ẫ|Ậ', 
            'D'=>'Đ', 
            'E'=>'É|È|Ẻ|Ẽ|Ẹ|Ê|Ế|Ề|Ể|Ễ|Ệ', 
            'I'=>'Í|Ì|Ỉ|Ĩ|Ị', 
            'O'=>'Ó|Ò|Ỏ|Õ|Ọ|Ô|Ố|Ồ|Ổ|Ỗ|Ộ|Ơ|Ớ|Ờ|Ở|Ỡ|Ợ', 
            'U'=>'Ú|Ù|Ủ|Ũ|Ụ|Ư|Ứ|Ừ|Ử|Ữ|Ự', 
            'Y'=>'Ý|Ỳ|Ỷ|Ỹ|Ỵ'

         );
        foreach($unicode as $nonUnicode=>$uni) $str = preg_replace("/($uni)/i",$nonUnicode,$str);
        return $str;
    }
    function lay_ten($hoten){
        if(isset($hoten)){
            $hten = trim($hoten);
            $mang = explode(" ", $hten);
            $n = count($mang);
            $ten = $mang[$n-1];
            
            return bo_dau_cau($ten);
        }   
    }
    
    $thumucHinhDaiDien = "hinhdaidien";

?>
