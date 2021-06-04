<?php
//function kết nối với SQL và lấy data ra từ bảng menu để có được giá trị của mảng
 function getMenu(){
    $connect = connectSQL();
    $sql = "SELECT name FROM menu WHERE del < 1 ORDER BY rank ASC";
    $result = $connect->query($sql);
    if($result->num_rows > 0) {
       $rows = $result->fetch_all(MYSQLI_ASSOC); 
       return $rows;
   }
 }
 
?>