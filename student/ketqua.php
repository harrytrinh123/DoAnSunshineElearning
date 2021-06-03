<?php    
    include("./partials/connect.php");
    $mark = $_POST['mark'];
    $sql = "UPDATE `result` SET `Score` = '$mark' WHERE `result`.`StudentID` = '25221'";
    $result = $connect->query($sql);
    
?>