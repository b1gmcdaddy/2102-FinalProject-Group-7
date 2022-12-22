<!DOCTYPE html>
<html>
    <head>
     <link rel="stylesheet" href="../src/css/stylesheet.css">
     <link rel="stylesheet" href="../src/css/login.css">
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
      <title>Create an Account</title>
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
  
  <form class="login-form" method="post" action="signup.php">
    <h1>SIGN UP</h1>
    <input type="text" name="fname" placeholder="First Name" required>
    <input type="text" name="lname" placeholder="Last Name" required>
    <input type="text" name="username" placeholder="Username" required>
    <input type="email" name="email" placeholder="Email" required>
    <input type="password" name="password" placeholder="Password" required>
    <input type="tel" name="phone" placeholder="Phone Number" required><br>
    <input type="submit" value="SIGN UP"><br>
    <a href="login.php">Have an account? Login</a>
  </form>

</body>
</html>