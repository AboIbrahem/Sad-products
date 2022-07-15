<!-- /*
    ** Creat by DAA 
    ** 2021/12/22 1:30 PM

*/ -->

<?php
    session_start();
    include("connect.php");
    $name=$_POST['producename'];
    $price=$_POST['price'];
    $quantity=$_POST['quantity'];
    $date=$_POST['production_date'];
    $sql = "INSERT INTO produces (producename,price,quantity,production_date) 
            VALUES('$name','$price','$quantity','$date')";
    if (mysqli_query($conn,$sql)) {
        header("location:home.php");
    } else {
        echo 'error with inserting';
    }
?>