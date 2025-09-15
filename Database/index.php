<?php
    include_once ('data.php');
 
    if($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        $name=$_POST['name'];
        $b_price=$_POST['b_price'];
        $s_price=$_POST['s_price'];
        $display=isset($_POST['show']) ? "display" : "hide";
 
        $result=$conn->query("INSERT INTO products (name, b_price, s_price, display)
            VALUES ('$name', '$b_price', '$s_price','$display')");
    }
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="POST">
        <h2>Add Product</h2>
        <label for="name">Name<br>
        <input type="text" name="name" required>
        </label><br><br>
        <label for="b_price">Buying Price<br>
        <input type="text" name="b_price" required>
        </label><br><br>
        <label for="s_price">Selling Price<br>
        <input type="text" name="s_price"required>
        </label><br><br>
       
        <input type="checkbox" name="show">Display
        <br><br>
        <input type="submit">
    </form>
    <br>
    <a href="display.php"><button>Display</button></a>
   
</body>
</html>
 