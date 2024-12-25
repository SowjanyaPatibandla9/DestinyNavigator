<h3 class="text-center text-sucess">All Users</h3>
<table class="table table-bordered mt-5">
    <thead class="bg-info">
        <?php  
        $get_payments="Select * from `user_table`";
        $result=mysqli_query($con,$get_payments);
        $row_count=mysqli_num_rows($result);
        

if($row_count==0){
    echo "<h2 class='text-danger text-center mt-5'>No Users Yet</h2>";

}
else{
    echo "<tr>
        <th>slno</th>
        <th>Username</th>
        <th>User email</th>
        <th>User address</th>
        <th>User mobile</th>
    
        <th>Delete</th>
</tr>
</thead>
<tbody class='bg-secondary text-light'>";
    $number=0;
    while($row_data=mysqli_fetch_assoc($result)){
        $user_id=$row_data['user_id'];
        $username=$row_data['username'];
          $user_email=$row_data['user_email'];

        $user_address=$row_data['user_address'];
        $user_mobile=$row_data['user_mobile'];
        $number++;
        echo " <tr>
        <td>$number</td>
        <td>$username</td>
        <td>$user_email</td>
        <td>$user_address</td>
        <td>$user_mobile</td>
        
        <td><a href=''class='btn btn-primary text-light'><i class='fa-solid fa-trash'></i></a> </td>  
</tr>";
    }
}
        ?>
        
        
    </tbody>
</table>