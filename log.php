<?php
session_start();
include("connection.php");

if (empty($_COOKIE['login'])) {

    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submit"])) {
    $email = $_POST["email"];
    $password = $_POST["password"];
    if ($_SESSION["email"] === $email && $_SESSION["password"] === $password) {
        setcookie("login","done",time()+ 86400 * 30,"/");
        header("Location: main.php");
        exit();
    } else {
        echo '<div class="alert alert-danger" role="alert">Invalid password or email</div>';
    }
}
}
else {
    header("Location: main.php");   
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="log.css">
    <link rel="icon" type="image/x-icon" href="img99.png">
</head>
<body>
    <section>
    <form action="" method="post">
        <h2 class="header">Login</h2>
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
            <p>Not registered?? </p>
            <a href="registered.php" class="link">Register</a>
                <input type="submit" class="btn" name = "submit" value="Login">
    </form>
</section>
</body>
</html>