<?php

session_start();

$name = $email = $createpassword = $confirmpassword = $usertype = "";

if(isset($_POST["register"])){


    if(empty($_POST["name"])) {     
        echo "incomplete Empty  name";      
       
    }
    elseif(empty($_POST["email"])){
        echo "incomplete Empty Email";
    }
    elseif (empty($_POST["createpassword"])){
        echo "incomplete Empty password";
    }

    elseif(empty($_POST["confirmpassword"])){
        echo "incomplete empty confirmpassword";
    }
    elseif(!empty($_POST["name"]) &&  !empty($_POST["email"]) &&  !empty($_POST["createpassword"]) && !empty($_POST["confirmpassword"])){

        if($_POST["createpassword"] == $_POST["confirmpassword"]){

        $_SESSION["name"] = $_POST["name"];
        $_SESSION["email"] = $_POST["email"];
        $_SESSION["createpassword"] = $_POST["createpassword"];
        $_SESSION["confirmpassword"]  = $_POST["confirmpassword"];
        $_SESSION["usertype"] = $_POST["usertype"];

        header("location: loginForm.php");
        }
        else{
            echo "<h1> password not macth hahahaha</h1>";
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
        <input type="text" name="name" id="name" placeholder="Name" required><br>

        <label for="email">Email</label><br>
        <input type="email" name="email" id="email" placeholder="Enter Email"  required><br>

        <label for="createpassword">Password</label><br>
        <input type="password" name="createpassword" id="createpassword" placeholder="Password" required><br>

        <label for="confirmpassword">Confirm Password</label><br>
        <input type="password" name="confirmpassword" id="confirmpassword" placeholder="Confirm Password" required><br>

        <label>User Type:
            <select name="usertype" required>
                <option value="1">Admin</option>
                <option value="0">User</option>
            </select>
        </label><br>

        <input type="submit" name="register" value="Submit">
        <p>Already have an account? <a href="loginForm.php">Log In</a></p>
    </form>
    
</div>
</body>
</html>
