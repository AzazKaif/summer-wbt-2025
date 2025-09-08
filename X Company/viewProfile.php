<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Profile</title>
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
            <form action="editProfile.php">
                <h3>Profile</h3>
                <div class="row">
                    <label class="info">Name:</label>
                    <label class="data">Bob</label>
                </div>
                <hr>
                <div class="row">
                    <label class="info">Email:</label>
                    <label class="data">bob@gmail.com</label>
                </div>
                <hr>
                <div class="row">
                    <label class="info">Gender:</label>
                    <label class="data">Male</label>
                </div>
                <hr>
                <div class="row">
                    <label class="info">Date of Birth:</label>
                    <label class="data">19/05/2005</label>
                </div>
                <hr> <br>
                <div class="row">
                    <input type="submit" value="Edit Profile">
                </div>
            </form>
        </div>

        <footer>
            <hr>
            <p>Copyright &copy; 2017</p>
        </footer>
    </div>
</body>
</html>
