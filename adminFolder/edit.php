<?php

include("database.php");

if(isset($_GET['edit_id'])){
    $id = $_GET['edit_id'];

    $query = "SELECT * FROM catba WHERE id='$id'";
    $query_run = mysqli_query($con,$query);

    if(mysqli_num_rows($query_run)>0){
        foreach($query_run as $rows){
            $id = $rows['id'];
            $name = $rows['names'];
            $email = $rows['email'];
            $createpassword = $rows['createpassword'];
            $confirmpassword = $rows['confirmpassword'];
            $usertype = $rows['usertype'];

        } ?>





<div id="createAccountForm">
<h2><a href="dashboard.php">Back</a></h2>
    <form action="admin.php" method="post">
    <h2>CHANGE INPUT TO UPDATE AUTOMATICALLY</h2>

    <input type="hidden" name="id" id="name" value="<?=$id?>"><br>




        <label for="name">Name</label><br>
        <input type="text" name="name" id="name" value="<?=$name?>"><br>
      

        
        <label for="email">Email</label><br>
        <input type="email" name="email" id="email" value="<?=$email?>"><br>
     
       

        <label for="createpassword">Password</label><br>
        <input type="password" name="createpassword" id="createpassword" value="<?=$createpassword?>"><br>
      

        <label for="confirmpassword">Confirm Password</label><br>
        <input type="password" name="confirmpassword" id="confirmpassword" value="<?=$confirmpassword?>"><br>
     
        <label>User Type:
            <select name="usertype"  value="<?=$usertype?>" required>
                <option value="1">Admin</option>
                <option value="0">User</option>
            </select>
        </label><br>

        <input type="submit" name="btn_edit" value="Update">
        
    </form>
  
</div>

    <?php


































       } } ?>

