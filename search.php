<?php
  include_once 'connectSQL.php';
  $conn = connectSQL();
  $sql = "SELECT name FROM san_pham WHERE name LIKE '%".$_POST['name']."%'";
  $result = mysqli_query($conn, $sql);
  echo '<pre>';
    print_r($_POST['name']);
  if(!empty($result->num_rows) && $result->num_rows > 0){   
    while($row = $result->fetch_assoc()) {
         echo "<tr>
                <td>".$row['name']."</td>
              </tr>";
    }
  }else{
      echo "<tr><td>0 result's found</td></tr>";
  }