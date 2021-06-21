<?php 
include("../../config/config.php");
    $tenthanhvien = $_POST['tenthanhvien'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $diachi = $_POST['diachi'];
    $sdt = $_POST['sdt'];
    $status = $_POST['status'];

    if(isset($_POST['themuser'])){
        $sql_them = "INSERT INTO tbl_admin (username, password,email,diachi,sdt,admin_status)
        VALUES ('".$tenthanhvien."','".$password."','".$email."','".$diachi."','".$sdt."','".$status."')";\
        mysqli_query($mysqli,$sql_them);
        header('Location:../../index.php?action=quanlyuser&query=them');
    }elseif(isset($_POST['suauser'])){
        $sql_update = "UPDATE tbl_admin SET username='".$tenthanhvien."',password='".$password."',email='".$email."',diachi='".$diachi."',sdt='".$sdt."',admin_status='".$status."'WHERE id_admin='$_GET[iduser]' ";
        mysqli_query($mysqli,$sql_update);
        header('Location:../../index.php?action=quanlyuser&query=them');
    }else{
        $id=$_GET['iduser'];
        $sql_xoa="DELETE FROM tbl_admin WHERE id_admin='".$id."'";
        mysqli_query($mysqli,$sql_xoa);
        header('Location:../../index.php?action=quanlyuser&query=them');
    }
    
?>