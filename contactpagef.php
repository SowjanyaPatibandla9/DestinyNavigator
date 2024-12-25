<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Contact Us</title>
<!--link rel="stylesheet" href="style.css"-->
<style>
*{
padding: 0px;
margin: 0px;
}
body{
background-size: cover;
font-family: sans-serif;
text-align: center;
            background:linear-gradient(120deg,#ffffef,#17a3ce);
        
}
.contact-form{
margin-top: 100px;
color: #fff;
text-transform: uppercase;
transition: all 4s ease-in-out;
}
.contact-form h1{
font-size: 32px;
}
.contact-form h2{
font-size: 16px;
line-height: 30px;
}
form{
margin-top: 50px;
transition: all 4s ease-in-out;
}
.form-control{
width: 600px;
background: transparent;
border: none;outline: none;
border-bottom: 1px solid gray;
color: #000000;
font-size: 18px;
margin-bottom: 16px;
}
input{
height: 45px;
}
form .submit{
background: #ff3f6c;
border-color: transparent;
color: #fff;
font-size: 20px;
font-weight: bold;
letter-spacing: 2px;
height: 50px;
margin-top: 20px;
}
form .submit:hover{
background: #ffffff;
cursor: pointer;
color:black;
}
textarea{
resize: none;
}
</style>
</head>
<body>
<div class="contact-form">
<h1>CONNECT WITH US</h1>
<h2>We are always ready to serve you!</h2>
</div>
<div class="contact-us">
<form id="contact-us" method="post" action="connects.php">
<input type="text" name="name" class="form-control" placeholder="Your name"
required>
<br>
<input type="text" name="mobile" class="form-control" placeholder="Your mobile
number">
<br>
<input type="email" name="email" class="form-control" placeholder="Your Email"
required>
<br>
<textarea name="message" class="form-control" cols="" rows="3" placeholder="Enter
your massege" required></textarea>
<br>
<input type="submit" class="form-control submit" value="SEND MASSEGE">
</form>
</div>
</body>
</html>
