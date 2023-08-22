<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0"/>

    <style>
      .my{
        animation-name: harry;
        animation-duration : 5s;
        animation-iteration-count: 1;
        animation-delay: 0.3s;
      }
      @keyframes harry {
        0%{
          transform: scale(1.5);
        }
        35%{
          transform: scale(0.8);
        }
        50%,100%{
          transform: scale(1);
        }
      }
      .dark{
            background-color: #222;
            color: #e6e6e6;
        }
        .color{
          color:white;
        }
        .color:hover,.color:focus{
          color:black;
          background: white;
          transition: .8s;
          border-radius: 14px;
        }
    </style>
</head>
<nav class="navbar navbar-expand-md sticky-top colo">
    <div class="container-fluid">
      <a class="navbar-brand" href="main.php">
                <img src="img1.png" alt="Bootstrap" width="90" height="44">
              </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav me-auto mb-2 mb-md-0 my">
              <li class="nav-item">
                <a class="nav-link color" aria-current="page" href="main.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link color" href="course.php">Courses</a>
              </li>
              <li class="nav-item">
                <a class="nav-link color" href="tutorial.php">Tutorials</a>
              </li>
              <li class="nav-item">
                <a class="nav-link color" href="about.php">About Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link color" href="contact.php">Contact Us</a>
              </li>
            </ul>
            <form class="d-flex" role="search">
              <a href="logout.php"><img src="user.png" class="color" style="height:30px; position:relative; right:20px;"></a>
              <!-- <button type="submit" class="bg-light rounded border border-dark m-2"><a href="register.php" class="nav-link text-dark">Register</a></button> -->
              
            </form>
          </div>
        </div>
      </nav>
</html>