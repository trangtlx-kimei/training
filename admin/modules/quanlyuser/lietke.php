<?php 
    $sql_lietke_user="SELECT * FROM tbl_admin ORDER BY id_admin DESC";
    $query_lietke_user= mysqli_query($mysqli,$sql_lietke_user);
?>

<p>liet ke danh muc san pham</p>
<table  border="1" width="100%" style="border-collapse:collapse">
  <tr>
      <th>ID</th>
    <th>Ten danh muc</th>
    <th>Xoa san pham</th>
    <th>Sua san pham</th>
  </tr>
  <?php 
  $i=0;
  while($row = mysqli_fetch_array($query_lietke_user)){
      $i++; // so thu tu
  ?>
  <tr>
      <td><?php echo $i  ?></td>
    <td><?php echo $row['username']  ?></td>
    <td><a href="modules/quanlyuser/xuly.php?iduser=<?php echo $row['id_admin']  ?>">Xoa</a></td>
    <td><a href="?action=quanlyuser&query=sua&iduser=<?php echo $row['id_admin']  ?>">Sua</a></td>
  </tr>
  <?php } ?>
  
  </tr>
</table>