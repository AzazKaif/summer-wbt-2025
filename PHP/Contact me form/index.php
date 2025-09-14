<?php

$firstname = $lastname = $email = $rfc = $speciality = $offerajob = $position = "";
$firstnameErr = $lastnameErr = $emailErr = $rfcErr = $specialityErr = $offerajobErr = $positionErr = "";


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (empty($_POST["firstname"])) {
        $firstnameErr = "First name is required";
    } else {
        $firstname = htmlspecialchars($_POST["firstname"]);
    }

    if (empty($_POST["lastname"])) {
        $lastnameErr = "Last name is required";
    } else {
        $lastname = htmlspecialchars($_POST["lastname"]);
    }

    if (empty($_POST["email"])) {
        $emailErr = "Email is required";
    } else {
        $email = htmlspecialchars($_POST["email"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format";
        }
    }

    if (empty($_POST["rfc"])) {
        $rfcErr = "Reason for contact is required";
    } else {
        $rfc = $_POST["rfc"];
    }

    if (empty($_POST["speciality"])) {
        $specialityErr = "Speciality selection is required";
    } else {
        $speciality = $_POST["speciality"];
    }

    if (empty($_POST["offerajob"])) {
        $offerajobErr = "Please select if you are offering a job";
    } else {
        $offerajob = $_POST["offerajob"];
    }

    if (empty($_POST["position"])) {
        $positionErr = "Position is required";
    } else {
        $position = $_POST["position"];
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form Validation</title>
    <style>
        .error { color: red; font-size: 14px; margin-left: 10px; }
        .form-group { margin-bottom: 12px; }

body {
    background-color: lightgray;
}

html, body {
    height: 100%;
    margin: 0;
    padding: 0;
    display: flex;
    flex-direction: column;
}

.main-content {
    flex: 1;
}

header {
    text-indent: 50px;
    font-weight: 700;
    text-align: center;
}

header a {
    margin-right: 50px;
    font-family: 'Segoe UI';
    text-decoration: none;
}

a {
    margin-right: 50px;
    font-family: 'Segoe UI';
}

.form-group{
        display: flex;
        align-items: center;
        margin-bottom: 10px;
    }

.form-group label {
        flex-basis: 700px;
        text-align: right;
        margin-right: 10px;
    }

footer {
    margin-right: 30px;
    text-align: center;
}

footer p {
    text-align: center;
}

footer img {
    width: 20px;
    height: 20px;
    margin-right: 10px;
}

footer a {
    margin-right: 20px;
    font-family: 'Gill Sans MT';
    text-decoration: none;
}
    </style>
</head>
<body>

<header>
        <a href="../index.html">Home</a>
        <a href="../html/Education.html">Education</a>
        <a href="../html/Experience.html">Experiance</a>
        <a href="../html/Project.html">Project</a>
        <a href="../html/ContactMe.html">Contact Me</a>
    </header>
    <hr>
    <h2>Contact Form</h2>
    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">

        <div class="form-group">
            <label>First Name:</label>
            <input type="text" name="firstname" value="<?php echo $firstname; ?>">
            <span class="error"><?php echo $firstnameErr; ?></span>
        </div>

        <div class="form-group">
            <label>Last Name:</label>
            <input type="text" name="lastname" value="<?php echo $lastname; ?>">
            <span class="error"><?php echo $lastnameErr; ?></span>
        </div>

        <div class="form-group">
            <label>Email:</label>
            <input type="text" name="email" value="<?php echo $email; ?>">
            <span class="error"><?php echo $emailErr; ?></span>
        </div>

        <div class="form-group">
            <label>Reason for Contact:</label><br>
            <input type="radio" name="rfc" value="Project" <?php if($rfc=="Project") echo "checked"; ?>> Project
            <input type="radio" name="rfc" value="Thesis" <?php if($rfc=="Thesis") echo "checked"; ?>> Thesis
            <input type="radio" name="rfc" value="Meet" <?php if($rfc=="Meet") echo "checked"; ?>> Meet
            <span class="error"><?php echo $rfcErr; ?></span>
        </div>

        <div class="form-group">
            <label>Speciality:</label>
            <select name="speciality">
                <option value="">Select</option>
                <option value="ml" <?php if($speciality=="ml") echo "selected"; ?>>Machine Learning</option>
                <option value="webtech" <?php if($speciality=="webtech") echo "selected"; ?>>Website</option>
                <option value="database" <?php if($speciality=="database") echo "selected"; ?>>Database</option>
            </select>
            <span class="error"><?php echo $specialityErr; ?></span>
        </div>

        <div class="form-group">
            <label>Are you offering a job?</label>
            <input type="radio" name="offerajob" value="Yes" <?php if($offerajob=="Yes") echo "checked"; ?>> Yes
            <input type="radio" name="offerajob" value="No" <?php if($offerajob=="No") echo "checked"; ?>> No
            <span class="error"><?php echo $offerajobErr; ?></span>
        </div>

        <div class="form-group">
            <label>Position in Company:</label>
            <select name="position">
                <option value="">Select</option>
                <option value="hr" <?php if($position=="hr") echo "selected"; ?>>HR</option>
                <option value="manager" <?php if($position=="manager") echo "selected"; ?>>Manager</option>
                <option value="employee" <?php if($position=="employee") echo "selected"; ?>>Employee</option>
            </select>
            <span class="error"><?php echo $positionErr; ?></span>
        </div>

        <div style="text-align: center; margin-top: 15px;">
            <input type="submit" value="Submit">
        </div>
    </form>


     <footer>
        <hr>
        <img src="../image/—Pngtree—email vector icon_3876244.png" alt="email" >
        <a>azazkaif3@gmail.com</a>
        <img src="../image/—Pngtree—circle phone call icon in_8997757.png" alt="phone" >
        <a>01796984411</a>
        <img src="../image/icons8-github-50.png" alt="github" >
        <a href="https://github.com/AzazKaif">GitHub</a>
        <br>
    
        <p>Copyright &copy; All rights reserved by Azaz Mohammad Kaif</p>
    </footer>
</body>
</html>
