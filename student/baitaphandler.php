<?php    
    include("./partials/connect.php");
    $sql = "SELECT * FROM question
            WHERE question.ExamID = '17210'";
    $result = $connect->query($sql);
    echo json_encode($result->fetch_all(), JSON_UNESCAPED_UNICODE);
    
?>