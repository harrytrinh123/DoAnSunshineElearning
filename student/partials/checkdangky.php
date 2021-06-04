<?php 
    // querry to get student id
    include("./partials/connect.php");
    $uname = $_SESSION['username'];
    $sql = "SELECT * FROM student WHERE student.Username = '$uname'";
    $fn = ($connect->query($sql))->fetch_assoc();

    if($fn['ClassID'] === NULL) {
        header("location: 404.php");
    }
?>