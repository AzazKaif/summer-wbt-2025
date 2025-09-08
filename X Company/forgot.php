<?php
    session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="CSS/login.css">
</head>
<body>
    <div class="main-content">
    <header>
   <img src="image/x.png" alt="logo" width="70" length="40">
    <nav>
        <a href="index.php">Home</a>

        <a href="Login.php">Log In</a>

        <a href="registration.php">Registration</a>

    </nav>
</header>

    <hr>
    <div class="login-box">
  <h2>Fogot Password</h2>
  <form>
    <div class="form-group">
      <label for="mail"><strong>Enter Email :</strong> </label>
      <input type="email" id="mail" name="mail">
    </div>
<hr>
<br>
    <div>
      <input type="submit" value="Submit">
    </div>
  </form>
</div>
<footer>
        
        <hr>
        <p>Copyright &copy; 2017</p>
</footer>
</body>
</html>