<?php // ajaax connect mysqli
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "my web";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}else{
//   echo "connect thanh cong";
}

$sql = "SELECT ten FROM myguests WHERE deleter < 1 ORDER BY rank ASC";
$result = $conn->query($sql);
// var_dump($result);
//
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<a>". $row["ten"]."</a>";
    }
}
?>