<?php
$mysqli = new mysqli("localhost","root","","webphp");

// Check connection
if ($mysqli -> connect_errno) {
  echo "ket noi loi MySQL: " . $mysqli -> connect_error;
  exit();
}else{
    echo "ket noi thanh cong roi";
}
?>