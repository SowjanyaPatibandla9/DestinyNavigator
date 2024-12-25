<!--connect file-->
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
    <title>Admin Dahboard</title>
    <!-- bootsrap css link-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!--fontawasome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" 
    integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- css link-->
    <link rel="stylesheet" href="../stylle.css">
    <style>
        .admin_image{
    width:100px;
    object-fit:contain;
    }
    .footer{
        position:absolute;
        bottom:0;
    }
    body{
        overflow-x:hidden;
    }
    .product_image{
        width:100px;
        object-fit:contain;
    }
        </style>
</head>
<body>
    <!--navbar-->
    <div class="container-fluid p-0 ">
        <nav class="navbar navbar-expand-lg navbar-light bg-info">
            <div class="container-fluid">
                <img src="logo1.png" alt="" class="logo">
                <nav class="navbar navbar-expand-lg ">
                    <ul class="navbar-nav">
                      <!-- <li class="nav-item">
                            <a href="" class="nav-link">Welcome Admin</a>
                        </li>-->
                        <?php 
  if(!isset($_SESSION['username1'])){
    echo"<li class='nav-item'>
    <a class='nav-link' href='#'>welcome Guest</a>
  </li>";
    }
    else{
     echo" <li class='nav-item'>
     <a class='nav-link'#'>Welcome ".$_SESSION['username1']."</a>
   </li>";
    }
   
   ?>
                      
</ul>
                </nav>
            </div>
        </nav>
        <!--Second child-->
        <div class="bg-light">
            <h3 class="text-center p-2">Manage Details</h3>
        </div>
        <!--Third child-->
        <div class="row">
            <div class="col-md-12 bg-secondary p-1 d-flex align-items-center">
                <div class="p-3">
                    <a href="#"><img src="user.jpeg"class="admin_image"></a>
                    <p class="text-light text-center">
                      <?php
                          if(isset($_SESSION['username1'])){
                            echo $_SESSION['username1'];
                          }
                          else{
                            echo "admin name";
                          }


                     ?>

                    </p>
                </div>
                    <!--button*10.nav-link.text-light.bg-info.my-1-->
                <div class="button text-center">
                <button class="my-3"><a href="insert_product.php" class="nav-link text-light bg-info my-1">Insert Products</a></button>
                <button class=""><a href="index1.php?view_products" class="nav-link text-light bg-info my-1">View Products</a></button>
                <button class=""><a href="index1.php?insert_category" class="nav-link text-light bg-info my-1">Insert Categories</a></button>
                <button class=""><a href="index1.php?view_categories" class="nav-link text-light bg-info my-1">View Categories</a></button>
                <button class=""><a href="index1.php?insert_brand" class="nav-link text-light bg-info my-1">Insert Brands</a> </button>
                <button class=""><a href="index1.php?view_brands" class="nav-link text-light bg-info my-1">View Brands</a></button>
               <button class=""><a href="index1.php?list_orders" class="nav-link text-light bg-info my-1">All Orders</a></button>
               <button class=""><a href="index1.php?list_payments" class="nav-link text-light bg-info my-1">All payments</a></button>
               <button class=""><a href="index1.php?list_users" class="nav-link text-light bg-info my-1">List Users</a></button>
               <button class=""><a href="index1.php?complaints" class="nav-link text-light bg-info my-1">complaints</a></button>
            </div>
        </div>
    </div>
    <!-- fourth child-->
    <div class="container my-3">
        <?php
        if(isset($_GET['insert_category'])){
         include('insertcat.php');
        }
        if(isset($_GET['insert_brand'])){
            include('insertbrands.php');
           }
           if(isset($_GET['view_products'])){
            include('view_products.php');
           }
           if(isset($_GET['edit_products'])){
            include('edit_products.php');
           }
           if(isset($_GET['delete_product'])){
            include('delete_product.php');
           }
           if(isset($_GET['view_categories'])){
            include('view_categories.php');
           }
           if(isset($_GET['view_brands'])){
            include('view_brands.php');
           }
           if(isset($_GET['edit_category'])){
            include('edit_category.php');
           }
           if(isset($_GET['edit_brands'])){
            include('edit_brands.php');
           }
           if(isset($_GET['delete_category'])){
            include('delete_category.php');
           }
           if(isset($_GET['delete_brands'])){
            include('delete_brands.php');
           }
           if(isset($_GET['list_orders'])){
            include('list_orders.php');
           }
           if(isset($_GET['list_payments'])){
            include('list_payments.php');
           }
           if(isset($_GET['list_users'])){
            include('list_users.php');
           }
           if(isset($_GET['complaints'])){
            include('complaints.php');
           }
           ?>
           </div>
          

    
    <!-- last child
   <div class="bg-info p-3 text-center">
     <p>All rights reserved Designed by ---2023</p>
    </div> -->
    <?php include("../includes/footer.php") ?>

 </div>
<!-- bootsrap js link-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
     integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>  
     <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" 
     integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
      crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" 
integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
 integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>