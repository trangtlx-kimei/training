<?php

class User {
    public $message;

    function __contrutor () {
        //conenct database
        include_once('../../config/config.php');
        include_once ('../../../connectSQL.php'); 
    }

    public function login($inputs) {
        if($this->_isBlank($inputs['username'])) {
            $this->message = 'Vui long nhap username';
        }

        if($this->_isBlank($inputs['password'])) {
            return 'Vui long nhap password';
        }

        $taikhoan=$inputs['username'];
        $matkhau=md5($inputs['password']);
        $sql="SELECT * FROM tbl_admin WHERE username='".$taikhoan."' AND password='".$matkhau."' LIMIT 1";
        $row=mysqli_query($mysqli,$sql);
        $count =mysqli_num_rows($row);
        if($count>0){
            $_SESSION['dangnhap']=$taikhoan;
            header("Location:../../index.php");
            $this->message = 'Success!';
        }else{
            echo '<script>alert("tai khoan hoac mat khau khong dung");</script>';
            header("Location:../../login.php");
        }
    }

    public function UserRegister($username, $emailid, $password){  
        $password = md5($password);  
        $qr = mysql_query("INSERT INTO users(username, emailid, password) values('".$username."','".$emailid."','".$password."')") or die(mysql_error());  
        return $qr;  
       
} 

    public function register () {
        
    }

}