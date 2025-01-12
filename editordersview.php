<!DOCTYPE html>

<html>
    <head>
    <meta charset="UTF-8">
        <title></title>
        <link href="style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
<?php 
      $oid=$_GET['oid'];

      $connection = mysqli_connect("localhost","root","","mabunaydb");
      
      $sql = "SELECT * FROM student WHERE oid=$oid";
           
      $connection ->query($sql);
      
      $row= mysqli_fetch_assoc($result);
?>        
       
        <form action ="editorders.php" method="POST">
            <input type="hidden"id="oid" name="oid" value="<?php echo $row['oid']; ?>" >
            <label for="oid"> Order ID</label>
            <input type="text" id="oid" name="oid"  value="<?php echo $row['oid']; ?>">
            <label for="product"> Product</label>
            <input type="text" id="product" name="product" value="<?php echo $row['product']; ?>">
            <label for="price"> Price</label>
            <input type="text" id="price" name="price" value="<?php echo $row['price']; ?>">
            <label for="stock"> Stock</label>
            <input type="text" id="stock" name="stock" value="<?php echo $row['stock']; ?>">
            <input type="submit" value="Edit" onclick="return confirm('Edit orders?')"> 
        </form>
     </body>
</html>
