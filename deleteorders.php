<?php
$oid = $_GET['oid'];

    $connection = mysqli_connect("localhost", "root", "","mabunaydb");
            $sql = "DELETE FROM orders WHERE oid=$oid";
            $connection->query($sql);
            $connection->close();
            
            header("location:index.php");
