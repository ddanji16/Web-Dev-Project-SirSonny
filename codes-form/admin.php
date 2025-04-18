<?php
session_start();

if ($_SESSION['usertype']== 1){
    header("location: dashboard.php");
}
else{
    echo "<script> alert('not admin'); </script>";
    header("location: index.php");
}

?>