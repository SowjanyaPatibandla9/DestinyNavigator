<?php
 include('../includes/connect.php');
 if($_SERVER['REQUEST_METHOD']=='POST'){
    $FName=$_POST['fname'];
    $LName=$_POST['lname'];
    $Email=$_POST['email'];
    $Phone=$_POST['phone'];
    $Message=$_POST['message'];
    $sql="insert into `contactus` values('$FName','$LName','$Email','$Phone','$Message')";
    $result=mysqli_query($con,$sql);
   
  }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Responsive contact us form</title>
        <link href="https://fonts.googleapis.com/css2?family=Lora:wght@400;500&family=Playfair+Display:wght@700&family=Poppins:wght@400;500&display=swap" rel="stylesheet">
        <!--font awesome CDN-->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
        <link rel="stylesheet" href="contact.css">
    </head>
    <body>
    <section id="section-wrapper">
            <div class="box-wrapper">
                <div class="info-wrap">
                  <h2 class="info-title">Contact Information</h2>
                  <h3 class="info-sub-title">Fill up the form and our team will get back to you within 24 hours</h3>
</div> 
                <div class="form-wrap">
                    <form  method="POST">
                        <h2 class="form-title">Send us a message</h2>
                        <div class="form-fields">
                            <div class="form-group">
                                <input type="text" class="fname" name="fname" placeholder="First Name">
                            </div>
                            <div class="form-group">
                                <input type="text" class="lname" name="lname" placeholder="Last Name">
                            </div>
                            <div class="form-group">
                                <input type="email" class="email" name="email"placeholder="Mail">
                            </div>
                            <div class="form-group">
                                <input type="number" class="phone" name="phone" placeholder="Phone">
                            </div>
                            <div class="form-group">
                               <textarea type="text" id="" name="message" placeholder="Write Your Message"></textarea>
                            </div>
                        </div>
                        <input type="submit" value="Send message" class="submit-button">
                    </form>
</div></div>
        </section>
    </body>
</html>