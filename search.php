<?php
  include_once 'connectSQL.php';
  $conn = connectSQL();
  $sql = "SELECT san_pham.id, san_pham.name, san_pham.ma_san_pham,san_pham.mo_ta_ngan_gon,san_pham.gia_ban,san_pham.gia_canh_tranh, thuoc_tinh.color, thuoc_tinh.size,thuoc_tinh.weight
  FROM san_pham
  LEFT JOIN thuoc_tinh_san_pham
  on thuoc_tinh_san_pham.san_pham_id = san_pham.id
  LEFT JOIN thuoc_tinh
  on thuoc_tinh_san_pham.thuoc_tinh_id =thuoc_tinh.id
  WHERE san_pham.name LIKE '%".$_POST['name']."%'
  OR ma_san_pham LIKE '%".$_POST['name']."%'
  OR san_pham.id LIKE '%".$_POST['name']."%'
  ";
  $result = mysqli_query($conn, $sql);
  if(!empty($result->num_rows) && $result->num_rows > 0){   
    while($row = $result->fetch_assoc()) {
         echo "<tr>
                <td>".$row['name']."</td>
                <td>".$row['ma_san_pham']."</td>
                <td>".$row['gia_ban'].' vnd'."</td>
                <td>".$row['gia_canh_tranh'].' vnd'."</td>
                <td>".$row['mo_ta_ngan_gon']."</td>
                <td>".$row['color']."</td>
                <td>".$row['size']."</td>
                <td>".$row['weight']."</td>
              </tr>";
    }
  }else{
      echo "<tr><td>0 result's found</td></tr>";
  }