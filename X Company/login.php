<?php
$userName = $password = "";
$userNameErr = $passwordErr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (empty($_POST["username"])) {
        $userNameErr = "User name is required";
    } else {
        $userName = test_input($_POST["username"]);
        $userNameErr = "empty";
    }

    if (empty($_POST["password"])) {
        $passwordErr = "Password is required";
    } else {
        $password = test_input($_POST["password"]);
        $passwordErr = "empty";
    }

    if ($userNameErr == "empty" && $passwordErr == "empty") {
        header("Location: dashboard.php");
        exit();
    }
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="CSS/login.css">
</head>
<body>
    <div class="main-content">
        <header>
            <img src="image/x.png" alt="logo" width="70" height="40">
            <nav>
                <a href="index.php">Home</a>
                <a href="Login.php">Log In</a>
                <a href="registration.php">Registration</a>
            </nav>
        </header>

        <hr>

        <div class="login-box">
            <h2>LOGIN</h2>
            <form method="POST" action="">
                <div class="form-group">
                    <label for="username"><strong>User Name :</strong> </label>
                    <input type="text" id="username" name="username" value="<?php echo $userName; ?>">
                    <span style="color:red"><?php echo ($userNameErr != "empty") ? $userNameErr : ""; ?></span>
                </div>
                <div class="form-group">
                    <label for="password"><strong>Password :</strong></label>
                    <input type="password" id="password" name="password" value="<?php echo $password; ?>">
                    <span style="color:red"><?php echo ($passwordErr != "empty") ? $passwordErr : ""; ?></span>
                </div>
                <div class="checkbox-group">
                    <input type="checkbox" id="remember" name="remember">
                    <label for="remember">Remember Me</label>
                </div>
                <div>
                    <input type="submit" value="Submit">
                    <a href="forgot.php" class="forgot-link">Forgot Password?</a>
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