<?php

include("database.php");



if(isset($_GET['delete_id'])){
    $id = $_GET['delete_id'];
    
    $query = "DELETE FROM catba WHERE id='$id'";
    $query_run = mysqli_query($con,$query);

    if( $query_run ){
        echo '<script> alert("Deteled succesfully"); </script>';
        header("location: dashboard.php");

    }
   
    



}




?>