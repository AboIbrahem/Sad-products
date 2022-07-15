<!-- /*
    ** Creat by DAA 
    ** 2021/12/23 3:30 PM

*/ -->

<?php
    session_start();
    include("connect.php");
    $name=$_POST['name'];
    $pass=$_POST['password'];
    $email=$_POST['email'];
    $full=$_POST['fullname'];
    $sql = "INSERT INTO customer (name,password,email,fullname) 
            VALUES('$name','$pass','$email','$full' )";
    if (mysqli_query($conn,$sql)) {
        echo 'recored added to database';
        header("location:index.html");
    } else {
        echo 'error with inserting';
    }
?>