<?php 
    function getDetail($id){
        $connect = connectSQL();
        $sql = "SELECT * FROM san_pham";
        $result = $connect->query($sql);
        if($result->num_rows > 0) {
            $rows = $result->fetch_all(MYSQLI_ASSOC); 
              return $rows;
        }
    }
    
?>