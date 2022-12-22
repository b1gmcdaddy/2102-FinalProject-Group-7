<?php

    session_start();

    $con = mysqli_connect('localhost', 'root', '');
    mysqli_select_db($con, '2102');

    $firstname = $_POST['fname'];
    $lastname = $_POST['lname'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $pass = $_POST['password'];
    $phone = $_POST['phone'];
    

    $s = "select * from customer where Email = '$email'";

    $result = mysqli_query($con, $s);
    $num = mysqli_num_rows($result);

    if($num > 0) {
        echo 
        '<script>
        window.alert("This Email Is Already Taken")
        </script>';
    }
    else {
        $reg = "Insert into customer(FirstName,LastName,Username, Email, Password, Phone) values ('$firstname', '$lastname', '$username', '$email', '$pass', '$phone')";
        
        mysqli_query($con, $reg);
        header("Location: login.php");
    }
?>