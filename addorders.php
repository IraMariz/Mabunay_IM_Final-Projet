
<?php

$product = $_GET['product'];
$price = $_GET['price'];
$stock = $_GET['stock'];


echo $Product." ".$Price." ".$Stock." ";

    $connection = mysqli_connect("localhost", "root", "","mabunaydb");
            $sql = "INSERT into orders values(0, '$Product', '$Price', '$Stock')";
            $connection->query($sql);
            $connection->close();
            
            header("location:index.php");

