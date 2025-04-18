<?php
session_start();



$server = "localhost";
$username = "root";
$password = "";
$db_name = "mydb";
$con = "";


$con = mysqli_connect($server, $username, $password, $db_name);

if($con){
    echo"database connected . <br>";
    $stmt = $con->prepare("insert into regise")
}

?>