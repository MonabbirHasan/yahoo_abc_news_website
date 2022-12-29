<?php
include("src/config.php");
global $conn;
if(isset($_POST['submit'])){
$e_id=$_GET['e_id'];
  echo $username=$_POST['username'];
  echo $email=$_POST['email'];
  echo $password=$_POST['password'];
  echo $phone=$_POST['phone'];
  echo $gender=$_POST['gender'];
  echo $biodata=$_POST['biodata'];
  echo $status=$_POST['status'];

  $file_name=$_FILES['image_file']['name'];
  $file_type=$_FILES['image_file']['type'];
  $file_size=$_FILES['image_file']['size'];
  $file_tmp=$_FILES['image_file']['tmp_name'];
 
    $file_split=explode('.',$file_name);
    //  $file_upper=strtoupper($file_split);
    $file_end=end($file_split);
    $new_file_name=rand().''.$file_end;
    $file_formate=array("png",'jpg','gifi','jpeg');
    
    if(in_array($file_split,$file_formate)&& $file_size>=5120){
    echo "<span class='alert alert-danger'>Please Select Right Formate File and File Size max 2mb!!</span>";
    }else{
        $update_users="UPDATE users SET u_name='$username',
        u_email='$email',
        u_phone='$phone',
        u_pass='$password',
        u_gender='$gender',
        u_bio_data='$biodata',
        u_total_post='7',
        u_status='$status',
        u_type='2' WHERE u_id='$e_id'";
    //    $insert_post="INSERT INTO users(u_name,u_email,u_phone,u_pass,u_image,u_gender,u_bio_data,u_total_post,u_type,u_status) 
    //                        VALUES('{$username}','{$email}','{$phone}','{$password}','{$new_file_name}','{$gender}','{$biodata}','10','1','{$status}')";
    
    move_uploaded_file($file_tmp,'u_img/'.$new_file_name);
    $insert_result=mysqli_query($conn,$update_users);
    header("Location:view_all_users.php");
    }
}

?>