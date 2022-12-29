<?php
include("src/config.php");
global $conn;
if(isset($_GET['d_id'])){
    $d_id=$_GET['d_id'];
    $delete_user="DELETE FROM users WHERE u_id='$d_id'";
    $result=mysqli_query($conn,$delete_user);
    if($result){
        header("Location:view_all_users.php");
    }
}

?>