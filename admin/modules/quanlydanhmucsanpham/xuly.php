<?php 
include("../../config/config.php");
    $tenloaisp = $_POST['tendanhmuc'];
    $thutu = $_POST['thutu'];

    if(isset($_POST['themdanhmuc'])){
        $sql_them = "INSERT INTO tbl_danhmuc (tendanhmuc, thutu)
        VALUES ('".$tenloaisp."','".$thutu."')";\
        mysqli_query($mysqli,$sql_them);
        header('Location:../../index.php?action=quanlydanhmucsanpham&query=them');
    }elseif(isset($_POST['suadanhmuc'])){
        $sql_update = "UPDATE tbl_danhmuc SET tendanhmuc='".$tenloaisp."',thutu='".$thutu."'WHERE id_danhmuc_sanpham='$_GET[iddanhmucsanpham]' ";
        mysqli_query($mysqli,$sql_update);
        header('Location:../../index.php?action=quanlydanhmucsanpham&query=them');
    }else{
        $id=$_GET['iddanhmucsanpham'];
        $sql_xoa="DELETE FROM tbl_danhmuc WHERE id_danhmuc_sanpham='".$id."'";
        mysqli_query($mysqli,$sql_xoa);
        header('Location:../../index.php?action=quanlydanhmucsanpham&query=them');
    }
    
?>