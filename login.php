<?php
    session_start();
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
  <title>Login</title>
</head>
<body>
  <div class="container">
    <section id="content">
      <img src="images/login.png" alt="" class="image">
      <h1 class="font-effect-shadow-multiple">LOGIN FORM</h1>
      <form method="post" action="login.php">
        <div class="form">
          <input type="varchar" placeholder="Email" name="Email" class="inputvalues"required>
        </div>
        <div class="form">
          <input type="password" placeholder="Password" name="Password" class="inputvalues"required>
        </div>
        <input type="submit" id="login" name="login_btn" value="Log In"><br>
        <a href="register.php"><input type="button" id="register" value="Register"></a><br><br>
        <a href="#">Forgot Your Password..</a>
      </form>
      <?php
          if(isset($_POST['login_btn']))
          {
            @$Email=$_POST['Email'];
            @$Password=$_POST['Password'];
            $query = "select * from users where Email='$Email' and Password='$Password' ";
            $query_run = mysqli_query($con,$query);
            if($query_run)
            {
              if(mysqli_num_rows($query_run)>0)
              {
              //$row = mysqli_fetch_array($query_run,MYSQLI_ASSOC);

              $_SESSION['Email'] = $Email;
              $_SESSION['Password'] = $Password;

              header("Location: homepage.php");
              }
              else
              {
                echo '<script type="text/javascript">alert("No such User exists. Invalid Credentials")</script>';
              }
            }
            else
            {
              echo '<script type="text/javascript">alert("Database Error")</script>';
            }
          }
          else
          {
          }

       ?>
    </section>
  </div>
</body>
</html>
