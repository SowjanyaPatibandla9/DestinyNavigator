<!--connect file-->
<?php 
 include('../includes/connect.php');
 include('../functions/common_function.php');
 session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome <?php echo$_SESSION['username']?></title>
    <!--Bootstrap css link-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!--font awasome link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" 
    integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- css file-->
    <link rel="stylesheet" href="../stylle.css">
    <style>
    body{
        overflow-x:hidden;
    }
    .profile_img{
    width:90%;
    margin:auto;
    display:block;
    /*height:100%;*/
    object-fit:contain;
}
    </style>
</head>
<body>
    <!-- navbar-->
 <div class="container-fluid p-0">
        <!-- first child-->
        <nav class="navbar navbar-expand-lg navbar-light bg-info">
  <div class="container-fluid">
    <img src="logo1.png" class="logo">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" 
    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
     aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="../index11.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../display.php">Products</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="profile.php">My Account</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./contactus.php">Contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../cart.php"><i class="fa-solid fa-cart-shopping">
          </i><sup><?php cart_item();?></sup></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Total Price: <?php  total_cart_price() ?>/-</a>
        </li>
        
      </ul>
      <form class="d-flex" action="../search_product.php" method="get" >
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="search_data">
       <!-- <button class="btn btn-outline-light" type="submit">Search</button>-->
       <input type="submit" value="Search" class="btn btn-outline-light" name="search_data_product">
      </form>
    </div>
  </div>
</nav>
<!-- calling cart function-->
<?php 
cart();
?>

<!-- second child-->
<nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
 <ul class="navbar-nav me-auto">
  <?php 
  if(!isset($_SESSION['username'])){
    echo"<li class='nav-item'>
    <a class='nav-link' href='#'>welcome Guest</a>
  </li>";
    }
    else{
     echo" <li class='nav-item'>
     <a class='nav-link'#'>Welcome ".$_SESSION['username']."</a>
   </li>";
    }
   if(!isset($_SESSION['username'])){
   echo" <li class='nav-item'>
    <a class='nav-link' href='./users_area/user_login.php'>Login</a>
  </li>";
   }
   else{
    echo" <li class='nav-item'>
    <a class='nav-link' href='./users_area/logout.php'>Logout</a>
  </li>";
   }
   ?>
 </ul>
</nav>

<!-- third child-->
<div class="bg-light">
<h3 class="text-center">Destiny <span style="color:#3293a8">Navigator</span></h3>
  <p class="text-center">Explore the books</p>
</div>
<!--fourth child-->
<dic class="row">
    <div class="col-md-2 ">
        <ul class="navbar-nav bg-secondary text-center" style="height:100vh">
        <li class="nav-item bg-info">
          <a class="nav-link text-light" href="#"><h4>Your Profile</h4></a>
        </li>
        <li class="nav-item">
          <img src="../imgg/logo.jpg"alt="" class="profile_img my-4">
        </li>
        <li class="nav-item ">
          <a class="nav-link text-light" href="profile.php">Pending orders</a>
        </li>
        <li class="nav-item ">
          <a class="nav-link text-light" href="profile.php?edit_account">Edit Account</a>
        </li>
        <li class="nav-item ">
          <a class="nav-link text-light" href="profile.php?my_orders">My orders</a>
        </li>
        <li class="nav-item ">
          <a class="nav-link text-light" href="profile.php?delete_account">Delete account</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light" href="logout.php">Logout</a>
        </li>
        </ul>
    </div>
    <div class="col-md-10 text-center">
        <?php 
          get_user_order_details();
          if(isset($_GET['edit_account'])){
            include('edit_account.php');
          }
          if(isset($_GET['my_orders'])){
            include('user_orders.php');
          }
          if(isset($_GET['delete_account'])){
            include('delete_account.php');
          } 
        ?>
    </div>
</div>

<!-- last child-->
<?php include("../includes/footer.php") ?>

</div>
 <!--bootsrap js link--> 
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
     integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>  
</body>
</html>