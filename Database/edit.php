<?php
    include_once ('data.php');
 
    $p_id=$_GET['p_id'];
    $result=$conn->query("select * from products where p_id=$p_id");
    $result=$result->fetch_all(MYSQLI_ASSOC);
    $name=$result[0]['name'];
    $b_price=$result[0]['b_price'];
    $s_price=$result[0]['s_price'];
 
    if($_SERVER['REQUEST_METHOD'] == 'POST')
    {
 
        $fname=$_POST['name'];
        $fb_price=$_POST['b_price'];
        $fs_price=$_POST['s_price'];
       
        $display=isset($_POST['show']) ? "display" : "hide";
 
        $result=$conn->query("UPDATE products SET name='$fname', b_price='$fb_price',s_price='$fs_price', display='$display' WHERE p_id='$p_id'");
 
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
    <form action="edit.php?p_id=<?php echo ($p_id)?>" method="POST">
        <h2>Edit Product</h2>
        <label for="name">Name<br>
            <input type="text" name="name" value ="<?php echo($name)?>" required>
        </label><br>
 
        <label for="b_price">Buying Price<br>
            <input type="text" name="b_price" value ="<?php echo($b_price)?>" required>
        </label><br>
 
        <label for="s_price">Selling Price<br>
            <input type="text" name="s_price" value ="<?php echo($s_price)?>" required>
        </label><br>
       
        <input type="checkbox" name="show" checked>Display
        <br><br>
        <input type="submit" value="Save">
       
 
    </form>
 
   
</body>
</html>
 