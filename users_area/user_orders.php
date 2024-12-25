   <h3 class="text-center text-sucess">All My Orders</h3>
<table class="table table-bordered mt-5">
    <thead class="bg-info">

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


       <?php 
       
       
        

        $get_order_details="Select * from `user_orders` where user_id='$user_id'";
    $result_orders=mysqli_query($con,$get_order_details);
    $row_count=mysqli_num_rows($result_orders);

if($row_count==0){
    echo "<h2 class='text-danger text-center mt-5'>No Orders Yet</h2>";

}
else{
    echo "<tr>
        <th>slno</th>
        <th>Due Amount</th>
        <th>Invoice number</th>
        <th>Total products</th>
        <th>Order Date</th>
        <th>Receiving Time</th>
        <th>Status</th>
        <th>Delete</th>
</tr>
</thead>
<tbody class='bg-secondary text-light'>";
    $number=0;
    while($row_data=mysqli_fetch_assoc($result_orders)){
        $order_id=$row_data['order_id'];
        $user_id=$row_data['user_id'];
        $amount=$row_data['amount'];

        $invoice_number=$row_data['invoice_number'];
        $total_products=$row_data['total_products'];
        $order_date=$row_data['order_date'];
        $order_status=$row_data['order_status'];
        $ntime=$row_data['ntime'];

        $number++;
        echo " <tr>
        <td>$number</td>
        <td>$amount</td>
        <td>$invoice_number</td>
        <td>$total_products</td>
        <td>$order_date</td>
        <td>$ntime </td>
        <td>$order_status</td>
        <td><a href=''class='btn btn-primary text-light'><i class='fa-solid fa-trash'></i></a> </td>  
</tr>";
    }
}
        ?>
        
        
    </tbody>
</table>