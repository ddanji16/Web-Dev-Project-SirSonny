<?php


include("database.php");

$query = "SELECT * FROM users";
$query_run = mysqli_query($con,$query);

if(mysqli_num_rows($query_run)>0){
    while($rows = mysqli_fetch_assoc($query_run)){
        echo  $rows["id"]. "<br>";
        echo $rows["username"] ."<br>";
        echo $rows["password"];

    };
}
else{
    echo "No user register";
}


/*

$query = INSERT INTO user(fname,mname,lname);
year=level,section,course) VALUES

$query-run =mysqli|_query($conn,$query);
if ($query-run){
echo"New data Successfully inserted";
}

$query = UPDATE user SET 'fname' =,mname=""
lname ="",year-level = ",section= ",course"=""
WHERE id= 1";
$query-run=mysqli_query($conn,$query);
if($query-run) {
echo "Data successfully updated";
}

$query = 'DELETE FROM user WHERE id=1';
$query-run = mysqli_query($conn,$query),;
if($query-run){
echo "Data has been deleted";
}
*/


mysqli_close($con);




?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
  
    <h1>Welcome <?php echo $_SESSION["name"];?>  to admin dashboard </h1>
    <a href="logout.php">Log-out</a>
 
</html>