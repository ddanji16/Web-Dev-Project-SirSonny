<?php
session_start();

$email = $password = "";


if(isset($_POST["login"])){

    $useremail = $_POST["email"];
    $userpassword = $_POST["password"];

    if(empty($useremail)){
        echo"Empty Email";
    }
    elseif(empty($userpassword)){
        echo"Empty password";
    }
    elseif(empty($_SESSION["email"])){
        echo "no email register";
    }
    elseif (empty($_SESSION["email"])){
        echo "no password register";
    }

    elseif($useremail ==  $_SESSION["email"] && $userpassword  == $_SESSION["createpassword"]) {
      
         if($_SESSION["usertype"] == 0){
            header("location: index.php");
        }
         elseif($_SESSION["usertype"] == 1){
            header("location: dashboard.php");
    }
  }
else{
    echo "Invalid input";
}

}



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>

<div class="logo2">
    <h2>CATBALOGAN CITY</h2>
    <img src="./img/logo.jpg" alt="">
  </div>


<div id="loginForm">
    
    <form action="loginForm.php" method="post">

    <h2>Login</h2>
        <label for="loginEmail">Email</label><br>
        <input type="email" id="loginEmail" name="email" placeholder="Email" required><br>

        <label for="loginPassword">Password</label><br>
        <input type="password" id="loginPassword" name="password" placeholder="Password" required><br>

        <input type="submit" name="login" value="Login">
        <p>Don't have an account? <a href="registerForm.php">Create Account</a></p>
    </form>
    

</div>
</body>
</html>