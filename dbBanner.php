<?php // 
include 'connectSQL.php';
function getSQL (){
  $ketqua =  connectDB();
  //   echo '<pre>';
  //       print_r($ketqua);
  // die();
  $sql = "SELECT names, description FROM banner WHERE deleter < 1";
  $result = $ketqua->query($sql);
  $row = $result->fetch_all();
  echo '<pre>';
        print_r($row);
  if ($result->num_rows > 0) {
      // output data of each row
      // while() {
      //   echo '<pre>';
      //   print_r($row);
      //   die('aaaa');
      //     echo "<h5>". $row["names"] ."</h5>";
      //     echo "<p>". $row["description"]."</p>";
      //     return $result;
      // }
      for ($i=0; $i<= 4; $i++){
        echo "<h5>". $row["names"] ."</h5>";
        echo "<p>". $row["description"]."</p>";
        return $result;
      }
  }
}
?>