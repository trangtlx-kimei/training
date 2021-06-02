<?php
    $search= $_POST['search'];
    include_once 'connectSQL.php';
    $connect = connectSQL();
    $sql = "SELECT * from san_pham Where name LIKE '%$search%'";
    $result = $connect->query($sql);
    if($result->num_rows > 0) {
        while($row = $result->fetch_assoc()){
            echo $row["name"]."<br>";
        }
    }else{
        echo "0 co records";
    }
    $connect->close();

?>