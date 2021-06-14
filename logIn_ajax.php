<?php 
include 'connectSQL.php'; 
$conn = connectSQL();
if(isset($_POST['userName'])){
    $userName = $_POST['userName'];
    $password = $_POST['password'];
    $repeatPassword = $_POST['repeatPassword'];
    $email = $_POST['email'];
    // it nhat 1 chu thuong 1 chu viet hoa 1 so 1 ky tu dat biet dai toi thieu 8 ky tu
    $regex="/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{8,}$/";
    
    if(preg_match($regex,$_POST['password'])){
        echo "nhap dung ky tu";
        if($password === $repeatPassword){
          $result=mysqli_query($conn,"INSERT INTO user(userName, password, repeatPassword, email) VALUES ('$userName', '$password', '$repeatPassword','$email')");
          $sql= "SELECT userName, password, repeatPassword, email FROM user";
          $output = $conn->query($sql);
          if ($output->num_rows > 0) {
            echo "<table>
                <tr>
                </tr>";
            // output data of each row
            while($row = $output->fetch_assoc()) {
              echo "<tr><td>".$row["id"]."</td><td>".$row["userName"]." ".$row["password"]." ".$row["repeatPassword"]." ".$row["email"]." </td></tr>";
            }
            echo "</table>";
          } else {
            echo "0 output";
          }
          $conn->close();
        }else{
          echo "sai";
        }
      }else{
        
        echo "nhap sai ky tu";
      }
};
?>