<?php
session_start();

$email = $password = "";
$emailerror = $passerror = "";
$emailnotregister = $passnotregister = $invalid = "";



if(isset($_POST["login"])){

    $useremail = $_POST["email"];
    $userpassword = $_POST["password"];

    if(empty($useremail)){
        $emailerror = "Empty Email";
    }
    elseif(empty($userpassword)){
        $passerror = "Empty password";
    }
    elseif(empty($_SESSION["email"])){
        $emailnotregister =  "No email register";
    }
    elseif (empty($_SESSION["createpassword"])){
        $passnotregister = "no password register";
    }

    elseif($useremail ==  $_SESSION["email"] && $userpassword  == $_SESSION["createpassword"]) {
      
         if($_SESSION["usertype"] == 0){
            header("location: index.php");
        }
         elseif($_SESSION["usertype"] == 1){
            header("location: ./adminFolder/dashboard.php");
    }
  }
else{
    $invalid = "Username invalid ";
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
        <input type="email" id="loginEmail" name="email" placeholder="Email"><br>
        <span class="err"><?=$emailerror?></span>
        <span class="err"><?= $emailnotregister?></span><br>   

        <label for="loginPassword">Password</label><br>
        <input type="password" id="loginPassword" name="password" placeholder="Password"><br>
        <span class="err"><?= $passerror?></span>
        <span class="err"><?= $passnotregister ?></span><br>   

        <input id="login" type="submit" name="login" value="Login"><br>
        <span class="err"><?= $invalid?></span><br> 
        <p>Don't have an account? <a href="registerForm.php">Create Account</a></p>
    </form>
    

</div>
</body>
</html>