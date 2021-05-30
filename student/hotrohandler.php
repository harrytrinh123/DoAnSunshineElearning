<?php 
include("./partials/connect.php");
$studentID = '25210';
$classID = '13210';
$teacherID = '27210';
$title = $_POST["title"];
$content = $_POST["content"];

$target = "./uploadfile/hotro/";
$file_path = $target.basename($_FILES["file"]["name"]); //../uploads/pro_A61098_1.jpg
$file_name = $_FILES["file"]["name"]; //pro_A61098_1.jpg
$file_tmp = $_FILES["file"]["tmp_name"]; // C:\xampp\tmp\php590C.tmp
$file_store = "uploadfile/hotro/".$file_name;


move_uploaded_file($file_tmp, "./".$file_store);

$sql = "INSERT INTO support(Title, Content, File, StudentID, ClassID) VALUES('$title', '$content', '$file_path', '$studentID', '$classID')";
$connect->query($sql);
header('location: hotro.php');
?>