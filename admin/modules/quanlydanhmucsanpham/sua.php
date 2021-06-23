<p>sua danh muc san pham</p>
<?php 
    $sql_sua_danhmucsp="SELECT * FROM tbl_danhmuc WHERE id_danhmuc_sanpham= '$_GET[iddanhmucsanpham]' LIMIT 1";
    $query_sua_danhmucsp= mysqli_query($mysqli,$sql_sua_danhmucsp);
?>
<table border="1" width="50%" style="border-collapse:collapse">
   <form method="POST" action="modules/quanlydanhmucsanpham/xuly.php?iddanhmucsanpham=<?php echo $_GET['iddanhmucsanpham'] ?>">
   <?php 
  while($row = mysqli_fetch_array($query_sua_danhmucsp)){
  ?>
        <tr>
            <td>Ten danh muc</td>
            <td><input type="text" value="<?php echo $row['tendanhmuc']?>" name="tendanhmuc" placeholder="Nhap ten danh muc......" style="width: 100%"></td>
        </tr>
        <tr>
            <td>Thu tu</td>
            <td><input type="text" value="<?php echo $row['thutu']?>" name="thutu" placeholder="Nhap thu tu......" style="width: 100%"></td>

        </tr>
        <tr>
            <td colspan="2">
                <input type="submit" name="suadanhmuc" value="Sua danh muc san pham">
            </td>
        </tr>
        <?php } ?>
   </form>
</table>