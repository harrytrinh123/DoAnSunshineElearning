<?php    
    include("./partials/connect.php");
    $sql = "SELECT * FROM question ORDER BY RAND() LIMIT 10";
    $result = $connect->query($sql);
    echo json_encode($result->fetch_all(), JSON_UNESCAPED_UNICODE);
    
?>
