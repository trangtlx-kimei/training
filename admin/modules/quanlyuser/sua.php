<p>sua thong tin thanh vien</p>
<?php 
    $sql_sua_user="SELECT * FROM tbl_admin WHERE id_admin= '$_GET[iduser]' LIMIT 1";
    $query_sua_user= mysqli_query($mysqli,$sql_sua_user);
?>
<table border="1" width="50%" style="border-collapse:collapse">
   <form method="POST" action="modules/quanlyuser/xuly.php?iduser=<?php echo $_GET['iduser'] ?>">
   <?php 
  while($row = mysqli_fetch_array($query_sua_user)){
  ?>
        <tr>
            <td>Ten thanh vien</td>
            <td><input type="text" value="<?php echo $row['username']?>" name="tenthanhvien" placeholder="Nhap ten thanh vien moi......" style="width: 100%"></td>
        </tr>
        <tr>
            <td>Password</td>
            <td><input type="text" value="<?php echo $row['password']?>" name="password" placeholder="Nhap password......" style="width: 100%"></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><input type="text" value="<?php echo $row['email']?>" name="email" placeholder="Nhap password......" style="width: 100%"></td>
        </tr>
        <tr>
            <td>Dia chi</td>
            <td><input type="text" value="<?php echo $row['diachi']?>" name="diachi" placeholder="Nhap password......" style="width: 100%"></td>
        </tr>
        <tr>
            <td>So dien thoai</td>
            <td><input type="text" value="<?php echo $row['sdt']?>" name="sdt" placeholder="Nhap password......" style="width: 100%"></td>
        </tr>
        <tr>
            <td>status</td>
            <td><input type="text" value="<?php echo $row['status']?>" name="status" placeholder="Nhap password......" style="width: 100%"></td>
        </tr>
        <tr>
            <td colspan="2">
                <input type="submit" name="suauser" value="Sua tai khoan nguoi dung">
            </td>
        </tr>
        <?php } ?>
   </form>
</table>