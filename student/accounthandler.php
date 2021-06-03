<?php    
    include("./partials/connect.php");
    $studentid = $_POST['studentID'];
    $name = $_POST['name'];
    $dateofbirth = $_POST['dob'];
    $phonenumber = $_POST['phonenumber'];
    $address = $_POST['ar'];
    $email = $_POST['email'];
    $sql = "UPDATE `student` SET `StudentName` = '$name', `DateOfBirth` = '$dateofbirth', `PhoneNumber` = '$phonenumber', `Address` = '$address',  `Email` = '$email'  WHERE `student`.`ID` = '$studentid'";
    $result = $connect->query($sql);
    echo "Cap nhat thanh cong";
    
?>