<!-- /*
    ** Creat by DAA 
    ** 2021/12/23 4:30 PM

*/ -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME PAGE</title>
    <link rel="stylesheet" href="css/home.css">
</head>
<body>
    <?php
    session_start();
        include("connect.php");
        $sql="SELECT * FROM produces";
        $result=mysqli_query($conn,$sql);

    echo'<div class="container">';
       echo'<nav class="navbar">';
            echo'<p>welcome</p>';
         echo'<h1>our products</h1>';
           echo'<a href="logout.php">logout</a>';
        echo'</nav>';
        echo'<table id="customers">';
            echo'<tr>';
                echo'<th>#ID</th>
                <th>product name</th>
                <th>product price</th>
                <th>product quality</th>
                <th>Production Date	</th>';
            echo'</tr>';
            while($row=mysqli_fetch_array($result)){
            echo'<tr>';
            echo "<td>".$row['produceID']."</td>";
            echo "<td>".$row['producename']."</td>";
            echo "<td>".$row['price']."</td>";
            echo "<td>".$row['quantity']."</td>";
            echo "<td>".$row['production_date']."</td>";

            echo'</tr>';
        }
        echo'</table>';  
    echo'</div>';
        
  
    ?>
    <a href="add-product.html">Add Production</a>
    <DAA style="position: absolute;
bottom: 10px;
right: 30px;
z-index: 99999999;
color: #ffffff75;
font-family: cursive;">Creat By : AboIbrahem</DAA>
</body>
</html>