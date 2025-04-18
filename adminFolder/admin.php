<?php

include("database.php");
session_start();

if ($_SESSION['usertype']== 1){
    header("location: dashboard.php");
}
elseif($_SESSION['usertype']== 0){
    echo "<h1>HAHAAHHHAHAHAHA</h1>";
    header("location: ../index.php");
}
else{
    echo"not register";
}





//Update data


if(isset($_POST['btn_edit'])){
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $createpassword = $_POST['createpassword'];
    $confirmpassword = $_POST['confirmpassword'];
    $usertype = $_POST['usertype'];


    $query = "UPDATE catba SET names='$name', email='$email', createpassword='$createpassword', confirmpassword='$confirmpassword', usertype='$usertype' WHERE id='$id'";
    $query_run = mysqli_query($con,$query);

    if($query_run){
        echo '<script> alert("Updated succesfully"); </script>';
        header("location: dashboard.php");

    }

}

?>