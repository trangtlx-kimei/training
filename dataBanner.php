<?php
//function kết nối với SQL và lấy data ra từ bảng banner để có được giá trị của mảng
    function getBanner(){
        $connect = connectSQL();
        $sql = "SELECT * FROM banner";
        $result = $connect->query($sql);
        if($result->num_rows > 0) {
            $rows = $result->fetch_all(MYSQLI_ASSOC);
            return $rows;
        } 
    }
?>
