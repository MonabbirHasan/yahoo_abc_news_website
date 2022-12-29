<?php
include("src/header.php");
include("src/config.php");
include("src/functions.php");
?>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="row ">
              <div class="col-md-10 grid-margin stretch-card" style="width:100%;>
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">ADD NEW CATEGROY</h4>
                    <form class="forms-sample" method="post" enctype="multipart/form-data" action="insert_category.php">
                      <div class="form-group">
                        <label for="exampleInputUsername1"> category name</label>
                        <input type="text" name="category_name" class="form-control" id="exampleInputUsername1" placeholder="Username">
                      </div>
                      <div class="form-group">
                        <label for="exampleFormControlSelect3">Select Parent</label>
                        <select name="parent_category"  class="form-control form-control-sm" id="exampleFormControlSelect3">
                        <option selected>select parent</option>
                          <?php
                              parent_category();
                          ?>
                        </select>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputUsername1"> Date</label>
                      <input type="Date" name="date" class="form-control" id="exampleInputUsername1"/>
                    </div>
                    <div class="form-group">
                      <label for="exampleFormControlSelect3">Category Status</label>
                      <select name="status"  class="form-control form-control-sm" id="exampleFormControlSelect3">
                         <option value="1">Active</option>
                         <option value="0">InActive</option>
                      </select>
                  </div>
                      <div class="form-group">
                        <label for="readUrl" class="form-check-label badge bg-primary text-light">Upload</label>
                          <input type='file' name="image_file" id="readUrl" class="form-check-input" hidden>
                          <img id="uploadedImage" src="#" alt="Uploaded Image" style="display:none; width: 100%; height:auto;margin-top:20px;"/>
                      </div>
                      <button type="submit" name="insert_btn" class="btn btn-primary mr-2">Submit</button>
                      <button class="btn btn-dark">Cancel</button>
                    </form>
                  </div>
                </div>
              </div>
              <div class="col-10 grid-margin" style="width:100%;">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">View All Category</h4>
                    <div class="table-responsive">
                      <table class="table">
                        <thead>
                          <tr>
                            <th> Id </th>
                            <th> Image </th>
                            <th> Name </th>
                            <th> Is-Sub </th>
                            <th> Date </th>
                            <th> Status </th>
                            <th>Actions</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php
                          $select_category="SELECT * FROM category WHERE is_sub=0";
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
                          <tr>
                            <td><?php echo $c_id;?></td>
                            <td>
                              <img src="c_img/<?php echo $c_image;?>" alt="image" />
                            </td>
                            <td><?php echo $c_name;?></td>
                            <td><?php echo $is_sub;?></td>
                            <td><?php echo $c_date;?></td>
                            <td><?php if($c_status==='1')echo "<span class='badge badge-primary'>Active</span>";else echo"<span class='badge badge-danger'>InActive</span>";?></td>
                          <td>
                            <a href="category_update.php?e_id=<?php echo $c_id;?>"><i class="mdi mdi-border-color btn btn-success text-dark p-1 m-0"></i></a>
                            <a href="category.php?d_id=<?php echo $c_id;?>"><i class="mdi mdi-delete btn btn-success text-dark p-1 m-0"></i></a>
                          </td>
                          <?php
                            subCategroy($c_id);
                          ?>
                        </tr>
                        <?php
                      }
                    }
                        ?>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6 col-xl-4 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="d-flex flex-row justify-content-between">
                      <h4 class="card-title">Messages</h4>
                      <p class="text-muted mb-1 small">View all</p>
                    </div>
                    <div class="preview-list">
                      <div class="preview-item border-bottom">
                        <div class="preview-thumbnail">
                          <img src="assets/images/faces/face6.jpg" alt="image" class="rounded-circle" />
                        </div>
                        <div class="preview-item-content d-flex flex-grow">
                          <div class="flex-grow">
                            <div class="d-flex d-md-block d-xl-flex justify-content-between">
                              <h6 class="preview-subject">Leonard</h6>
                              <p class="text-muted text-small">5 minutes ago</p>
                            </div>
                            <p class="text-muted">Well, it seems to be working now.</p>
                          </div>
                        </div>
                      </div>
                      <div class="preview-item border-bottom">
                        <div class="preview-thumbnail">
                          <img src="assets/images/faces/face8.jpg" alt="image" class="rounded-circle" />
                        </div>
                        <div class="preview-item-content d-flex flex-grow">
                          <div class="flex-grow">
                            <div class="d-flex d-md-block d-xl-flex justify-content-between">
                              <h6 class="preview-subject">Luella Mills</h6>
                              <p class="text-muted text-small">10 Minutes Ago</p>
                            </div>
                            <p class="text-muted">Well, it seems to be working now.</p>
                          </div>
                        </div>
                      </div>
                      <div class="preview-item border-bottom">
                        <div class="preview-thumbnail">
                          <img src="assets/images/faces/face9.jpg" alt="image" class="rounded-circle" />
                        </div>
                        <div class="preview-item-content d-flex flex-grow">
                          <div class="flex-grow">
                            <div class="d-flex d-md-block d-xl-flex justify-content-between">
                              <h6 class="preview-subject">Ethel Kelly</h6>
                              <p class="text-muted text-small">2 Hours Ago</p>
                            </div>
                            <p class="text-muted">Please review the tickets</p>
                          </div>
                        </div>
                      </div>
                      <div class="preview-item border-bottom">
                        <div class="preview-thumbnail">
                          <img src="assets/images/faces/face11.jpg" alt="image" class="rounded-circle" />
                        </div>
                        <div class="preview-item-content d-flex flex-grow">
                          <div class="flex-grow">
                            <div class="d-flex d-md-block d-xl-flex justify-content-between">
                              <h6 class="preview-subject">Herman May</h6>
                              <p class="text-muted text-small">4 Hours Ago</p>
                            </div>
                            <p class="text-muted">Thanks a lot. It was easy to fix it .</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-xl-4 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Portfolio Slide</h4>
                    <div class="owl-carousel owl-theme full-width owl-carousel-dash portfolio-carousel" id="owl-carousel-basic">
                      <div class="item">
                        <img src="assets/images/dashboard/Rectangle.jpg" alt="">
                      </div>
                      <div class="item">
                        <img src="assets/images/dashboard/Img_5.jpg" alt="">
                      </div>
                      <div class="item">
                        <img src="assets/images/dashboard/img_6.jpg" alt="">
                      </div>
                    </div>
                    <div class="d-flex py-4">
                      <div class="preview-list w-100">
                        <div class="preview-item p-0">
                          <div class="preview-thumbnail">
                            <img src="assets/images/faces/face12.jpg" class="rounded-circle" alt="">
                          </div>
                          <div class="preview-item-content d-flex flex-grow">
                            <div class="flex-grow">
                              <div class="d-flex d-md-block d-xl-flex justify-content-between">
                                <h6 class="preview-subject">CeeCee Bass</h6>
                                <p class="text-muted text-small">4 Hours Ago</p>
                              </div>
                              <p class="text-muted">Well, it seems to be working now.</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <p class="text-muted">Well, it seems to be working now. </p>
                    <div class="progress progress-md portfolio-progress">
                      <div class="progress-bar bg-success" role="progressbar" style="width: 50%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-12 col-xl-4 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">To do list</h4>
                    <div class="add-items d-flex">
                      <input type="text" class="form-control todo-list-input" placeholder="enter task..">
                      <button class="add btn btn-primary todo-list-add-btn">Add</button>
                    </div>
                    <div class="list-wrapper">
                      <ul class="d-flex flex-column-reverse text-white todo-list todo-list-custom">
                        <li>
                          <div class="form-check form-check-primary">
                            <label class="form-check-label">
                              <input class="checkbox" type="checkbox"> Create invoice </label>
                          </div>
                          <i class="remove mdi mdi-close-box"></i>
                        </li>
                        <li>
                          <div class="form-check form-check-primary">
                            <label class="form-check-label">
                              <input class="checkbox" type="checkbox"> Meeting with Alita </label>
                          </div>
                          <i class="remove mdi mdi-close-box"></i>
                        </li>
                        <li class="completed">
                          <div class="form-check form-check-primary">
                            <label class="form-check-label">
                              <input class="checkbox" type="checkbox" checked> Prepare for presentation </label>
                          </div>
                          <i class="remove mdi mdi-close-box"></i>
                        </li>
                        <li>
                          <div class="form-check form-check-primary">
                            <label class="form-check-label">
                              <input class="checkbox" type="checkbox"> Plan weekend outing </label>
                          </div>
                          <i class="remove mdi mdi-close-box"></i>
                        </li>
                        <li>
                          <div class="form-check form-check-primary">
                            <label class="form-check-label">
                              <input class="checkbox" type="checkbox"> Pick up kids from school </label>
                          </div>
                          <i class="remove mdi mdi-close-box"></i>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- content-wrapper ends -->
<?php
include("src/footer.php");
global $conn;
if(isset($_GET['d_id'])){
  $d_id=$_GET['d_id'];
   $delete_categroy="DELETE FROM category WHERE c_id='$d_id'";
   if(mysqli_query($conn,$delete_categroy)){
       header("Location: category.php");
   }
}
?>
