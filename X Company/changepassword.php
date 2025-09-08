<?php
    session_start();

    $currentErr = $newErr = $retypeErr = "";
    $success = "";

    $current = $new = $retype = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $current = $_POST['current'];
        $new = $_POST['new'];
        $retype = $_POST['retype'];

  
        if (empty($current)) {
            $currentErr = "Current password is required!";
        }

     
        if (empty($new)) {
            $newErr = "New password is required!";
        } elseif (strlen($new) < 8) {
            $newErr = "Password must be at least 8 characters long!";
        } elseif (!preg_match("/[A-Z]/", $new)) {
            $newErr = "Password must contain at least one uppercase letter!";
        } elseif (!preg_match("/[a-z]/", $new)) {
            $newErr = "Password must contain at least one lowercase letter!";
        } elseif (!preg_match("/[^a-zA-Z0-9]/", $new)) {
            $newErr = "Password must contain at least one special character!";
        }

      
        if (empty($retype)) {
            $retypeErr = "Please retype the new password!";
        } elseif ($new !== $retype) {
            $retypeErr = "Passwords do not match!";
        }

 
        if ($currentErr == "" && $newErr == "" && $retypeErr == "") {
            $success = "Password changed successfully!";

        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Password</title>
    <link rel="stylesheet" href="CSS/changepassword.css">
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
        <h3>CHANGE PASSWORD</h3>

        <?php if ($success): ?>
            <p class="success"><?php echo $success; ?></p>
        <?php endif; ?>

        <form action="changepassword.php" method="post">
            <label for="current">Current Password :</label>
            <input type="password" id="current" name="current"><br>
            <span class="error"><?php echo $currentErr; ?></span><br>

            <label for="new" class="green">New Password :</label>
            <input type="password" id="new" name="new"><br>
            <span class="error"><?php echo $newErr; ?></span><br>

            <label for="retype" class="red">Retype New Password :</label>
            <input type="password" id="retype" name="retype"><br>
            <span class="error"><?php echo $retypeErr; ?></span><br>

            <input type="submit" value="Submit">
        </form>
    </div>
    <footer>
        <hr>
        <p>Copyright &copy; 2017</p>
    </footer>
</body>
</html>
