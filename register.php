<?php
    require 'dbconfig/config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet"href="https://fonts.googleapis.com/css?family=Rancho&effect=shadow-multiple">
  <link rel="stylesheet" href="css/style.css">
  <title>Registration Page</title>
</head>
<body>
  <div class="container">
    <section id="content">
      <img src="images/login.png" alt="" class="image">
      <h1 class="font-effect-shadow-multiple">REGISTER HERE</h1>
      <form method="post" action="register.php">
        <div class="form">
          <input type="varchar" name="Name" placeholder="Name" class="inputvalues"required>
        </div>
        <div class="form">
          <input type="int" name="Mobile" placeholder="Mobile" class="inputvalues">
        </div>
        <div class="form">
          <input type="varchar" name="Email" placeholder="Email" class="inputvalues"required>
        </div>
        <div class="form">
          <input type="password" name="Password" placeholder="Password" class="inputvalues"required>
        </div>
        <input type="submit" name="register_btn" id="register" value="Register"><br>
        <a href="login.php"><input type="button" id="login" value="Log In"></a><br><br>
      </form>
      <?php
          if(isset($_POST['register_btn']))
          {
            //echo '<script type="text/javascript"> alert("Button Clicked")</script>';
            $Name = $_POST['Name'];
            $Mobile = $_POST['Mobile'];
            $Email = $_POST['Email'];
            $Password = $_POST['Password'];

            $query = "SELECT * FROM users WHERE Email='$Email'";
            $query_run = mysqli_query($con,$query);

            if (mysqli_num_rows($query_run)>0) {
              echo '<script type="text/javascript"> alert("Already Exists")</script>';
            }
            else
            {
              $query = "INSERT INTO users VALUES('$Name','$Mobile','$Email','$Password')";
              $query_run = mysqli_query($con,$query);

              if (query_run) {
                echo '<script type="text/javascript"> alert("Succesfully Registered")</script>';
              }
              else {
                echo '<script type="text/javascript"> alert("Error")</script>';
              }
            }

          }
      ?>
    </section>
  </div>
</body>
</html>
