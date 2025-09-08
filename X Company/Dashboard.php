<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="CSS/dashboard.css">
</head>
<body>
    <div class="main-content">
    <header>
        <img src="image/x.png" alt="logo" width="70" length="40">
        <nav>
            <a href="Login.php">Logout</a>
        </nav>
    </header>
    <hr>
    <div class="left">
        <h3>Account</h3>
        <ul>
            <li><a href="dashboard.php">Dashboard</a></li>
            <li><a href="viewProfile.php">View Profile</a></li>
            <li><a href="editProfile.php">Edit Profile</a></li>
            <li><a href="changeProfilePicture.php">Change Profile Picture</a></li>
            <li><a href="changepassword.php">Change Password</a></li>
            <li><a href="login.php">Logout</a></li>
        </ul>
    </div>
    <div class="right">
        <h3>Welcome Bob</h3>
    </div>
    <footer>
        <hr>
        <p>Copyright &copy; 2017</p>
    </footer>
</body>
</html>
