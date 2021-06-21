<div class="clear"></div>
<div class="main">
    <?php 
        if(isset($_GET['action'])&&$_GET['query']){
            $tam =$_GET['action'];
            $query =$_GET['query'];
        }else{
            $tam='';
            $query='';
        }

        if($tam == 'quanlydanhmucsanpham' && $query == 'them'){
            include("modules/quanlydanhmucsanpham/them.php");
            include("modules/quanlydanhmucsanpham/lietke.php");
        }elseif($tam == 'quanlydanhmucsanpham' && $query == 'sua'){
            include("modules/quanlydanhmucsanpham/sua.php");
        }elseif($tam == 'quanlyuser' && $query == 'them'){
            include("modules/quanlyuser/them.php");
            include("modules/quanlyuser/lietke.php");
        }elseif($tam == 'quanlyuser' && $query == 'sua'){
            include("modules/quanlyuser/sua.php");
        }else{
            include("modules/dashboard.php");
        }
    ?>
</div>