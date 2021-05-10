<?php 
 function getLogo(){
    $connect = connectSQL();
    $sql = "SELECT logo, title FROM logo";
    $result = $connect->query($sql);
    if($result->num_rows > 0) {
       $rows = $result->fetch_all(MYSQLI_ASSOC); 
       return $rows;
   }
 }
?>