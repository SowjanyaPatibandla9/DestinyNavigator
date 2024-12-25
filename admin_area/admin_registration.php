<?php
  include('../includes/connect.php');
  include('../functions/common_function.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Registration</title>
    <!-- bootsrap css link-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!--fontawasome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" 
    integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        body{
            overflow-x:hidden;
        }
        </style>
</head>
<body>
<script type="text/javascript">
        function formValidator() {
            var firstname = document.getElementById("username");
            //var lastname = document.getElementById("lastname");
            var email = document.getElementById("email");
            var pass = document.getElementById("password");
            var addr = document.getElementById("addr");
            var mobno = document.getElementById("mobno");
            if (notEmpty(firstname, "can not be null")) {
                if (isAlphabet(firstname, "Please enter only letters for ur first name")) {
                    if (lengthRestriction(firstname, 6)) {
                    
                            if (emailValidator(email, "Please enter a valid email")) {
                                if (lengthRestriction(pass, 6)) {
                                    if (isAlphanumeric(pass, "please enter Numbers and letters only")) {
                                        
                                                    return true;
                                          
                                        
                                    
                                }
                            }
                        }
                    }
                }
            } return false;
        }
        function notEmpty(elem, helperMsg) {
            if (elem.value.length == 0) {
                alert(helperMsg);
                elem.focus();
                return false;
            }
            return true;
        }
        function isNumeric(elem, helperMsg) {
            var numericExpression = /^[0-9]+$/;
            if (elem.value.match(numericExpression)) {
                return true;
            } else {
                alert(helperMsg);
                elem.focus();
                return false;
            }
        }
        function isAlphabet(elem, helperMsg) {
            var alphaExp = /^[a-zA-Z]+$/;
            if (elem.value.match(alphaExp)) {
                return true;
            } else {
                alert(helperMsg);
                elem.focus();
                return false;
            }
        }
        function isAlphanumeric(elem, helperMsg) {
            var alphaExp = /^[0-9a-zA-Z]+$/;
            if (elem.value.match(alphaExp)) {
                return true;
            } else {
                alert(helperMsg);
                elem.focus();
                return false;
            }
        }
        function lengthRestriction(elem, min) {
            var uInput = elem.value;
            if (uInput.length >= min) {
                return true;
            } else {
                alert("Please enter minimum" + min + "characters");
                elem.focus();
                return false;
            }
        }
        function emailValidator(elem, helperMsg) {
            var emailExp = /^[\w\-\.\+]+\@[0-9a-zA-Z\.\-]+\.[a-zA-Z0-9]{2,4}$/;
            if (elem.value.match(emailExp)) {
                return true;
            } else {
                alert(helperMsg);
                elem.focus();
                return false;
            }
        }
        function lengthRestriction1(elem, min, max) {
            var uInput = elem.value;
            if (uInput.length >= min && uInput.length <= max) {
                return true;
            } else {
                alert("Please enter 10 numbers only");
                elem.focus();
                return false;
            }
        }
    </script>
    <div class="container-fluid">
        <h2 class="text-center mb-5">Admin Registration</h2>
        <div class="row d-flex justify-content-center ">
            <div class="col-lg-6 col-xl-5 ">
                <img src="admin.png" alt="Admin Registration" class="img-fluid">
            </div>
            <div class="col-lg-6  col-xl-4">
                <form action=""  onsubmit="return formValidator()" method="post">
                    <div class="form-outline mb-4">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" id="username" name="username" placeholder="enter your name" 
                        required="required" class="form-control">
                    </div>
                    <div class="form-outline mb-4">
                        <label for="email" class="form-label">Email</label>
                        <input type="text" id="email" name="email" placeholder="enter your Email" 
                        required="required" class="form-control">
                    </div>
                    <div class="form-outline mb-4">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" id="password" name="password" placeholder="enter your password" 
                        required="required" class="form-control">
                    </div>
                    <div class="form-outline mb-4">
                        <label for="confirm_password" class="form-label">Confirm Password</label>
                        <input type="password" id="confirm_password" name="confirm_password" 
                        placeholder="confirm password" 
                        required="required" class="form-control">
                    </div>
                    <div>
                        <input type="submit" class="bg-info py-2 px-3 border-0" name="admin_registration" value="Register">
                        <p class="small fw-bold mt-2 pt-1 ">Do you have an account?<a href="admin_login.php"
                         class="link-danger">Login</a> </p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>

<?php
if(isset($_POST['admin_registration'])){
    $username=$_POST['username'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $hash_password=password_hash($password,PASSWORD_DEFAULT);
    $confirm_password=$_POST['confirm_password'];
    
  
    //select query
   
    $select_query="Select * from `admin_table` where admin_name='$username' or admin_email='$email'";
    $result=mysqli_query($con,$select_query);
    $rows_count=mysqli_num_rows($result);
    if($rows_count>0){
        echo "<script>alert('username and email already exist')</script>";

    }else if ( $password!=$confirm_password){
        echo "<script>alert('Passwords donot match')</script>";

    }
    
    else{
        //insert query
       // move_uploaded_file($user_image_tmp,"./user_area1/user_images/$user_image");
   

        $insert_query="insert into `admin_table` (admin_name,admin_email,admin_password)
        values ('$username','$email','$hash_password')";
        $sql_execute=mysqli_query($con,$insert_query);
    }
}