<?php
include("src/config.php");
global $conn;
if(isset($_POST['submit'])){
    $e_id=$_GET['e_id'];
    $title=$_POST['title'];
    $description=$_POST['description'];
    $date=$_POST['date'];
    $tags=$_POST['tags'];
    $parent_category=$_POST['parent_category'];
    $status=$_POST['status'];
  
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
          $update_post="UPDATE post SET p_title='$title',p_image='$new_file_name',p_desc='$description',p_tags='$tags',p_date='$date',p_category='$parent_category',p_author='1',p_status='$status' WHERE p_id='$e_id'";
      // $insert_post="INSERT INTO post(p_title,p_image,p_desc,p_tags,p_date,p_category,p_author,p_status) 
      //                     VALUES('{$title}','{$new_file_name}','{$description}','{$tags}','{$date}','{$parent_category}','1','{$status}')";
      move_uploaded_file($file_tmp,'p_img/'.$new_file_name);
      $insert_result=mysqli_query($conn,$update_post);
      if($insert_result){
        header("Location:http://localhost/Yahoo-Abc/admin/view_all_post.php");
      }
  }
  
  }
  
?>