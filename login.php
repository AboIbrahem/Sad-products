<!-- /*
    ** Creat by DAA 
    ** 2021/12/23 3:30 PM

*/ -->

<?php
session_start();
include("connect.php");
    $name = $_POST['name'];
    $password = $_POST['password'];
    $sql = "SELECT name,password FROM customer WHERE name='$name' AND password='$password'";
    
    if (mysqli_query($conn, $sql) > 0) {
        header('location:home.php');
        exit();
    } else {
        echo 'error';
    }
?>
