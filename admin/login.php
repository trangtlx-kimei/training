<?php 
    // session_start();
    // include_once('config/config.php');
    // include ('../connectSQL.php'); 

    // lap trinh main
    // $conn = connectSQL();
    // if(isset($_POST['dangnhap'])){
    //     $taikhoan=$_POST['username'];
    //     $matkhau=md5($_POST['password']);
    //     $sql="SELECT * FROM tbl_admin WHERE username='".$taikhoan."' AND password='".$matkhau."' LIMIT 1";
    //     $row=mysqli_query($mysqli,$sql);
    //     $count =mysqli_num_rows($row);
    //     if($count>0){
    //         $_SESSION['dangnhap']=$taikhoan;
    //         header("Location:../../index.php");
    //     }else{
    //         echo '<script>alert("tai khoan hoac mat khau khong dung");</script>';
    //         header("Location:login.php");
    //     }
    // }
    // if(isset($_POST['dangky'])){
    //     $hovaten = $_POST['hovaten'];
    //     $pass = $_POST['pass'];
    //     $email = $_POST['email'];
    //     $diachi = $_POST['diachi'];
    //     $sdt = $_POST['sdt'];
    //     $result=mysqli_query($conn,"INSERT INTO tbl_admin(username, password, email, diachi, sdt) VALUES ('$hovaten', '$pass', '$email','$diachi','$sdt')");
    //     $sql_dangky= "SELECT * FROM tbl_admin";
    //     $output = $conn->query($sql_dangky);
    //     if ($output->num_rows > 0) {
    //     //   echo "<table>
    //     //       <tr>
    //     //       </tr>";
    //     //   // output data of each row
    //     //   while($row = $output->fetch_assoc()) {
    //     //     echo "<tr><td>".$row["id_admin"]."</td><td>".$row["username"]." ".$row["password"]." ".$row["email"]." ".$row["diachi"]." ".$row["sdt"]." </td></tr>";
    //     //   }
    //     //   echo "</table>";
    //     // } else {
    //     //   echo "0 output";
    //     }
    // }

    // lap trinh huong doi tuong
    include_once('config/config.php');
    include ('../connectSQL.php'); 
    session_start();  
    class User {  
        function __construct() {  
            $conn = connectSQL();
        }  
        // destructor  
        function __destruct() {  
        }   
        public function Login($taikhoan, $password){  
            $sql="SELECT * FROM tbl_admin WHERE username='".$taikhoan."' AND password='".$matkhau."' LIMIT 1";
            $row=mysqli_query($mysqli,$sql);
            $count =mysqli_num_rows($row);
            if($count>0){
                $_SESSION['dangnhap']==$taikhoan;
                header("Location:index.php");
            }else{
                echo '<script>alert("tai khoan hoac mat khau khong dung");</script>';
                header("Location:login.php");
            }
        }
        public function Register($hovaten, $pass, $email,$diachi,$sdt){  
            $conn = connectSQL();
            $result=mysqli_query($conn,"INSERT INTO tbl_admin(username, password, email, diachi, sdt) VALUES ('$hovaten', '$pass', '$email','$diachi','$sdt')");
            $sql_dangky= "SELECT * FROM tbl_admin";
            $output = $conn->query($sql_dangky);
            if ($output->num_rows > 0) {
            //   echo "<table>
            //       <tr>
            //       </tr>";
            //   // output data of each row
            //   while($row = $output->fetch_assoc()) {
            //     echo "<tr><td>".$row["id_admin"]."</td><td>".$row["username"]." ".$row["password"]." ".$row["email"]." ".$row["diachi"]." ".$row["sdt"]." </td></tr>";
            //   }
            //   echo "</table>";
            // } else {
            //   echo "0 output";
            } 
           
    }   
    } 
    $funObj = new User();  
    if(isset($_POST['dangnhap'])){
        $taikhoan=$_POST['username'];
        $matkhau=md5($_POST['password']);
        $user = $funObj->Login($taikhoan, $password);  // cho này vẫn chưa ăn giá trị người dùng nhập vào em sẽ kt lại 
        if (!$user) {  // em tạm thời để phủ định để giả sử trường hợp giá trị người dùng nhập đúng nó sẽ nhảy đến trang index 
            // Registration Success  
                header("Location:index.php");
        }else{
                echo '<script>alert("tai khoan hoac mat khau khong dung");</script>';
                header("Location:login.php");
            }  
        } else {  
            // Registration Failed  
            echo "<script>alert('tai khoan / Password khong dung')</script>";  
        }  
    if(isset($_POST['dangky'])){
        $hovaten = $_POST['hovaten'];
        $pass = $_POST['pass'];
        $email = $_POST['email'];
        $diachi = $_POST['diachi'];
        $sdt = $_POST['sdt']; 
        $userdangky = $funObj->Register($hovaten, $pass, $email,$diachi,$sdt);  
    }
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <div class="wrapper-login">
        <form action="" method="POST">
            <table border="1" style="text-align: center" >
                <tr>
                    <td colspan=2><h3>Dang nhap admin</h3></td>
                </tr>
                <tr>
                    <td>Tai khoan</td>
                    <td><input type="text" name="username"></td>
                </tr>
                <tr>
                    <td>Mat khau</td>
                    <td><input type="text" name="password"></td>
                </tr>
                <tr>
                    <td colspan="2"><input type="submit" name="dangnhap" value="Dang Nhap"></td>
                </tr>
            </table>
        </form>
    </div>
    <div class="wapper-logup">
        <form action="" method="POST">
            <table border="1" style="text-align: center" >
                <tr>
                    <td colspan=2><h3>Dang ky</h3></td>
                </tr>
                <tr>
                    <td>Ho va ten</td>
                    <td><input type="text" name="hovaten"></td>
                </tr>
                <tr>
                    <td>Mat khau</td>
                    <td><input type="text" name="pass"></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><input type="text" name="email"></td>
                </tr>
                <tr>
                    <td>Dia chi</td>
                    <td><input type="text" name="diachi"></td>
                </tr>
                <tr>
                    <td>So dien thoai</td>
                    <td><input type="text" name="sdt"></td>
                </tr>
                <tr>
                    <td colspan="2"><input type="submit" name="dangky" value="Dang Ky"></td>
                </tr>
            </table>
        </form>
    </div>
    <script type="text" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  </body>
</html>