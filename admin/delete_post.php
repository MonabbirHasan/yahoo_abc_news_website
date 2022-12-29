<?php
include("src/config.php");

global $conn;
if(isset($_GET['d_id'])){
  $d_id=$_GET['d_id'];
  $delete_post="DELETE FROM post WHERE p_id='$d_id'";
  $delete_result=mysqli_query($conn,$delete_post);
  if($delete_result){
    header("Location:view_all_post.php");
  }
}

?>