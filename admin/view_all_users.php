<?php
include("src/header.php");
include("src/config.php");
?>
        <!-- partial -->
      <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> Basic Tables </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Tables</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Basic tables</li>
                </ol>
              </nav>
            </div>
            <div class="row">
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">View All Users</h4>
                    <div class="table-responsive">
                      <table class="table table-striped">
                        <thead>
                          <tr>
                            <th>id</th>
                            <th>user</th>
                            <th>usrname</th>
                            <th>email</th>
                            <th>phone</th>
                            <th>gender</th>
                            <th>biodata</th>
                            <th>total post</th>
                            <th>type</th>
                            <th>status</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
<?php

global $conn;

$select_user="SELECT * FROM users";
$result=mysqli_query($conn,$select_user);
while($row=mysqli_fetch_assoc($result)){
  $u_id=$row['u_id'];
  $u_image=$row['u_image'];
  $u_name=$row['u_name'];
  $u_email=$row['u_email'];
  $u_phone=$row['u_phone'];
  $u_gender=$row['u_gender'];
  $u_bio_data=$row['u_bio_data'];
  $u_total_post=$row['u_total_post'];
  $u_type=$row['u_type'];
  $u_status=$row['u_status'];
?>

<tr>
  <td><?php echo $u_id;?></td>
  <td class="py-1">
    <img src="u_img/<?php echo $u_image;?>" alt="image" />
  </td>
  <td> <?php echo $u_name;?> </td>
  <td> <?php echo $u_email;?> </td>
  <td> <?php echo $u_phone;?></td>
  <td>
    <?php  
      if($u_gender=='1'){
        echo "<span class='badge badge-primary'>Male</span>";
      }else{
        echo "<span class='badge badge-primary'>Fmale</span>";
      }
    ?>
  </td>
  <td><?php echo substr($u_bio_data,0,20);?></td>
  <td><?php echo $u_total_post;?></td>
  <td>
    <?php 
    switch($u_type){
      case '0':
        echo "<span class='badge badge-primary'>Normal</span>";
        break;
      case '1':
          echo "<span class='badge badge-primary'>Subscriber</span>";
        break;
      case '2':
          echo "<span class='badge badge-primary'>Admin</span>";
          break;
    }
    ?>
  </td>
  <td>
    <?php 
     if($u_status=='1'){
      echo "<span class='badge badge-success'>Active</span>";
     }else{
      echo "<span class='badge badge-danger'>InActive</span>";
     }
    
    ?>
</td>
<td>
  <span class="badge badge-danger m-0 p-2 text-light"><a href="delete_user.php?d_id=<?php echo $u_id;?>"><i class="mdi mdi-delete"></i></a></span>
  <span class="badge badge-success m-0 p-2 text-light"><a href="update_user.php?e_id=<?php echo $u_id;?>"><i  class="mdi mdi-grease-pencil"></i></a></span>
</td>
</tr>
<?php
}
?>

              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- content-wrapper ends -->

<?php
include("src/footer.php");
?>
