<?php 
    include_once 'connectSQL.php';
    $conn = connectSQL();
    if(isset($_POST['passLogin'])){
        $userLogin= $_POST['userLogin'];
        $passLogin= $_POST['passLogin'];
        // neu nguoi dung bo trong o input se báo lỗi
    
        if(empty($passLogin)){
            $passLogin_error =" vui lòng nhập dung";
        }elseif($passLogin){
            // echo "phai nhap dung ky tu";
            $sql = "SELECT userName, password FROM user 
            WHERE userName='".$userLogin."' AND password='".$passLogin."'
            ";
            $result = $conn->query($sql);
            if($result->num_rows > 0) {
            $data = $result->fetch_all(MYSQLI_ASSOC);
            if($passLogin && $userLogin){
                echo "dang nhap thanh cong";
            }else{
                echo "tai khoan hoac mat khau khong dung";
            }
            }else{
                echo "tai khoan hoac mat khau khong dung";
            }
                }
            
    //
       
           
        


    }










    // include('index.php');
    //lay gia tri nguoi dung nhap vao o input
    
    // $uname= $_POST['username'];
    // // echo ($uname);
    // $password= $_POST['password'];
    // // neu nguoi dung bo trong o input se báo lỗi
    // if(empty($uname)){
    //     $uname_error =" vui lòng nhập username";
    // }elseif(strlen($uname)<6){
    //     echo "phai nhap du 6 ky tu";
    // }

    // if(empty($password)){
    //     $password_error =" vui lòng nhập password";
    // }elseif(strlen($uname)<6){
    //     echo "phai nhap du 6 ky tu";
    // }


    // // connect database
    // $conn = connectSQL();
    // $sql = "SELECT userName, password FROM user 
    //         WHERE userName='".$uname."' AND password='".$password."'
    // ";
    // $result = $conn->query($sql);
    // if($result->num_rows > 0) {
    //    $data = $result->fetch_all(MYSQLI_ASSOC);
    //    if($password && $uname){
    //        echo "dang nhap thanh cong";
    //    }else{
    //        echo "tai khoan hoac mat khau khong dung";
    //    }
    // }else{
    //     echo "tai khoan hoac mat khau khong dung";
    // }
?>