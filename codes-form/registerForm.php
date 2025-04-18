<?php

session_start();  

$name = $email = $createpassword = $confirmpassword = $usertype = "";
$namerror = $emailerror = $passworderror = $passnotmatch = "";

if(isset($_POST["register"])){


    if(empty($_POST["name"])) {     
        $namerror = " Empty  name";      
       
    }
    elseif(empty($_POST["email"])){
        $emailerror = " Empty  Email";  
    }
    elseif (empty($_POST["createpassword"])){
        $passworderror = "incomplete Empty password";
    }

    elseif(empty($_POST["confirmpassword"])){
        $passworderror = "incomplete Empty password";
    }
    elseif(!empty($_POST["name"]) &&  !empty($_POST["email"]) &&  !empty($_POST["createpassword"]) && !empty($_POST["confirmpassword"])){
       

        if($_POST["createpassword"] == $_POST["confirmpassword"]){

        $name =   $_POST["name"];
        $email = $_POST["email"];
        $createpassword =  $_POST["createpassword"];
        $confirmpassword =   $_POST["confirmpassword"];
        $usertype = $_POST["usertype"];

        
        $_SESSION['name']= $name;
        $_SESSION['email']= $email;
        $_SESSION['createpassword']= $createpassword;
        $_SESSION['confirmpassword']= $confirmpassword;
        $_SESSION['usertype']= $usertype;

        $server = "localhost";
        $username = "root";
        $password = "";
        $db_name = "catbadb";
        $con = "";


        $con = mysqli_connect($server, $username, $password, $db_name);

      
        $quary = "INSERT INTO catba (names,email, createpassword, confirmpassword, usertype)VALUE('$name','$email', '$createpassword', '$confirmpassword',  '$usertype')";
        $quary_run = mysqli_query($con, $quary);

        if($quary_run){
            header("location: loginForm.php");
        }
        else{
            echo"Not Register Not inserted to database";
        }
      
        }
        else{
            $passnotmatch = " password not same";
        }

       }
       
      
      
      
    
   
   
}

?>

<!-- registerForm.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>
    <link rel="stylesheet" href="register.css">
    
</head>
<body>

<div class="logo2">
    <h2>CATBALOGAN CITY</h2>
    <img src="./img/logo.jpg" alt="">
  </div>

<div id="createAccountForm">
    
    <form action="registerForm.php" method="post">
    <h2>Create Account</h2>
        <label for="name">Name</label><br>
        <input type="text" name="name" id="name" placeholder="Name"><br>
        <span class="err"><?=$namerror?></span><br>

        
        <label for="email">Email</label><br>
        <input type="email" name="email" id="email" placeholder="Enter Email"><br>
        <span class="err"><?=$emailerror?></span><br>
       

        <label for="createpassword">Password</label><br>
        <input type="password" name="createpassword" id="createpassword" placeholder="Password"><br>
        <span class="err"><?=$passworderror?></span>
        <span class="err"><?=$passnotmatch ?></span><br>

        <label for="confirmpassword">Confirm Password</label><br>
        <input type="password" name="confirmpassword" id="confirmpassword" placeholder="Confirm Password"><br>
        <span class="err"><?=$passworderror?></span>
        <span class="err"><?=$passnotmatch?></span><br>
        <label>User Type:
            <select name="usertype" required>
                <option value="1">Admin</option>
                <option value="0">User</option>
            </select>
        </label><br>

        <input id="submit" type="submit" name="register" value="Submit">
        <p>Already have an account? <a href="loginForm.php">Log In</a></p>
    </form>
  
</div>
</body>
</html>
