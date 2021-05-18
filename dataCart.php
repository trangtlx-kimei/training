<?php 
    function listProduct (){
        $connect = connectSQL();
        $sql = "SELECT id, img, name, description, price_first, price_second FROM product_detail";
        $result = $connect->query($sql);
        if($result->num_rows > 0) {
            $rows = $result->fetch_all(MYSQLI_ASSOC); 
              return $rows;
        }
    }
?>