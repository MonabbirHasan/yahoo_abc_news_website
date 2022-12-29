<?php
include("src/header.php");
include("src/config.php");
include("src/functions.php");
?>
        <!-- partial -->
<div class="main-panel">
  <div class="content-wrapper">
    <div class="page-header">
      <h3 class="page-title"> ADD NEW POST </h3>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Forms</a></li>
          <li class="breadcrumb-item active" aria-current="page">Form elements</li>
        </ol>
      </nav>
    </div>
    <div class="row">
      <div class="col-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">

<?php

global $conn;


if(isset($_POST['submit'])){

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
  $insert_post="INSERT INTO post(p_title,p_image,p_desc,p_tags,p_date,p_category,p_author,p_status) 
                      VALUES('{$title}','{$new_file_name}','{$description}','{$tags}','{$date}','{$parent_category}','1','{$status}')";
move_uploaded_file($file_tmp,'p_img/'.$new_file_name);
$insert_result=mysqli_query($conn,$insert_post);
// if($insert_post){
//   header("Location:http://localhost/Yahoo-Abc/admin/add_new_post.php");
// }

}

}

?>

  <form class="forms-sample" action="" method="post" enctype="multipart/form-data">
    <div class="form-group">
      <label for="exampleInputName1">Title</label>
      <input type="text" name="title" class="form-control" id="exampleInputName1" placeholder="Title">
    </div>
   <div class="form-group">
      <label for="exampleTextarea1">description</label>
      <textarea class="form-control" name="description" id="exampleTextarea1" rows="4"></textarea>
    </div>
    <div class="form-group">
      <label for="exampleInputPassword4">Date</label>
      <input type="date" name="date"  class="form-control" id="exampleInputPassword4">
    </div>
    <div class="form-group">
      <label for="exampleInputPassword4">Tags</label>
      <input type="text" name="tags"  class="form-control" placeholder="tags" id="exampleInputPassword4">
    </div>
    <div class="form-group">


      <label for="exampleSelectGender">parent</label>
      <select class="form-control" name="parent_category" id="exampleSelectGender">
        <?php
          parent_categorys();
        ?>
      </select>
    </div>


    <div class="form-group">
      <label for="exampleSelectGender">status</label>
      <select class="form-control" name="status" id="exampleSelectGender">
        <option value="0">Active</option>
        <option value="1">InActive</option>
      </select>
    </div>
    
    <div class="form-group">
      <label for="readUrl" class="form-check-label badge bg-primary text-light">Upload</label>
        <input type='file' name="image_file" id="readUrl" class="form-check-input" hidden>
        <img id="uploadedImage" src="#" alt="Uploaded Image" style="display:none; width: 200px;margin-top:20px;"/>
    </div>

    <button type="submit" class="btn btn-primary mr-2" name="submit">Submit</button>
    <button class="btn btn-dark">Cancel</button>
  </form>



                  </div>
                </div>
              </div>
            </div>
          </div>
<?php
include("src/footer.php");
 ?>
