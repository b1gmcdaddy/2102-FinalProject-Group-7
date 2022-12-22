<?php

session_start();


$username = $_POST['username'];
$password = $_POST['password'];


$db = mysqli_connect('localhost', 'root', '');
  mysqli_select_db($db, '2102');

$query = "SELECT * FROM customer WHERE Username='$username' AND Password='$password'";
$result = mysqli_query($db, $query);

if (mysqli_num_rows($result) == 1) {
  
  $_SESSION['logged_in'] = true;
  $_SESSION['username'] = $username;
  header('location: index.html');
} else {
  // Login is unsuccessful
  $_SESSION['message'] = 'Login failed. Invalid username or password';
  header('location: login.php');
}

?>
