<?php
include("src/config.php");
global $conn;
$message='';
if(isset($_POST['insert_btn'])){
   $category_name=$_POST['category_name'];
   $parent_category=$_POST['parent_category'];
   $date=$_POST['date'];
   $status=$_POST['status'];

   $file_name=$_FILES['image_file']['name'];
   $file_type=$_FILES['image_file']['type'];
   $file_size=$_FILES['image_file']['size'];
   $file_tmp=$_FILES['image_file']['tmp_name'];

   $file_ext=explode('.',$file_name);

   $end_name=end($file_ext);

   $max_file_size=2048;

  $final_file_name=rand().$file_name;

   $extention=array('png','jpg','gif');

   if(in_array($end_name,$extention)){
     if($max_file_size > $file_size && emty($file_name) && emty($category_name && emty(parent_category && emty($date)))){
       echo $message="<h3 style='font-size:22px;text-transform:capitalize;color:red;'>file size is larg</h3>";
     }else{
       move_uploaded_file($file_tmp,"c_img/".$final_file_name);
       $insert_category_date="INSERT INTO category(c_name,c_image,is_sub,c_date,c_status)
       VALUES('{$category_name}','{$final_file_name}','{$parent_category}','{$date}','{$status}')";
       $insert_result=mysqli_query($conn,$insert_category_date);
       if($insert_result){
         header("Location:category.php");
       }
     }
   }else{
    echo $message="<h3 style='font-size:22px;text-transform:capitalize;color:red;'>please change your file extention</h3>";
   }
}

?>
