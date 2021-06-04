
<?php
  function connectSQL(){
    $servername = "localhost";
    $username = "root";
    $password = "";
    $mydb = "webphp";
    // Create connection
    $conn = new mysqli($servername, $username, $password, $mydb);
    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    } else {
      // Change character set to utf8
      mysqli_set_charset($conn,"utf8");
    }
    return $conn;
  }
?>