<?php
include("src/header.php");
include("src/functions.php");
include("src/config.php");
if(isset($_GET['e_id'])){
    $e_id=$_GET['e_id'];
    $select_category="SELECT * FROM category WHERE c_id='$e_id'";
    $category_result=mysqli_query($conn,$select_category);
    if(mysqli_num_rows($category_result) > 0){
      while($category_row=mysqli_fetch_assoc($category_result)){
        $c_id=$category_row['c_id'];
        $c_name=$category_row['c_name'];
        $c_image=$category_row['c_image'];
        $is_sub=$category_row['is_sub'];
        $c_date=$category_row['c_date'];
        $c_status=$category_row['c_status'];
 ?>
    <div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
        <h3 class="page-title"> UPDATE CATEGORY INFO </h3>
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
                <form class="forms-sample"  method="post" enctype="multipart/form-data" action="update_code.php?e_id=<?php echo $e_id;?>">
                <div class="form-group">
                    <label for="exampleInputName1">Name</label>
                    <input type="text" value="<?php echo $c_name;?>" name="category_name" class="form-control" id="exampleInputName1" placeholder="category name">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect3">Select Parent</label>
                    <select name="parent_category"  class="form-control form-control-sm" id="exampleFormControlSelect3">
                   <?php
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
                        <option value="<?php echo $parent_c_id;?>" <?php if($parent_c_id===$is_sub)echo "selected";?>><?php echo $parent_c_name;?></option>
                        <?php
                        }
                        }
                    ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleInputUsername1"> Date</label>
                    <input type="text" value="<?php echo $c_date;?>"  name="date" class="form-control" id="exampleInputUsername1"/>
                </div>
                <div class="form-group">
                    <label for="exampleSelectGender">status</label>
                    <select class="form-control" name="status" id="exampleSelectGender">
                    <option value="1" <?php if($c_status===1) echo "selected";?>>Active</option>
                    <option value="0" <?php if($c_status===0) echo "selected";?>>InActive</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="readUrl" class="form-check-label badge bg-primary text-light">Upload</label>
                    <input type='file' name="image_file" id="readUrl" class="form-check-input" hidden>
                    <img id="uploadedImage" src="c_img/<?php echo $c_image;?>" alt="Uploaded Image" style="display:block; width: 200px; height:auto;margin-top:20px;"/>
                </div>
                    <button type="submit" name="update" class="btn btn-primary mr-2">Submit</button>
                    <button class="btn btn-dark">Cancel</button>
                </form>
                <?php
                    }
                }
                // update code herer
                ?>
            </div>
            </div>
        </div>
        </div>
    </div>
 <?php
}
include("src/footer.php");
?>