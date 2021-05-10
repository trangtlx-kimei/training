<?php
//  include 'connectSQL.php';
 function getMenu(){
    $connect = connectSQL();
    $sql = "SELECT * FROM menu WHERE del < 1 ORDER BY rank ASC";
    $result = $connect->query($sql);
    if($result->num_rows > 0) {
       $rows = $result->fetch_all(MYSQLI_ASSOC); 
       return $rows;
   }
 }
 
?>