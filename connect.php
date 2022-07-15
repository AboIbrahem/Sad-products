<!-- /*
    ** Creat by DAA 
    ** 2021/12/22 1:30 PM

*/ -->

<?php

$servername = "localhost";
$username = "root";
$password = '';
$db = "soohel";

// إجراء الإتصال
$conn = new mysqli($servername, $username, $password,$db);

// التحقق من الإتصال
if ($conn->connect_error) {
    die("فشل الإتصال: " . $conn->connect_error);
} 
