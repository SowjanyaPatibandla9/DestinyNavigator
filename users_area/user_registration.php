<?php
  include('../includes/connect.php');
  include('../functions/common_function.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration</title>
    <!--Bootstrap css link-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!--font awasome link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" 
    integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
<script type="text/javascript">
        function formValidator() {
            var firstname = document.getElementById("user_username");
           // var lastname = document.getElementById("lastname");
            var email = document.getElementById("user_email");
            var pass = document.getElementById("user_password");
            var addr = document.getElementById("user_address");
            var mobno = document.getElementById("user_contact");
            if (notEmpty(firstname, "can not be null")) {
                if (isAlphabet(firstname, "Please enter only letters for ur first name")) {
                    if (lengthRestriction(firstname, 6)) {
                            if (emailValidator(email, "Please enter a valid email")) {
                                if (lengthRestriction(pass, 6)) {
                                    if (isAlphanumeric(pass, "please enter Numbers and letters only")) {
                                        if (notEmpty(addr, "please enter the address")) {
                                            if (isNumeric(mobno, "please enter a valid mobile number")) {
                                                if (lengthRestriction1(mobno, 10, 10)) {
                                                    return true;
                                                }
                                            }
                                        }
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
    <div class="container-fluid my-3">
        <h2 class="text-center">New User Registration</h2>
        <div class="row d-flex align-items-center justify-content-center">
            <div class="col-lg-12 col-xl-6">
                <form action="" onsubmit="return formValidator()" method="post" enctype="multipart/form-data">
                    <!--username-->
                    <div class="form-outline mb-4">
                        <label for="user_username" class="form-label">UserName</label>
                        <input type="text" id="user_username" class="form-control" placeholder="Enter your username" 
                        autocomplete="off" required="required" name="user_username"/>
                    </div>
                    <!--email-->
                    <div class="form-outline mb-4">
                        <label for="user_email" class="form-label">Email</label>
                        <input type="email" id="user_email" class="form-control" placeholder="Enter your email" 
                        autocomplete="off" required="required" name="user_email"/>
                    </div>
                    <!--image
                    <div class="form-outline mb-4">
                        <label for="user_image" class="form-label">User Image</label>
                        <input type="file" id="user_image" class="form-control" 
                         required="required" name="user_image"/>
                    </div>-->
                    <!--password-->
                    <div class="form-outline mb-4">
                        <label for="user_password" class="form-label">Password</label>
                        <input type="password" id="user_password" class="form-control" placeholder="Enter your password" 
                        autocomplete="off" required="required" name="user_password"/>
                    </div>
                    <!-- confirmpassword-->
                    <div class="form-outline mb-4">
                        <label for="conf_user_password" class="form-label">Confirm Password</label>
                        <input type="password" id="conf_user_password" class="form-control" placeholder="Confirm password" 
                        autocomplete="off" required="required" name="conf_user_password"/>
                    </div>
                    <!--Address-->
                    <div class="form-outline mb-4">
                        <label for="user_address" class="form-label">Address</label>
                        <input type="text" id="user_address" class="form-control" placeholder="Enter your address" 
                        autocomplete="off" required="required" name="user_address"/>
                    </div>
                    <!--contact-->
                    <div class="form-outline mb-4">
                        <label for="user_contact" class="form-label">Mobile Number</label>
                        <input type="text" id="user_contact" class="form-control" placeholder="Enter your mobile number" 
                        autocomplete="off" required="required" name="user_contact"/>
                    </div>
                    <div class="mt-4 pt-2">
                        <input type="submit" value="Register" class="bg-info py-2 px-3 border-0" name="user_register">
                        <p class="small fw-bold mt-2 pt-1 mb-0">Already have an account?<a href="user_login.php" class="text-danger"> Login</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>

<?php
if(isset($_POST['user_register'])){
    $user_username=$_POST['user_username'];
    $user_email=$_POST['user_email'];
    $user_password=$_POST['user_password'];
    $hash_password=password_hash($user_password,PASSWORD_DEFAULT);
    $conf_user_password=$_POST['conf_user_password'];
    $user_address=$_POST['user_address'];
    $user_contact=$_POST['user_contact'];
  //  $user_image=$_FILES['user_image']['name'];
  //  $user_image_tmp=$_FILES['user_image']['tmp_name'];
    $user_ip=getIPAddress();
    //select query
   
    $select_query="Select * from user_table where username='$user_username' or user_email='$user_email'";
    $result=mysqli_query($con,$select_query);
    $rows_count=mysqli_num_rows($result);
    if($rows_count>0){
        echo "<script>alert('username and email already exist')</script>";

    }else if ( $user_password!=$conf_user_password){
        echo "<script>alert('Passwords donot match
        ')</script>";

    }
    
    else{
        //insert query
       // move_uploaded_file($user_image_tmp,"./user_area1/user_images/$user_image");
   

        $insert_query="insert into user_table (username,user_email,user_password,user_ip,user_address,user_mobile)
        values ('$user_username','$user_email','$hash_password',' $user_ip','$user_address','$user_contact')";
        $sql_execute=mysqli_query($con,$insert_query);
    }
    
    //selecting cart items
    $select_cart_items="Select * from cart_details where ip_address='$user_ip'";
    $result_cart=mysqli_query($con,$select_cart_items);
    $rows_count=mysqli_num_rows($result_cart);
    if($rows_count>0){
        $_SESSION['username']=$user_username;
        echo "<script>alert('You have items in your cart')</script>";
        echo "<script>window.open('checkout.php','_self')</script>";

    }
    else{
        echo "<script>window.open('../index11.php','_self')</script>";

    }


}
?>