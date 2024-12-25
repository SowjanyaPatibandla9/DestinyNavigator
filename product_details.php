<!--connect file-->
<?php 
 include('includes/connect.php');
 include('functions/common_function.php');
 session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ecommerce Website</title>
    <!--Bootstrap css link-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!--font awasome link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" 
    integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- css file-->
    <link rel="stylesheet" href="stylle.css">
</head>
<body>
    <!-- navbar-->
 <div class="container-fluid p-0">
        <!-- first child-->
        <nav class="navbar navbar-expand-lg navbar-light bg-info">
  <div class="container-fluid">
    <img src="logo1.png" class="logo">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index11.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="display.php">Products</a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link" href="#">Contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"><i class="fa-solid fa-cart-shopping"></i><sup><?php cart_item();?></sup></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="wishlist.php"><i class="fa-regular fa-heart"></i></a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="#">Total Price: <?php  total_cart_price() ?>/-</a>
        </li>
        
      </ul>
      <form class="d-flex" action="search_product.php" method="get" >
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
wishlist();
?>

<!-- second child-->
<nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
 <ul class="navbar-nav me-auto">
  <?php 
  if(!isset($_SESSION['username'])){
    echo"<li class='nav-item'>
    
  </li>";
    }
    else{
     echo" <li class='nav-item'>
     <a class='nav-link'#'>Welcome ".$_SESSION['username']."</a>
   </li>";
    }
   if(!isset($_SESSION['username'])){
   echo" <li class='nav-item'>
  
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
<!-- fourth child-->
<div class="row px-1">
<div class="col-md-10">
<!-- products-->
<div class="row">

  <!-- fetching products -->
  <?php
  view_details();
  get_unique_categories();
  get_unique_brands();
  ?>
<!--row end-->
</div>
<!-- column end -->
</div>
  
<div class="col-md-2 bg-secondary p-0">
  <!-- sidenav-->
  <!--brands-->
  <ul class="navbar-nav me-auto text-center">
    <li class="nav-item bg-info">
      <a href="#" class="nav-link text-light"><h4>Delivary brands</h4></a>
    </li>
    <?php 
    getbrands();
    ?>
</ul>
<!-- categories to be dispalyed-->
<ul class="navbar-nav me-auto text-center">
    <li class="nav-item bg-info">
      <a href="#" class="nav-link text-light"><h4>Categories</h4></a>
    </li>
    <?php 
   getcategories();
    ?>
</ul>
  
</div>
<div></div>

<!-- last child-->
<?php include("./includes/footer.php") ?>

</div>
 <!--bootsrap js link--> 
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
     integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>  
</body>
</html>