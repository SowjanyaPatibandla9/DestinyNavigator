<?php
$name = $_POST["name"];
$mbl = $_POST["mobile"];
$visitor_email = $_POST["email"];
$message = $_POST["message"];
$connection = mysqli_connect("localhost","root","","contact_information") or die("coonection failed!");
$sql = "INSERT INTO user_info(name,mobile,email,message) VALUES('{$name}','{$mbl}','{$visitor_email}','{$message}')";
$result=mysqli_query($connection,$sql) or die("query failed");
header("location:http://localhost/wt/contactpagef.php");
mysqli_close($connection);

?>
