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

if(isset($_GET['e_id']));
    $e_id=$_GET['e_id'];
    $select_post="SELECT * FROM post WHERE P_id='$e_id'";
    $select_result=mysqli_query($conn,$select_post);
    while($row=mysqli_fetch_assoc($select_result)){
    $p_id=$row['p_id'];
    $p_title=$row['p_title'];
    $p_image=$row['p_image'];
    $p_desc=$row['p_desc'];
    $p_tags=$row['p_tags'];
    $p_date=$row['p_date'];
    $p_category=$row['p_category'];
    $p_author=$row['p_author'];
    $p_status=$row['p_status'];
?>

  <form class="forms-sample" action="update_save.php?e_id=<?php echo $e_id;?>" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label for="exampleInputName1">Title</label>
        <input type="text" value="<?php echo $p_title;?>" name="title" class="form-control" id="exampleInputName1" placeholder="Title">
    </div>
    <div class="form-group">
        <label for="exampleTextarea1">description</label>
        <textarea class="form-control" name="description" id="exampleTextarea1" rows="4"><?php echo $p_desc;?> </textarea>
    </div>
    <div class="form-group">
        <label for="exampleInputPassword4">Date</label>
        <input type="date" value="<?php echo $p_date;?>" name="date"  class="form-control" id="exampleInputPassword4">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword4">Tags</label>
        <input type="text" name="tags" value="<?php echo $p_tags;?>" class="form-control" placeholder="tags" id="exampleInputPassword4">
    </div>
    <div class="form-group">
        <label for="exampleSelectGender">parent</label>
        <select class="form-control" name="parent_category" id="exampleSelectGender">
            <?php
            parent_categorys($p_category);
            ?>
        </select>
    </div>
    <div class="form-group">
        <label for="exampleSelectGender">status</label>
        <select class="form-control" name="status" id="exampleSelectGender">
            <option value="1" <?php if($p_status=='1')echo "selected";?>>Active</option>
            <option value="0" <?php if($p_status=='0')echo "selected";?>>InActive</option>
        </select>
    </div>
    <div class="form-group">
        <label for="readUrl" class="form-check-label badge bg-primary text-light">Upload</label>
            <input type='file' name="image_file" id="readUrl" class="form-check-input" hidden>
            <img id="uploadedImage" src="p_img/<?php echo $p_image;?>" alt="Uploaded Image" style=" width: 200px;margin-top:20px;"/>
    </div>
        <button type="submit" class="btn btn-primary mr-2" name="submit">Submit</button>
        <button class="btn btn-dark">Cancel</button>
  </form>
<?php
}
?>

        </div>
    </div>
    </div>
</div>
</div>
<?php
include("src/footer.php");
 ?>
