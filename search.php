<?php
  include_once 'connectSQL.php';
  $conn = connectSQL();
  $sql = "SELECT * FROM san_pham name LIKE '%".$_POST['name']."%'";
  $result = mysqli_query($conn, $sql);
  if(mysqli_num_rows($result)>0){
      while ($row=mysqli_fetch_assoc($result)) {
          echo "	<tr>
                    <td>".$row['name']."</td>
                  </tr>";
      }
  }
  else{
      echo "<tr><td>0 result's found</td></tr>";
  }

?>