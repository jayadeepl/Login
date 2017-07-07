<?php
    session_start();
    require_once('dbconfig/config.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet"href="https://fonts.googleapis.com/css?family=Rancho&effect=shadow-multiple">
  <link rel="stylesheet" href="css/style.css">
  <title>Homepage</title>
</head>
<body>
  <div class="container">
    <section id="content">
      <img src="images/login.png" alt="" class="image">
      <h1 class="font-effect-shadow-multiple">HELLO <?php  echo $_SESSION["Name"];?></h1>
        <a href="index.php"><input type="button" name="logout" value="Log Out"></a>
    </section>
  </div>
</body>
</html>
