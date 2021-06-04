<?php 
    function listProduct (){
        $connect = connectSQL();
        $sql = "SELECT id, anh_dai_dien, name, mo_ta_chi_tiet, gia_ban, gia_canh_tranh FROM san_pham";
        $result = $connect->query($sql);
        if($result->num_rows > 0) {
            $rows = $result->fetch_all(MYSQLI_ASSOC); 
              return $rows;
        }
    }
?>