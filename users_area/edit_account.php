<?php
if(isset($_GET['edit_account'])){
    $user_session_name=$_SESSION['username'];
    $select_query="select * from `user_table` where username= '$user_session_name'";
    $result_query=mysqli_query($con,$select_query);
    $row_fetch=mysqli_fetch_assoc($result_query);
    $user_id=$row_fetch['user_id'];
    $username=$row_fetch['username'];
    $user_email=$row_fetch['user_email'];
    $user_address=$row_fetch['user_address'];
    $user_mobile=$row_fetch['user_mobile'];
}
    if(isset($_POST['user_update'])){
        $update_id=$user_id;
        $username=$_POST['username'];
        $user_email=$_POST['user_email'];
        $user_address=$_POST['user_address'];
        $user_mobile=$_POST['user_mobile'];
        //update query
        $update_data="update `user_table` set username=' $username',
        user_email='$user_email', user_address='$user_address',user_mobile='$user_mobile' where user_id=$update_id";
        $result_query_update=mysqli_query($con,$update_data);
        if($result_query_update){
            echo"<script>alert('data updated successfully')</script>";
            echo "<script>window.open('logout.php','_self')</script>";
        }
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit account</title>
</head>
<body>
   <h3 class=" text-success mb-4">Edit Account</h3>
    <form action="" method="post" enctype="multipart/form-data" >
        <div class="form-outline mb-4">
        <input type="text" class="form-control w-50 m-auto"  value="<?php echo $username ?>"name="username">
        </div>
        <div class="form-outline mb-4">
        <input type="email" class="form-control w-50 m-auto" value="<?php echo $user_email ?>" name="user_email">
        </div>
        <div class="form-outline mb-4">
        <input type="text" class="form-control w-50 m-auto"  value="<?php echo $user_address ?>" name="user_address">
        </div>
        <div class="form-outline mb-4">
        <input type="text" class="form-control w-50 m-auto" value="<?php echo $user_mobile ?>" name="user_mobile">
        </div>
        <input type="submit" value="update" class="bg-info py-2 px-3 border-0" name="user_update">
    </form>
</body>
</html>