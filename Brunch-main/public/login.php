<?php

session_start();

?>


<!DOCTYPE html>
<html>
    <head>
     <link rel="stylesheet" href="../src/css/stylesheet.css">
     <link rel="stylesheet" href="../src/css/login.css">
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
      <title>Log in</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
<body class="loginbody">

  <nav>
    <input type="checkbox" id="check">
    <label for="check" class="checkbtn">
      <i class="fas fa-bars"></i>
    </label>
    <div class="logo">
      <p>BRUNCH</p>
    </div>
    <ul>
      <li><a href="">HOME</a></li>
      <li><a href="">MENU</a></li>
      <li><a href="">CONTACT</a></li>
      <li><a href="">ACCOUNT</a></li>
      <li><a href="">ABOUT</a></li>
    </ul>
  </nav>
  
  <form class="login-form" method="post" action="login-config.php">
    <h1>LOGIN</h1>
    <input type="text" name="username" placeholder="Username" required>
    <input type="password" name="password" placeholder="Password" required>
    <input type="submit" value="Login"><br>
    <a href="register.php">Don't have an account? Sign up here</a>
  </form>


</body>
</html>