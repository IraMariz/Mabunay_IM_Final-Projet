<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
          <link href="style.css" rel="stylesheet" type="text/css"/>
        <title></title>
    </head>
    <body>
        
        <form action="addorders.php" method="GET"> 
               
            <label for="oid">Order ID</label>
            <input type="text" id="oid" name="oid" placeholder="oid">
            <label for="product">Product</label>
            <input type="text" id="product" name="product" placeholder="product">
            <label for="price">Price</label>
            <input type="text" id="price" name="price" placeholder="price">
            <label for="stock">Stock</label>
            <input type="text" id="stock" name="stock" placeholder="stock">
            <input type="submit" value="Add">
        </form>
        
        
        <table>       
            <thead>
                <tr>
                    <th>Order ID</th>
                    <th>Product</th>
                    <th>Price</th>
                    <th>Stock</th>
                    <th>Action</th>
                </tr>             
            </thead>   
            
        <?php
        $connection = mysqli_connect("localhost", "root", "","mabunaydb");
            $sql = "SELECT * FROM orders";
            $result=$connection->query($sql);
            
            while($row=mysqli_fetch_assoc($result)){
                
                
                echo "<tr>";
                echo "<td>".$row['oid'];"</td>";
                echo "<td>".$row['Product'];"</td>";
                echo "<td>".$row['Price'];"</td>";
                echo "<td>".$row['Stock'];"</td>";
                echo "<td>";
                    echo "<a class=\"btn\" href=\"editordersview.php?oid=".$row['oid']."\">edit</a>";
                    echo "<a class=\"btn\" href=\"deleteorders.php?oid=".$row['oid']."\" onclick=\"return confirm('Delete order?')\">delete</a>";
                echo "</td>";
                echo "</tr>";
             }
             $connection->close();
        ?>
        </table>
     
    </body>
</html>
