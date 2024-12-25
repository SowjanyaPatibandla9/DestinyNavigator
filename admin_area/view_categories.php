<h3 class="text-center text-success">ALL CATEGORIES</h3>
<table class="table table-bordered mt-5">
    <thead class="bg-info">
        <tr class="text-center">
            <th>slno</th>
            <th>Category title</th>
            <th>Edit</th>
            <th>Delete</th>
</tr>
    </thead>
    <tbody class="bg-secondary text-light">
        <?php 
        $select_cat="Select * from `categories`";
        $result=mysqli_query($con,$select_cat);
        $number=0;
        while($row=mysqli_fetch_assoc($result)){
           $category_id=$row['category_id'];
           $category_title=$row['category_title'];
            $number++;
        ?>
        <tr class="text-center">
        <td><?php echo $number;?></td>
              <td><?php echo $category_title;?></td>
            <td><a href='index1.php?edit_category=<?php echo $category_id ?>'><i class='fa-solid fa-pen-to-square'></i></a>
 </td>
 <td><a href='index1.php?delete_category=<?php echo $category_id ?>'><i class='fa-solid fa-trash'></i></a>
 </td>  
</tr>
<?php
        }
?>
    </tbody>
</table>