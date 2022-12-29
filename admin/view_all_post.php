<?php
include("src/header.php");
include("src/functions.php");
include("src/config.php");
?>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="row">
              <div class="col-sm-4 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <h5>Revenue</h5>
                    <div class="row">
                      <div class="col-8 col-sm-12 col-xl-8 my-auto">
                        <div class="d-flex d-sm-block d-md-flex align-items-center">
                          <h2 class="mb-0">$32123</h2>
                          <p class="text-success ml-2 mb-0 font-weight-medium">+3.5%</p>
                        </div>
                        <h6 class="text-muted font-weight-normal">11.38% Since last month</h6>
                      </div>
                      <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                        <i class="icon-lg mdi mdi-codepen text-primary ml-auto"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-4 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <h5>Sales</h5>
                    <div class="row">
                      <div class="col-8 col-sm-12 col-xl-8 my-auto">
                        <div class="d-flex d-sm-block d-md-flex align-items-center">
                          <h2 class="mb-0">$45850</h2>
                          <p class="text-success ml-2 mb-0 font-weight-medium">+8.3%</p>
                        </div>
                        <h6 class="text-muted font-weight-normal"> 9.61% Since last month</h6>
                      </div>
                      <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                        <i class="icon-lg mdi mdi-wallet-travel text-danger ml-auto"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              
              <div class="col-sm-4 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <h5>Purchase</h5>
                    <div class="row">
                      <div class="col-8 col-sm-12 col-xl-8 my-auto">
                        <div class="d-flex d-sm-block d-md-flex align-items-center">
                          <h2 class="mb-0">$2039</h2>
                          <p class="text-danger ml-2 mb-0 font-weight-medium">-2.1% </p>
                        </div>
                        <h6 class="text-muted font-weight-normal">2.27% Since last month</h6>
                      </div>
                      <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                        <i class="icon-lg mdi mdi-monitor text-success ml-auto"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

            </div>
<div class="row ">
<div class="col-12 grid-margin">
  <div class="card">
    <div class="card-body">
      <h4 class="card-title">VIEW ALL POST</h4>
      <div class="table-responsive">
        <table class="table">
          <thead>
            <tr style="text-transform:capitalize;">
              <th>id</th>
              <th>image</th>
              <th>title</th>
              <th>desc</th>
              <th>tags</th>
              <th>date</th>
              <th>category</th>
              <th>author</th>
              <th>status</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>

<?php
global $conn;
$select_post="SELECT * FROM post";
$post_result=mysqli_query($conn,$select_post);
while($row=mysqli_fetch_assoc($post_result)){
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
<tr>
<td> <?php echo $p_id;?> </td>
    <td>
      <img src="p_img/<?php echo $p_image;?>" alt="image" />
    </td>
    <td> <?php echo substr($p_title,0,10);?> </td>
    <td> <?php echo substr($p_desc,0,10);?> </td>
    <td style="text-transform:capitalize;"> 
    <?php 
    $split_tags=explode(',',$p_tags);
    foreach($split_tags as $value){
      echo "<span class='badge badge-primary text-dark ml-2'>{$value}</span>";
    }
    ?> 
    </td>
    <td> <?php echo $p_date;?> </td>
    <td style="text-transform:capitalize;"> 
    <?php 
    $name="SELECT * FROM category WHERE c_id='$p_category'";
    $result=mysqli_query($conn,$name);
    $row=mysqli_fetch_assoc($result);
    echo $row['c_name'];
    ?> 
    </td>
    <td style="text-transform:capitalize;"> 
      <?php
        $name="SELECT * FROM users WHERE u_id='$p_author'";
        $result=mysqli_query($conn,$name);
        $row=mysqli_fetch_assoc($result);
        echo $row['u_name'];
        $u_id=$row['u_id'];
      ?> 
    </td>
    <td>
      <div class="badge badge-outline-success"><?php if($p_status==1)echo"Active";else echo "InActive";?></div>
    </td>
    <td>
      <a href="delete_post.php?d_id=<?php echo $p_id;?>" class="badge badge-success"><i class="mdi mdi-delete"></i></a>
      <a href="update_post.php?e_id=<?php echo $p_id;?>" class="badge badge-success"><i class="mdi mdi-lead-pencil"></i></a>
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
