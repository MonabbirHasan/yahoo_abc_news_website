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
global $conn;
if(isset($_POST['submit'])){
  $username=$_POST['username'];
  $email=$_POST['email'];
  $password=$_POST['password'];
  $phone=$_POST['phone'];
  $gender=$_POST['gender'];
  $biodata=$_POST['biodata'];
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
   $insert_post="INSERT INTO users(u_name,u_email,u_phone,u_pass,u_image,u_gender,u_bio_data,u_total_post,u_type,u_status) 
                       VALUES('{$username}','{$email}','{$phone}','{$password}','{$new_file_name}','{$gender}','{$biodata}','10','1','{$status}')";
 move_uploaded_file($file_tmp,'u_img/'.$new_file_name);
 $insert_result=mysqli_query($conn,$insert_post);
}
}
?>

            <form class="forms-sample" action="" method="post" enctype="multipart/form-data">

                  <div class="form-group">
                    <label for="exampleInputName1">Name</label>
                    <input type="text" name="username" class="form-control" id="exampleInputName1" placeholder="Name">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail3">Email address</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail3" placeholder="Email">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword4">Password</label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword4" placeholder="Password">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputCity1">Phone</label>
                    <input type="text" name="phone" class="form-control" id="exampleInputCity1" placeholder="Phone">
                  </div>

                  <div class="form-group">
                    <label for="exampleSelectGender">Gender</label>
                    <select class="form-control" name="gender" id="exampleSelectGender">
                      <option value="1">Male</option>
                      <option value="0">Female</option>
                    </select>
                  </div>

                  <div class="form-group">
                    <label for="exampleTextarea1">BioData</label>
                    <textarea class="form-control" name="biodata" id="exampleTextarea1" rows="4"></textarea>
                  </div>

                  <div class="form-group">
                    <label for="exampleSelectGender">Status</label>
                    <select class="form-control" name="status" id="exampleSelectGender">
                      <option value="1">Active</option>
                      <option value="0">InActive</option>
                    </select>
                  </div>

                  <div class="form-group">
                      <label for="readUrl" class="form-check-label badge bg-primary text-light">Upload</label>
                      <input type='file' name="image_file" id="readUrl" class="form-check-input" hidden>
                      <img id="uploadedImage" src="#" alt="Uploaded Image" style="display:none; width: 200px;margin-top:20px;"/>
                  </div>
                  
                  <button type="submit" name="submit" class="btn btn-primary mr-2">Submit</button>
                  <button class="btn btn-dark">Cancel</button>
            </form>


                  </div>
                </div>
              </div>
             

            </div>
          </div>
          <!-- content-wrapper ends -->
          
<?php
include("src/footer.php");
?>