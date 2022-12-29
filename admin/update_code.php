<?php
   include("src/config.php");
   include("src/functions.php");
   $message='';
   global $conn;

 if(isset($_POST['update'])){
    $e_id=$_GET['e_id'];

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

     $extention=array('png','jpg','gif','jpeg');


     if(!empty($file_name)){
        if(in_array($end_name,$extention)){
            if($max_file_size > $file_size && emty($file_name) && emty($category_name && emty($parent_category && emty($date) && empty($status)))){
                echo $message="<h3 style='font-size:22px;text-transform:capitalize;color:red;'>file size is larg</h3>";
            }else{
                
                function file_folder_delete($e_id){
                    global $conn;
                    $selece_img="SELECT * FROM category WHERE c_id='$e_id'";
                    $result=mysqli_query($conn,$selece_img);
                    $row=mysqli_fetch_assoc($result);
                    unlink("c_img/".$row['c_image']);
               }
               file_folder_delete($e_id);
               
              move_uploaded_file($file_tmp,"c_img/".$final_file_name);
              $update_category="UPDATE category SET c_name='$category_name',c_image='$final_file_name',is_sub='$parent_category',c_date='$date',c_status='$status' WHERE c_id='$e_id'";
              $update_result=mysqli_query($conn,$update_category);
              if($update_result){
                header("Location: http://localhost/Yahoo-Abc/admin/category.php");
              }
            }
        }else{
            echo $message="<h3 style='font-size:22px;text-transform:capitalize;color:red;'>please change your file extention</h3>";
        }
     }
 }


?>