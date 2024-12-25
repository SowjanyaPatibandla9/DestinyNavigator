<h3 class="text-center text-sucess">All Complaints</h3>
<table class="table table-bordered mt-5">
    <thead class="bg-info">
        <?php  
        $get_complaints="Select * from `contactus`";
        $result1=mysqli_query($con,$get_complaints);
        $row_count=mysqli_num_rows($result1);
        

if($row_count==0){
    echo "<h2 class='text-danger text-center mt-5'>No Complaints Yet</h2>";

}
else{
    echo "<tr>
        <th>slno</th>
        <th>Firstname</th>
        <th>Last Name</th>
        <th>Email</th>
        <th>Phone</th>
    
        <th>message</th>
</tr>
</thead>
<tbody class='bg-secondary text-light'>";
    $number=0;
    while($row_data=mysqli_fetch_assoc($result1)){
        $fname=$row_data['fname'];
        $lname=$row_data['lname'];
        $email=$row_data['email'];
        $phone=$row_data['phone'];
        $message=$row_data['message'];
        $number++;
        echo " <tr>
        <td>$number</td>
        <td>$fname</td>
        <td>$lname</td>
        <td>$email</td>
        <td>$phone</td>
        <td>$message</td> </tr>";

        
       
    }
}
        ?>
        
        
    </tbody>
</table>