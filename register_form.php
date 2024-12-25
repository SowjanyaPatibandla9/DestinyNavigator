<!DOCTYPE html>
<?php

@include 'confo.php';

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = mysqli_real_escape_string($conn,$_POST['password']);
   $cpass = mysqli_real_escape_string($conn,$_POST['cpassword']);
   $user_type = mysqli_real_escape_string($conn,$_POST['user_type']);

   if(empty($name) && empty($email) && empty($pass) && empty($cpass)){
      $error="*please fill the required fields";
   }
   else if(empty($name)){
      $error="*name field is required";
   }
   elseif(!preg_match("/^[a-zA-Z]*$/",$name)){
      $error="*name must contain letters only";
   
   }
   else if(strlen($name)<3 || strlen($name)>30){
      $error="*name must be between 3 to 30 characters";
   }
   else if(empty($email)){
      $error="*email field is required";
   }
   else if(!preg_match("/^[_a-zA-Z]+[_0-9-]*@gmail.com*$/",$email))
   {
      $error="*invalid email format";
   }   
    else if(empty($pass)){
       $error="*password field is required";
   }
   else if($pass != $cpass){
       $error="*password doesnt match";
   }
   else if(strlen($pass)<6){
       $error="*password must be at least 6 characters";
   }

else{ 
   $check_email ="SELECT *FROM user_form WHERE email='$email' && password='$pass'";
   $data=mysqli_query($conn,$check_email);
   $result=mysqli_fetch_array($data);
   if ($result > 0){
   $error="email already exists";
   }else{
      $pass=md5($pass);
      $insert="INSERT INTO user_form ( 
         name, email, password,user_type) Values('$name','$email','$pass','$user_type')";
      $q = mysqli_query($conn,$insert);
      if($q){
         $success = "your account has been created successfully";
      }
      header('location:loginpage.php');
   }
}
}


?>


<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>register form</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="styles.css">
</head>
<body>
   
<div class="form-container">

   <form action="" method="post">
      <h3>register now</h3>
      <p style="color : #f9075d">
      <?php
      if(isset($error)){
            echo $error;
         }
      ?>
      </p>
      <p style="color : green">
      <?php
      if(isset($success)){
            echo $success;
         }
      ?>
      </p>
      <input type="text" name="name" placeholder="Enter your name" value="<?php
       if(isset($error)){
         echo $name;
       } ?>">
      <input type="email" name="email" placeholder="Enter your email" value="<?php
       if(isset($error)){
         echo $email;
       } ?>">
      <input type="password" name="password" placeholder="Enter your password">
      <input type="password" name="cpassword" placeholder="Confirm your password">
      <select name="user_type">
         <option value="user">user</option>
         <!--option value="admin">admin</option-->
      </select>
      <input type="submit" name="submit" value="register now" class="form-btn">
      <p>Already have an account? <a href="login_form.php">login now</a></p>
   </form>

</div>

</body>
</html>
