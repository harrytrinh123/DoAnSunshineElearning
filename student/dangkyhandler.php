<?php 
    include("./partials/session.php");
    include("./partials/connect.php");
    $classID = $_POST['classID'];
    $uname = $_SESSION['username'];
    $stID = $_SESSION['studentID'];

    // query to update classID in student table
    $sql1 = "UPDATE student SET ClassID = '$classID' WHERE student.ID = '$stID'";
    $connect->query($sql1);    
?>