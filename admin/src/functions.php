<?php
include("config.php");
?>
<?php
include("config.php");
// sub category functions start here
function subCategroy($c_id){
  global $conn;
  $select_sub_category="SELECT * FROM category WHERE is_sub='$c_id'";
  $category_sub_result=mysqli_query($conn,$select_sub_category);
  if(mysqli_num_rows($category_sub_result) > 0){
    while($category_sub_row=mysqli_fetch_assoc($category_sub_result)){
      $c_sub_id=$category_sub_row['c_id'];
      $c_sub_name=$category_sub_row['c_name'];
      $c_sub_image=$category_sub_row['c_image'];
      $is_sub=$category_sub_row['is_sub'];
      $c_sub_date=$category_sub_row['c_date'];
      $c_sub_status=$category_sub_row['c_status'];
  ?>
  <tr>
    <td><?php echo $c_sub_id;?></td>
    <td>
      <img src="c_img/<?php echo $c_sub_image;?>" alt="image" />
    </td>
    <td><?php echo $c_sub_name;?></td>
    <td><?php echo $is_sub;?></td>
    <td><?php echo $c_sub_date;?></td>
    <td><?php if($c_sub_status==='1')echo "<span class='badge badge-primary'>Active</span>";else echo"<span class='badge badge-danger'>InActive</span>";?></td>
  <td>
    <a href="category_update.php?e_id=<?php echo $c_sub_id;?>"><i class="mdi mdi-border-color btn btn-success text-dark p-1 m-0"></i></a>
    <a href="category.php?d_id=<?php echo $c_sub_id;?>"><i class="mdi mdi-delete btn btn-success text-dark p-1 m-0"></i></a>
  </td>

</tr>
<?php
}
}
}
?>
<!--sub category functions start here -->
<!--parent  category functions start here -->
<?php
function parent_category(){
  global $conn;
  $select_sub_category="SELECT * FROM category WHERE is_sub=0";
  $category_sub_result=mysqli_query($conn,$select_sub_category);
  if(mysqli_num_rows($category_sub_result) > 0){
    while($category_sub_row=mysqli_fetch_assoc($category_sub_result)){
      $parent_c_id=$category_sub_row['c_id'];
      $parent_c_name=$category_sub_row['c_name'];

      // $c_sub_image=$category_sub_row['c_image'];
      // $is_sub=$category_sub_row['is_sub'];
      // $c_sub_date=$category_sub_row['c_date'];
      // $c_sub_status=$category_sub_row['c_status'];
?>
<option value="<?php echo $parent_c_id;?>"><?php echo $parent_c_name;?></option>

<?php
}
}
}
?>
<!--parent  category functions start here -->
<?php
global $conn;
function findName($author){
  $name="SELECT * FROM users WHERE u_id='$author'";
  $result=mysqli_query($conn,$name);
  $row=mysqli_fetch_assoc($result);
  echo $row;
}

?>

<!-- parent category -->
<?php 

function parent_categorys(){
  global $conn;
  $select_parent="SELECT * FROM category WHERE is_sub='0'";
  $result=mysqli_query($conn,$select_parent);
  while($row=mysqli_fetch_assoc($result)){
    $c_name=$row['c_name'];
    $c_id=$row['c_id'];
  ?>
    <option value="<?php echo $c_id;?>"><?php echo $c_name;?></option>
    <?php
  }
}
?>

