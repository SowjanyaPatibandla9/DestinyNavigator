<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include('../includes/connect.php');
if(isset($_POST['insert_product'])){

    $product_title=$_POST['product_title'];
    $description=$_POST['description'];
    $product_keywords=$_POST['product_keywords'];
    $product_categories=$_POST['product_categories'];
    $product_brands=$_POST['product_brands'];
    $product_price=$_POST['product_price'];
    $product_status='true';
   
    //accessing images
    $product_image1=$_FILES['product_image1']['name'];
    $product_image2=$_FILES['product_image2']['name'];
    $product_image3=$_FILES['product_image3']['name'];

    //accessing image temp name

    $temp_image1=$_FILES['product_image1']['tmp_name'];
    $temp_image2=$_FILES['product_image2']['tmp_name'];
    $temp_image3=$_FILES['product_image3']['tmp_name'];


    //checking enpty condition
    if($product_title=='' or $description=='' or  $product_keywords=='' or  $product_categories=='' or  $product_brands==''
     or  $product_price=='' or  $product_image1=='' or  $product_image2=='' or  $product_image3=='' ){
        echo "<script>alert('please fill all the available fields') </script>";
        exit();
    
     }else{
        move_uploaded_file( $temp_image1,"./product_images/$product_image1");
        move_uploaded_file( $temp_image2,"./product_images/$product_image2");
        move_uploaded_file( $temp_image3,"./product_images/$product_image3");
       

        //insert query


       // Prepare the SQL statement
$insert_products = "INSERT INTO `products` (product_title, product_description, product_keywords, category_id, brand_id, product_image1, product_image2, product_image3, product_price, date, product_status) 
VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, NOW(), ?)";

$stmt = mysqli_prepare($con, $insert_products);

// Bind parameters
mysqli_stmt_bind_param($stmt, "ssssssssss", $product_title, $description, $product_keywords, $product_categories, $product_brands, $product_image1, $product_image2, $product_image3, $product_price, $product_status);

// Execute the statement
if (mysqli_stmt_execute($stmt)) {
    echo "<script>alert('successfully inserted the products')</script>";
} else {
    echo "Error: " . mysqli_error($con); // Display the MySQL error message
}

// Close the statement and connection
//mysqli_stmt_close($stmt);
//3232mysqli_close($con);

       /* $insert_products = "INSERT INTO `products` (product_title,product_description, product_keywords,category_id,
brand_id, product_image1, product_image2, product_image3, product_price,date, status) VALUES ('$product_title',
'$description', '$product_keywords', '$product_categories', '$product_brands', '$product_image1', '$product_image2',
'$product_image3', '$product_price', NOw(), '$product_status')";
        
        $result_query=mysqli_query($con,$insert_products);
        if ($result_query) {
            echo "<script>alert('successfully inserted the products')</script>";
        } else {
            echo "Error: " . mysqli_error($con); // Display the MySQL error message
        }*/
       }   
    }
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Products--Admin</title>
    
     <!-- bootsrap css link-->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!--fontawasome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" 
    integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- css link-->
    <link rel="stylesheet" href="../stylle.css">
</head>
<body class="bg-light">
    <div class="container mt-3">
        <h1 class="text-center">Insert Products</h1>
        <!--form-->
        <form action="" method="post" enctype="multipart/form-data">
            <!-- title-->
            <div class="form-outline mb-4  w-50 m-auto">
                <label for="product_title" class="form-label">product title</label>
                <input type="text" name="product_title"id="product_title" 
                class="form-control"placeholder="Enter product title" autocomplete="off"required>
            </div>
            <!--description-->
            <div class="form-outline mb-4  w-50 m-auto">
                <label for="description" class="form-label">product description</label>
                <input type="text" name="description"id="description" 
                class="form-control"placeholder="Enter product description" autocomplete="off"required="required">
            </div>
            <!--keywords-->
            <div class="form-outline mb-4  w-50 m-auto">
                <label for="product_keywords" class="form-label">product keywords</label>
                <input type="text" name="product_keywords"id="product_keywords" 
                class="form-control"placeholder="Enter product keywords" autocomplete="off"required>
            </div>
            <!--categories-->
            <div class="form-outline mb-4  w-50 m-auto">
               <select name="product_categories" id=""class="form_select">
                <option values="">select a category</option>
                <?php 
                $select_query="select * from `categories`";
                $result_query=mysqli_query($con, $select_query);
                while($row=mysqli_fetch_assoc($result_query)){
                    $category_title=$row['category_title'];
                    $category_id=$row['category_id'];
                    echo "<option value='$category_id'>$category_title</option>";
                }
                
                ?>
              <!--  <option values="">fruits</option>
                <option values="">vegetables</option>
                <option values="">icecreams</option>
                <option values="">chips</option>
                <option values="">bisciuts</option>
                <option values="">chocolates</option>-->
               </select>
            </div>
            <!--brands-->
            <div class="form-outline mb-4  w-50  m-auto">
               <select name="product_brands" id=""class="form_select">
                <option values="">select Book form</option>
                <?php 
                $select_query="select * from `brands`";
                $result_query=mysqli_query($con, $select_query);
                while($row=mysqli_fetch_assoc($result_query)){
                    $brand_title=$row['brand_title'];
                    $brand_id=$row['brand_id'];
                    echo "<option value='$brand_id'> $brand_title</option>";
                }
                
                ?>
               <!-- <option values="">fruits</option>
                <option values="">vegetables</option>
                <option values="">icecreams</option>
                <option values="">chips</option>
                <option values="">bisciuts</option>
                <option values="">chocolates</option>-->
               </select>
            </div>
            <!-- image1-->
            <div class="form-outline mb-4  w-50 m-auto">
                <label for="product_image1" class="form-label">product image1</label>
                <input type="file" name="product_image1"id="product_image1" 
                class="form-control"required>
            </div>
             <!-- image2-->
             <div class="form-outline mb-4  w-50 m-auto">
                <label for="product_image2" class="form-label">product image2</label>
                <input type="file" name="product_image2"id="product_image2" 
                class="form-control"required>
            </div>
             <!-- image3-->
             <div class="form-outline mb-4  w-50 m-auto">
                <label for="product_image3" class="form-label">product image3</label>
                <input type="file" name="product_image3"id="product_image3" 
                class="form-control"required>
            </div>
             <!--price-->
             <div class="form-outline mb-4  w-50 m-auto">
                <label for="product_price" class="form-label">product price</label>
                <input type="text" name="product_price"id="product_price" 
                class="form-control"placeholder="Enter product price" autocomplete="off"required>
            </div>
             <!--keywords-->
             <div class="form-outline mb-4  w-50 m-auto">
                <input type="submit" name="insert_product" class="btn btn-info mb-3 px-3"value="Insert products">
            </div>
        </form>
</div>
<!--bootsrap js link--> 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
     integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>  
</body>
</html>