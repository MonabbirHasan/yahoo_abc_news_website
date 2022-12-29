<?php
include("src/header.php");
include("admin/src/config.php");
global $conn;
?>

          <!-- partial -->
    <div class="container">
      <div class="row">
<?php
$id=$_GET['id'];
$select_post1="SELECT * FROM post WHERE p_id='$id'";
$post_result1=mysqli_query($conn,$select_post1);
while($post_row1=mysqli_fetch_assoc($post_result1)){
  $p_id=$post_row1['p_id'];
  $p_title=$post_row1['p_title'];
  $p_image=$post_row1['p_image'];
  $p_desc=$post_row1['p_desc'];
  $p_tags=$post_row1['p_tags'];
  $p_date=$post_row1['p_date'];
  $p_category=$post_row1['p_category'];
  $p_author=$post_row1['p_author'];
  $p_comment=$post_row1['p_comment'];
  $p_status=$post_row1['p_status'];
?>
        <div class="col-sm-12">
          <div class="news-post-wrapper">
            <div class="news-post-wrapper-sm ">
              <h1 class="text-center">
                Use Our Compilation Of Most Famous Museums
              </h1>
              <div class="text-center">
                <a href="#" class="btn btn-dark font-weight-bold mb-4">News</a>
              </div>
              <p
                class="fs-15 d-flex justify-content-center align-items-center m-0"
              >
                <img
                  src="admin/p_img/<?php echo $p_image;?>"
                  alt=""
                  class="img-xs img-rounded mr-2"
                  
                />
                Oka Tomoaki | 23 February, 2018
              </p>
              <p class="pt-4 pb-4">
                He has led a remarkable campaign, defying the traditional
                mainstream parties courtesy of his En Marche! movement. For
                many, however, the campaign has become less about backing Macron
                and instead about voting against Le Pen, the National Front
                candidate.
              </p>
            </div>
            <img
              src="admin/p_img/<?php echo $p_image;?>"
              alt="news"
              class="img-fluid mb-4 m-auto"
            />
            <div class="news-post-wrapper-sm ">
              <p class="pt-4 pb-4 mb-4">
                He has led a remarkable campaign, defying the traditional
                mainstream parties courtesy of his En Marche! movement. For
                many, however, the campaign has become less about backing Macron
                and instead about voting against Le Pen, the National Front
                candidate.
              </p>
            </div>

            <div class="row mb-5">
              <!-- <div class="col-lg-6">
                <img
                  src="admin/p_img/<?php echo $p_image;?>"
                  alt="news"
                  class="img-fluid mb-4"
                />
              </div> -->
              <!-- <div class="col-lg-6">
                <h1 class="font-weight-600 mt-5">
                  TravelTips: How Do I Live On The Cheap?
                </h1>
                <p>
                  He has led a remarkable campaign, defying the traditional
                  mainstream parties courtesy of his En Marche! movement. For
                  many, however, the campaign has become less about backing
                  Macron and instead about voting against Le Pen, the National
                  Front candidate.
                </p>
              </div> -->
            </div>
           
          </div>
        </div>
        <?php
}
        ?>
      </div>
    </div>
    <!-- container-scroller ends -->
<?php
include("src/footer.php");
?>