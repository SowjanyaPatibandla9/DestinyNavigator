
   <h3 class="text-success mb-4">Delete_acount</h3> 
   <form action="" method="post" class="mt-5">
    <div class="form-outline mb-4">
        <input type="submit" class="form-control w-50 m-auto"name="delete" value="Delete Account">
    </div>
    <div class="form-outline mb-4">
        <input type="submit" class="form-control w-50 m-auto"name="dont_delete" value="Dont't delete Account">
    </div>
   </form>

   <?php
   $username_session=$_SESSION['username'];
   if(isset($_POST['delete'])){
    $delete_query="Delete from `user_table` where username='$username_session'";
    $result=mysqli_query($con,$delete_query);
    if($resutl){
        session_destroy();
        echo "<script>alert('Account deleted Successfully)</script>";
        echo "<script>window.open('../index11.php','_self')</script>";
    }
   }
   if(isset($_POST['dont_delete'])){
    echo "<script>window.open('profile.php','_self')</script>";
   }
   ?>