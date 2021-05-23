<?php 
    $servername = "localhost";
    $username = "root";
    $password = "";
    
    include("./partials/connect.php");
    $sql = "SELECT * FROM question ORDER BY RAND() LIMIT 5";
    $result = $connect->query($sql);
    echo json_encode($result->fetch_all(), JSON_UNESCAPED_UNICODE);
    
?>