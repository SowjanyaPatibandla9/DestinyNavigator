<?php
include('../includes/connect.php');
include('../functions/common_function.php');
@session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ecommerce Website</title>
    <!-- Bootstrap css link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- Font awesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" 
    integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- CSS file -->
    <link rel="stylesheet" href="stylle.css">
    <style>
       img { 
        width: 100%;
       }
      
    
    </style>
</head>
<body>
<div class="container">

<h2 class="text-center text-info">Payment options</h2>

<div class="row d-flex justify-content-center align-items-center

my-5">

<div class="col-md-6">

<a href="https://www.paypal.com" target="_blank"><img src="payment.png" alt="" class="payment_img"></a>

</div>



</div>

</div>
       
        <div class="col-md-6">
       <?php

// Prepare the SQL query to retrieve the user
$user_ip = isset($_SERVER['REMOTE_ADDR']) ? $_SERVER['REMOTE_ADDR'] : null;
//echo "$user_ip";
$get_user = "SELECT * FROM `user_table` WHERE user_ip =' $user_ip'";
//echo "Query: $get_user"; // Add this line for debugging
$result = mysqli_query($con, $get_user);

// Check if the query was successful
if ($result) {
    
    // Check the number of rows returned
    $row_count = mysqli_num_rows($result);

    if($row_count > 0){
        
        // User exists
        $row = mysqli_fetch_assoc($result);
        $user_id = $row['user_id']; // Replace 'user_id' with your actual column name

        // Store the user_id in the session for future requests
        $_SESSION['user_id'] = $user_id;

        echo "<a href='order.php?user_id=$user_id' title=$user_id><h2 class='text-center' style='margin-left:500px;'>                  Pay Offline</h2></a>";
        // echo "User ID: $user_id";
    } else {
        // User not found
        
        echo "User not found";
    }
} else {
    // Query failed
    echo "Query failed: " . mysqli_error($con);
}

// ...
?>
<!--<h1 id="userid"><?php
echo $user_id;
?></h1>-->
        </div>
    </div>
</div>

</body>
</html>
