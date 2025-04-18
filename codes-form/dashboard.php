<?php


include("database.php");

session_start();

$query = "SELECT * FROM catba";
$query_run = mysqli_query($con,$query);




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
    <!--
    <link rel="stylesheet" href="dashboard.css">
-->
    <style>
        body{
            background-color: pink;
            margin: 0;
            padding: 0;
        }
        .navbar ul {
            list-style: none;
          
            margin-left: 20px; 
            display: flex;
            justify-content: flex-end;
      
        } 
        .navbar ul li{
            padding: 10px;
            margin: 10px; 
            border: 1px solid black;
            background-color: pink;
            transition: 3s;
           
        }
        .navbar ul li :hover{
            color: black; 
            padding: 20px;
            
            
        }
        span{
            color:  red;
        }
      


</style>

</head>
<body>

        <div class="navbar">

            <ul>
            <li><a href="index.php">Home</a></li>
            
            <li><a href="#">About Us</a></li>
            <li><a href="#">Missions and Vision</a></li>
            <li><a href="#">Preparedness Guidelines</a></li>
            <li><a href="#">Contacts</a></li>

    
            <li><a href="logout.php">Log-out</a></li>
          </ul>

          </div>
    

        

  
    <h1 style="text-align: center;";>WELCOME <span> <?php echo $_SESSION["name"];?></span>  TO ADMIN DASHBOARD </h1>
   

    
    <?php

if(mysqli_num_rows($query_run)>0){
    echo "<h3>Records:</h3>";
    echo "<table>";
    echo "<tr>";
    echo "<th>ID</th>";
    echo "<th>NAME</th>";
    echo "<th>EMAIL</th>";
    echo "<th>PASS</th>";
    echo "<th>PASS</th>";
    echo "<th>USER-TYPE </th>";
    echo "<th>ACTION</th>";
    echo "</tr>";
    while($rows = mysqli_fetch_assoc($query_run)){
        
        echo "<tr>";
       
        echo "<td style='border: 1px solid black;'>" . $rows["id"] ."</td>";
        echo "<td style='border: 1px solid black;'>" . $rows["names"] . "</td>";
        echo "<td style='border: 1px solid black;'>" . $rows["email"] . "</td>";
        echo "<td style='border: 1px solid black;'>" .  $rows["createpassword"] ."</td>";
        echo "<td style='border: 1px solid black;'>" . $rows["confirmpassword"] . "</td>";
        echo "<td style='border: 1px solid black;'>" . $rows["usertype"] . "</td>";
        echo "<td><a href='edit.php?edit_id=" .$rows["id"]. "'><button>Update</button></a> </td>";
        echo "<td><a href='edit.php?edit_id=" .$rows["id"]. "'><button>Delete</button></a> </td>";
        echo "<td><a href='edit.php?edit_id=" .$rows["id"]. "'><button>Add</button></a> </td>";
        echo "</tr>";


    };
    echo "</table>";

    
}
else{
    echo "No user register";
}

    
    
    
    
    
    
    ?>
    </table>
 
</html>