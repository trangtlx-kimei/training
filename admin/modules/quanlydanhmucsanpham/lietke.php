<?php 
    $sql_lietke_danhmucsp="SELECT * FROM tbl_danhmuc ORDER BY thutu DESC";
    $query_lietke_danhmucsp= mysqli_query($mysqli,$sql_lietke_danhmucsp);
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
  while($row = mysqli_fetch_array($query_lietke_danhmucsp)){
      $i++; // so thu tu
  ?>
  <tr>
      <td><?php echo $i  ?></td>
    <td><?php echo $row['tendanhmuc']  ?></td>
    <td><a href="modules/quanlydanhmucsanpham/xuly.php?iddanhmucsanpham=<?php echo $row['id_danhmuc_sanpham']  ?>">Xoa</a></td>
    <td><a href="?action=quanlydanhmucsanpham&query=sua&iddanhmucsanpham=<?php echo $row['id_danhmuc_sanpham']  ?>">Sua</a></td>
  </tr>
  <?php } ?>
  
  </tr>
</table>