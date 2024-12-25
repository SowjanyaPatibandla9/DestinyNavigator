
<?php
session_start();
       $username=$_SESSION['username'];
       $get_user="Select * from `user_table` where username='$username'";
       $result=mysqli_query($con,$get_user);
       $row_fetch=mysqli_fetch_assoc($result);
       $user_id=$row_fetch['user_id'];
      // $user_id-=1;
      // echo $user_id;
    ?>
<center><h3 class="text-success">All orders</h3></center>
<table class="table table-bordered mt-5">
    <thead class="bg-info">
    <tr>
        <th>SL.no</th>
        <th>Amount Due</th>
        <th>Total Products</th>
        <th>Invoice Number</th>
        <th>Date</th>
        <th>Complete/Incomplete</th>
       
        <th>Receiving Time</th>
        <th>Edit Time</th>
        <th>Status</th>
        

</tr></thead>
<tbody class="bg-secondary">
    <?php
    $get_order_details="Select * from `user_orders` where user_id='2'";
    $result_orders=mysqli_query($con,$get_order_details);
    $number=1;
    while($row_orders=mysqli_fetch_assoc($result_orders)){
        $order_id=$row_orders['order_id'];
        $amount=$row_orders['amount'];
        $invoice_number=$row_orders['invoice_number'];
        $total_products=$row_orders['total_products'];
        $order_status=$row_orders['order_status'];
        $ntime=$row_orders['ntime'];

        if($order_status=='pending'){
            $order_status='Incomplete';
        }
        else{            $order_status='complete';
        }
     
     
        $order_date=$row_orders['order_date'];

       
       echo " <tr>
       <td>$number</td>
       <td>$amount</td>
       <td>$total_products</td>
       <td> $invoice_number</td>
       <td> $order_date</td>
       <td> $order_status</td>
       <td>$ntime </td>
       <td><a href='edit_time.php?order_id= $order_id'><i class='fa-solid fa-pen-to-square'></i></a>
       "

      
    ?>
   
    <?php 
      if($order_status=='complete'){
        echo "<td>paid</td>";
      }else{
       echo  "<td><a href='confirm_payment.php?order_id= $order_id'> Confirm</a></td>
       </tr>";
      }
$number++;

    }
   
    
?>
    