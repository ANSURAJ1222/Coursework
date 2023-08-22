<?php
    session_start();
    include("connection.php");
    if (isset($_POST["submit"])) {
            $email = $_POST["email"];
            $password = $_POST["password"];
            $_SESSION["email"] = $email;
            $_SESSION["password"] = $password;
            $sql = "INSERT INTO `data` (`email`, `password`) VALUES ('$email', '$password');";
            if (mysqli_query($conn, $sql)) {
                header("Location: log.php");
                exit();
            }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coursework</title>
    <link rel="stylesheet" href="log.css">
    <link rel="icon" type="image/x-icon" href="img99.png">
</head>
<body>
<section>
    <form action="" method="post">
        <h2 class="header">Register</h2>
            <div class="input-box">
                <img src="user.png" style="height:20px; position: relative; left: 280px; top:38px;" alt="">
                <input type="text" name="username">
                <label for="Username">Username</label>
            </div>
            <div class="input-box">
                <img src="mail.png" style="height:20px; position: relative; left: 280px; top:38px;" alt="">
                <input type="email" name="email">
                <label for="email">Email</label>
            </div>
            <div class="input-box">
                <img src="padlock.png" style="height:20px; position: relative; left: 280px; top:38px;" alt="">
                <input type="password" name="password">
                <label for="password">Password</label>
            </div>
            <p>Already registered?? </p>
            <a href="log.php" class="link">Login</a>
                <input type="submit" class="btn" name = "submit" value="Register">
    </form>
</section>
</body>
</html>