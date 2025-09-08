<?php
$name = $email = $username = $password = $cpassword = $gender = $day = $month = $year = "";
$errors = [
    "name" => "",
    "email" => "",
    "username" => "",
    "password" => "",
    "cpassword" => "",
    "gender" => "",
    "dob" => ""
];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = trim($_POST["name"]);
    $email = trim($_POST["email"]);
    $username = trim($_POST["username"]);
    $password = trim($_POST["password"]);
    $cpassword = trim($_POST["cpassword"]);
    $gender = isset($_POST["gender"]) ? $_POST["gender"] : "";
    $day = trim($_POST["day"]);
    $month = trim($_POST["month"]);
    $year = trim($_POST["year"]);


    if (empty($name)) {
        $errors["name"] = "Name is required.";
    } elseif (strlen($name) < 3) {
        $errors["name"] = "Name must be at least 3 characters.";
    }


    if (empty($email)) {
        $errors["email"] = "Email is required.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors["email"] = "Invalid email format.";
    }

    
    if (empty($username)) {
        $errors["username"] = "Username is required.";
    } elseif (strlen($username) < 3) {
        $errors["username"] = "Username must be at least 3 characters.";
    }


    if (empty($password)) {
        $errors["password"] = "Password is required.";
    } elseif (strlen($password) < 8 || 
              !preg_match("/[A-Z]/", $password) || 
              !preg_match("/[a-z]/", $password) || 
              !preg_match("/[\W]/", $password)) {
        $errors["password"] = "Password must be 8+ chars with uppercase, lowercase, and special char.";
    }

   
    if (empty($cpassword)) {
        $errors["cpassword"] = "Confirm Password is required.";
    } elseif ($password !== $cpassword) {
        $errors["cpassword"] = "Passwords do not match.";
    }

    if (empty($gender)) {
        $errors["gender"] = "Gender is required.";
    }


    if (empty($day) || empty($month) || empty($year)) {
        $errors["dob"] = "Date of Birth is required.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="CSS/registration.css">
    <style>
        .error { color: red; font-size: 0.9em; margin-left: 8em; }
    </style>
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
        <h2>Registration</h2>
        <form method="POST" action="">

            <div class="form-group">
              <label for="name"><strong>Name :</strong></label>
              <input type="text" id="name" name="name" value="<?php echo htmlspecialchars($name); ?>">
            </div>
            <?php if ($errors["name"]) echo "<div class='error'>{$errors['name']}</div>"; ?>
            <hr class="reg"><br>


            <div class="form-group">
              <label for="email"><strong>Email :</strong></label>
              <input type="email" id="email" name="email" value="<?php echo htmlspecialchars($email); ?>">
            </div>
            <?php if ($errors["email"]) echo "<div class='error'>{$errors['email']}</div>"; ?>
            <hr class="reg"><br>


            <div class="form-group">
              <label for="username"><strong>User Name :</strong></label>
              <input type="text" id="username" name="username" value="<?php echo htmlspecialchars($username); ?>">
            </div>
            <?php if ($errors["username"]) echo "<div class='error'>{$errors['username']}</div>"; ?>
            <hr class="reg"><br>


            <div class="form-group">
              <label for="password"><strong>Password :</strong></label>
              <input type="password" id="password" name="password">
            </div>
            <?php if ($errors["password"]) echo "<div class='error'>{$errors['password']}</div>"; ?>
            <hr class="reg"><br>


            <div class="form-group">
              <label for="cpassword"><strong>Confirm Password :</strong></label>
              <input type="password" id="cpassword" name="cpassword">
            </div>
            <?php if ($errors["cpassword"]) echo "<div class='error'>{$errors['cpassword']}</div>"; ?>
            <hr class="reg"><br>


            <div class="form-group">
              <label><strong>Gender :</strong></label>
              <div class="radio-group">
                <label><input type="radio" name="gender" value="male" <?php if($gender=="male") echo "checked"; ?>> Male</label>
                <label><input type="radio" name="gender" value="female" <?php if($gender=="female") echo "checked"; ?>> Female</label>
                <label><input type="radio" name="gender" value="others" <?php if($gender=="others") echo "checked"; ?>> Others</label>
              </div>
            </div>
            <?php if ($errors["gender"]) echo "<div class='error'>{$errors['gender']}</div>"; ?>
            <hr class="reg"><br>

       
            <div class="form-group">
              <label><strong>Date of Birth :</strong></label>
              <div class="dob-group">
                <input type="number" name="day" placeholder="DD" value="<?php echo htmlspecialchars($day); ?>" min="1" max="31">
                <input type="number" name="month" placeholder="MM" value="<?php echo htmlspecialchars($month); ?>" min="1" max="12">
                <input type="number" name="year" placeholder="YYYY" value="<?php echo htmlspecialchars($year); ?>" min="1900" max="2100">
              </div>
            </div>
            <?php if ($errors["dob"]) echo "<div class='error'>{$errors['dob']}</div>"; ?>
            <hr class="reg"><br>

   
            <div>
              <input type="submit" value="Submit">
              <input type="reset" value="Reset">
            </div>
        </form>
    </div>

    <footer>
        <hr>
        <p>Copyright &copy; 2017</p>
    </footer>
</body>
</html>
