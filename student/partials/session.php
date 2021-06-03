<?php 
session_start();
if(empty($_SESSION['username'] AND $_SESSION['password'])) {
    header("location: login.php");
}
?>