<?php

echo "edit";
if(isset($_GET['edit_id'])){
    $id = $_GET['edit_id'];

    ?>

<div id="createAccountForm">
    
    <form action="#" method="post">
    <h2>Edit</h2>
        <label for="name">Name</label><br>
        <input type="text" name="name" id="name" placeholder="Name"><br>
      

        
        <label for="email">Email</label><br>
        <input type="email" name="email" id="email" placeholder="Enter Email"><br>
     
       

        <label for="createpassword">Password</label><br>
        <input type="password" name="createpassword" id="createpassword" placeholder="Password"><br>
      

        <label for="confirmpassword">Confirm Password</label><br>
        <input type="password" name="confirmpassword" id="confirmpassword" placeholder="Confirm Password"><br>
     
        <label>User Type:
            <select name="usertype" required>
                <option value="1">Admin</option>
                <option value="0">User</option>
            </select>
        </label><br>

        <input type="submit" name="edit" value="Update">
        
    </form>
  
</div>

    <?php



















}
?>