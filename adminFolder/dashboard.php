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

        
        .logo2 img{
        position: absolute;
        width: 8vw;
        border: 2px solid black;
        box-shadow: 5px 4px 10px black;
        top: 5%;
        left: 3%;
        border-radius: 110px;
        
        }
        .logo2 h2{
        position: absolute;
        top: 8%;
        left: 12%;
        font-size: 25px;
        font-family: arial;
        color: black;
        text-shadow: 1px 5px 10px rgb(0, 0, 0);
        }


        h1{
            text-align: center;
            margin-top: 100px;
            text-shadow: 1px 5px 10px rgb(0, 0, 0);
            color: rgb(100, 20, 0);
        }
        span{
            color:  black;

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
            box-shadow: 1px 5px 10px rgb(0, 0, 0);
           
        }
        .navbar ul li :hover{
            color: black; 
           
            
            
            
        }
    
      table{
        border:5px solid black;
        margin-left: 230px;

      }
      th{
        border:1px solid black;
        padding: 10px;
        background-color: tomato;
        
       
      }
      td{
        border:1px solid black;
        padding: 5px;
        
      }
      h3{
        text-align: center;
        margin-top: 50px;
      }
      button{
        color:  black;
        padding: 10px;
        border-radius: 5px;
        
      }
      #delete{
        background-color:crimson;
      }
      #update{
        background-color: blue;
      }
      #add{
        background-color: gray;

      }
      #add:hover{
        color: black;
        background-color: white;
        
      }
      #update:hover{
        color: black;
        background-color: white;
      }
      #delete:hover{
        color: black;
        background-color: white;
      }
        

</style>

</head>
<body>

<div class="logo2">
    <h2>CATBALOGAN CITY</h2>
    <img src="../img/logo.jpg" alt="">
  </div>

     

        <div class="navbar">

            <ul>
            <li><a href="../index.php">Home</a></li>
            
            <li><a href="#">About Us</a></li>
            <li><a href="#">Missions and Vision</a></li>
            <li><a href="#">Preparedness Guidelines</a></li>
            <li><a href="#">Contacts</a></li>

    
            <li><a href="../logout.php">Log-out</a></li>
          </ul>

          </div>
    

        

  
    <h1>WELCOME <span> <?php echo $_SESSION["name"];?></span>  TO ADMIN DASHBOARD </h1>
    
    
   

    
    <?php

if(mysqli_num_rows($query_run)>0){
    echo "<h3>RECORDS</h3>";
    echo "<table>";
    echo "<tr>";
    echo "<th>ID</th>";
    echo "<th>NAME</th>";
    echo "<th>EMAIL</th>";
    echo "<th>PASS</th>";
    echo "<th>PASS</th>";
    echo "<th>USER-TYPE </th>";
    echo "<th colspan='3'>ACTION</th>";
    echo "</tr>";
    while($rows = mysqli_fetch_assoc($query_run)){
        
        echo "<tr>";
       
        echo "<td>" . $rows["id"] ."</td>";
        echo "<td>" . $rows["names"] . "</td>";
        echo "<td>" . $rows["email"] . "</td>";
        echo "<td>" .  $rows["createpassword"] ."</td>";
        echo "<td>" . $rows["confirmpassword"] . "</td>";
        echo "<td>" . $rows["usertype"] . "</td>";
        echo "<td><a href='edit.php?edit_id=" .$rows["id"]. "'><button id='update'>Update</button></a> </td>";
        echo "<td><a href='delete.php?delete_id=" .$rows["id"]. "'><button id='delete'>Delete</button></a> </td>";
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