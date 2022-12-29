
<?php
include("src/header.php");
include("src/config.php");
?>

<!-- partial -->
<div class="main-panel">
  <div class="content-wrapper">
    <div class="page-header">
      <h3 class="page-title">USER FORM </h3>
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
            <h4 class="card-title">ADD NEW USER</h4>
  
<?php
// show update data before
if($_GET['e_id']){
    $e_id=$_GET['e_id'];
    $select_user="SELECT * FROM users WHERE u_id='$e_id'";
    $update_result=mysqli_query($conn,$select_user);
    while($row=mysqli_fetch_assoc($update_result)){
        $u_id=$row['u_id'];
        $u_image=$row['u_image'];
        $u_name=$row['u_name'];
        $u_email=$row['u_email'];
        $u_phone=$row['u_phone'];
        $u_password=$row['u_pass'];
        $u_gender=$row['u_gender'];
        $u_bio_data=$row['u_bio_data'];
        $u_total_post=$row['u_total_post'];
        $u_type=$row['u_type'];
        $u_status=$row['u_status']; 
?>

            <form class="forms-sample" action="update_save_users.php?e_id=<?php echo $e_id;?>" method="post" enctype="multipart/form-data">

                  <div class="form-group">
                    <label for="exampleInputName1">Name</label>
                    <input type="text" value="<?php echo $u_name;?>" name="username" class="form-control" id="exampleInputName1" placeholder="Name">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail3">Email address</label>
                    <input type="email" value="<?php echo $u_email;?>" name="email" class="form-control" id="exampleInputEmail3" placeholder="Email">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword4">Password</label>
                    <input type="password" value="<?php echo $u_password;?>" name="password" class="form-control" id="exampleInputPassword4" placeholder="Password">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputCity1">Phone</label>
                    <input type="text" value="<?php echo $u_phone;?>" name="phone" class="form-control" id="exampleInputCity1" placeholder="Phone">
                  </div>

                  <div class="form-group">
                    <label for="exampleSelectGender">Gender</label>
                    <select class="form-control" name="gender" id="exampleSelectGender">
                      <option value="1" <?php if($u_gender=='1')echo "selected";?>>Male</option>
                      <option value="0" <?php if($u_gender=='0')echo "selected";?>>Female</option>
                    </select>
                  </div>

                  <div class="form-group">
                    <label for="exampleTextarea1">BioData</label>
                    <textarea class="form-control" name="biodata" id="exampleTextarea1" rows="4"><?php echo $u_bio_data;?></textarea>
                  </div>

                  <div class="form-group">
                    <label for="exampleSelectGender">Status</label>
                    <select class="form-control" name="status" id="exampleSelectGender">
                      <option value="1" <?php if($u_status=='1')echo"selected";?>>Active</option>
                      <option value="0" <?php if($u_status=='0')echo"selected";?>>InActive</option>
                    </select>
                  </div>

                  <div class="form-group">
                      <label for="readUrl" class="form-check-label badge bg-primary text-light">Upload</label>
                      <input type='file' name="image_file" id="readUrl" class="form-check-input" hidden>
                      <img id="uploadedImage" src="u_img/<?php echo $u_image;?>" alt="Uploaded Image" style="width: 200px;margin-top:20px;"/>
                  </div>
                  
                  <button type="submit" name="submit" class="btn btn-primary mr-2">Submit</button>
                  <button class="btn btn-dark">Cancel</button>
            </form>
<?php
    }
}
?>

                  </div>
                </div>
              </div>
             

            </div>
          </div>
          <!-- content-wrapper ends -->
          
<?php
include("src/footer.php");
?>
