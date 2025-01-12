
<?php

$oid = $_POST['oid'];
$product = $_POST['product'];
$price = $_POST['price'];
$stock = $_POST['stock'];


    $connection = mysqli_connect("localhost", "root", "","mabunaydb");
            $sql = "UPDATE orders SET product='$product', price='$price', stock='$stock', WHERE oid=$oid";
            $connection->query($sql);
            $connection->close();
            
            header("location:index.php");

