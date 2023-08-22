<?php
session_start();
if (isset($_POST["submit"])) {
    setcookie("login","",time()-3600,"/");
    header("Location: log.php");
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
        <h2 class="header">Want to Logout</h2>
            <a href="main.php" style="top:40px;" class="link">Go Back</a>
                <input type="submit" class="btn" name = "submit" value="Logout">
    </form>
</section>
</body>
</html>