<?php
  session_start();
  include("connection.php");
  if (isset($_POST["submit"])) {
    $name = $_POST["name"];
    $contact = $_POST["contact"];
    $city = $_POST["city"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $text = $_POST["text"];
    $sql = "INSERT INTO `contactus` (`name`, `contact_no`, `city`, `email`, `subject`, `message`) VALUES ('$name', '$contact', '$city', '$email', '$subject', '$text')";
    $result = mysqli_query($conn,$sql);
    if ($result) {
      echo '<div class="alert alert-success mt-6" role="alert">Form is successfully submitted</div>';
    }
    else{
      echo '<div class="alert alert-danger mt-6" role="alert">Form not submitted</div>';
    }
  }
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contact Us</title>
    <link rel="icon" type="image/x-icon" href="img99.png">
    <link href="css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="bootstrap.min.css">
        <style>
          body{
            background: url('background.jpg');
          }
          .inout{
              animation: animate 3s linear 0.5s 1;
          }
          @keyframes animate {
              0%{
                transform: scale(1);
              }
              25%{
                transform: scale(0.5);
              }
              50%,100%{
                transform: scale(1);
              }
          }
        </style>
  </head>
<body>
<?php
    include("header.php");
    ?>

      <!-- <div class="card w-25">
        <img src="img11.jpeg" alt="hello" width="339">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        </div>
      </div> -->
      <!-- <div class="card w-25">
        <iframe width="335" height="315" src="https://www.youtube.com/embed/jB1isjVGZ8U" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
      <div class="card w-25">
        <iframe width="335" height="315" src="https://www.youtube.com/embed/jB1isjVGZ8U" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
    </div> -->
    <br>
    <div class="p-3 text-center text-light inout">
      <h1 class="mb-3">Contact Us</h1>
    </div>
    <br>
    <div class="container col-xl-10 col-xxl-8 px-4 py-5">
        <div class="row align-items-center g-lg-5 py-5">
          <div class="col-lg-7 text-center text-lg-start">
            <img src="img14.jpg" width="600" alt="">
          </div>
          <div class="col-md-10 mx-auto col-lg-5">
            <form class="p-4 p-md-5 border rounded-3 bg-light" method="POST">
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" name="name" id="floatingPassword" placeholder="Name">
                    <label for="floatingPassword">Name</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="number" class="form-control" name="contact" id="floatingPassword" placeholder="Phone number">
                    <label for="floatingPassword">Contact number</label>
                  </div>
                  <div class="form-floating mb-3">
                    <input type="text" class="form-control" name="city" id="floatingPassword" placeholder="City">
                    <label for="floatingPassword">City</label>
                  </div>
              <div class="form-floating mb-3">
                <input type="email" class="form-control" name="email" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Email address</label>
              </div>
              <div class="form-floating mb-3">
                <input type="text" class="form-control" name="subject" id="floatingPassword" placeholder="Subject">
                <label for="floatingPassword">Subject</label>
              </div>
              <div class="form-floating mb-3">
                <textarea placeholder="Type the Message" name="text" cols="45" rows="5"></textarea>
              </div>
              <button class="w-100 btn btn-lg btn-primary" name="submit" type="submit">Submit Form</button>
              <hr class="my-4">
              <small class="text-muted">By Submitting Form, you agree to the terms of use.</small>
            </form>
          </div>
        </div>
      </div>
      <br>
      <?php
        include("footer.php");
       ?>
      <!-- <p class="float-end"><a href="#">Back to top</a></p> -->
    <script src="js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
</body>
</html>