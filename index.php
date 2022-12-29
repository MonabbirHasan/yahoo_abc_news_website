<?php
include("src/header.php");
include("admin/src/config.php");
global $conn;
?>
            <!-- partial -->
        
<div class="container">
  <div class="banner-top-thumb-wrap">
    <div class="d-lg-flex justify-content-between align-items-center">

<?php
$select_post1="SELECT * FROM post LIMIT 4";
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
<div class="d-flex justify-content-between  mb-3 mb-lg-0">
  <div>
    <img
      src="admin/p_img/<?php echo $p_image;?>"
      alt="thumb"
      class="banner-top-thumb"
    />
  </div>
    <a href="single.php?id=<?php echo $p_id;?>">
      <h5 class="m-0 font-weight-bold">
      <?php echo substr($p_title,0,30);?>
      </h5>
    </a>
</div>
<?php
}
?>
  </div>
</div>
<div class="row">
  <div class="col-lg-8">
    <div class="owl-carousel owl-theme" id="main-banner-carousel">

<?php
global $conn;
$select_post1="SELECT * FROM post LIMIT 4";
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
<div class="item">
  <div class="carousel-content-wrapper mb-2">
    <div class="carousel-content">
      <a href="single.php?id=<?php echo $p_id;?>" style="color:white;">
        <h1 class="font-weight-bold">
        <?php echo substr($p_title,0,40);?>
        </h1>
        <h5 class="font-weight-normal  m-0">
        <?php echo substr($p_desc,0,50);?>
        </h5>
      </a>
      <p class="text-color m-0 pt-2 d-flex align-items-center">
        <span class="fs-10 mr-1"><?php echo $p_date;;?></span>
        <i class="mdi mdi-bookmark-outline mr-3"></i>
        <span class="fs-10 mr-1"><?php echo $p_comment;?></span>
        <i class="mdi mdi-comment-outline"></i>
      </p>
    </div>
    <div class="carousel-image">
      <img src="admin/p_img/<?php echo $p_image;?>" alt="" style="width:100%;height:350px;"/>
    </div>
  </div>
</div>
<?php
}
?>
  </div>
</div>
<div class="col-lg-4">
  <div class="row">

<?php
$select_post1="SELECT * FROM post LIMIT 6";
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


    <div class="col-sm-6">
      <div class="py-3 border-bottom">
        <div class="d-flex align-items-center pb-2">
          <img
            src="admin/p_img/<?php echo $p_image;?>"
            class="img-xs img-rounded mr-2"
            alt="thumb"
          />
          <span class="fs-12 text-muted"><?php $p_author;?></span>
        </div>
        <p class="fs-14 m-0 font-weight-medium line-height-sm">
          <?php echo substr($p_title,0,50);?>
        </p>
      </div>
    </div>
<?php
}
?>


    <!-- <div class="col-sm-6">
      <div class="py-3 border-bottom">
        <div class="d-flex align-items-center pb-2">
          <img
            src="assets/images/dashboard/Profile_2.jpg"
            class="img-xs img-rounded mr-2"
            alt="thumb"
          />
          <span class="fs-12 text-muted">Oka Tomoaki</span>
        </div>
        <p class="fs-14 m-0 font-weight-medium line-height-sm">
          The Best Places to Travel in month August
        </p>
      </div>
    </div> -->

  </div>
  <div class="row">
    <!-- <div class="col-sm-6">
      <div class="pt-4 pb-4 border-bottom">
        <div class="d-flex align-items-center pb-2">
          <img
            src="assets/images/dashboard/Profile_2.jpg"
            class="img-xs img-rounded mr-2"
            alt="thumb"
          />
          <span class="fs-12 text-muted">Joana Leite</span>
        </div>
        <p class="fs-14 m-0 font-weight-medium line-height-sm">
          Focus On Fun And Challenging Lifetime Activities
        </p>
      </div>
    </div> -->

    <!-- <div class="col-sm-6">
      <div class="pt-3 pb-4 border-bottom">
        <div class="d-flex align-items-center pb-2">
          <img
            src="assets/images/dashboard/Profile_4.jpg"
            class="img-xs img-rounded mr-2"
            alt="thumb"
          />
          <span class="fs-12 text-muted">Rita Leite</span>
        </div>
        <p class="fs-14 m-0 font-weight-medium line-height-sm">
          Bread Is The Most Widely Consumed Food In The World
        </p>
      </div>
    </div> -->

  </div>
  <div class="row">

    <!-- <div class="col-sm-6">
      <div class="pt-4 pb-4">
        <div class="d-flex align-items-center pb-2">
          <img
            src="assets/images/dashboard/Profile_5.jpg"
            class="img-xs img-rounded mr-2"
            alt="thumb"
          />
          <span class="fs-12 text-muted">Jurrien Oldhof</span>
        </div>
        <p class="fs-14 m-0 font-weight-medium line-height-sm">
          What Is Music, And What Does It Mean To Us
        </p>
      </div>
    </div>

    <div class="col-sm-6">
      <div class="pt-3 pb-4">
        <div class="d-flex align-items-center pb-2">
          <img
            src="assets/images/dashboard/Profile_6.jpg"
            class="img-xs img-rounded mr-2"
            alt="thumb"
          />
          <span class="fs-12 text-muted">Yamaha Toshinobu</span>
        </div>
        <p class="fs-14 m-0 font-weight-medium line-height-sm">
          Is Breakfast The Most Important Meal Of The Day
        </p>
      </div>
    </div> -->

  </div>
</div>
</div>
<!-- world news code start -->
<div class="world-news">
  <div class="row">
    <div class="col-sm-12">
      <div class="d-flex position-relative  float-left">
        <h3 class="section-title">World News</h3>
      </div>
    </div>
  </div>
  <div class="row">
<?php
$select_post1="SELECT * FROM post LIMIT 4";
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

<div class="col-lg-3 col-sm-6 grid-margin mb-5 mb-sm-2">
  <div class="position-relative image-hover">
    <img
      src="admin/p_img/<?php echo $p_image;?>"
      class="img-fluid"
      alt="world-news"
      style="width:100%;height:200px;"
    />
    <span class="thumb-title">TRAVEL</span>
  </div>
   <a href="single.php?id=<?php echo $p_id;?>">
    <h5 class="font-weight-bold mt-3 ">
      <?php echo substr($p_title,0,50);?>
    </h5>
   </a>
  <p class="fs-15 font-weight-normal">
  <?php echo substr($p_desc,0,50);?>
  </p>
  <a href="single.php?id=<?php echo $p_id;?>" class="font-weight-bold text-dark pt-2"
    >Read Article</a
  >
</div>
<?php
}
?>
  </div>
</div>

<div class="editors-news">
  <div class="row">
    <div class="col-lg-3">
      <div class="d-flex position-relative float-left">
        <h3 class="section-title">Popular News</h3>
      </div>
    </div>
  </div>
  <div class="row">

<?php
$select_post1="SELECT * FROM post LIMIT 1";
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
<div class="col-lg-6  mb-5 mb-sm-2">
  <div class="position-relative image-hover">
    <img
      src="admin/p_img/<?php echo $p_image;?>"
      class="img-fluid"
      alt="world-news"
      style="height:400px;"
    />
    <span class="thumb-title">NEWS</span>
  </div>
   <a href="single.php?id=<?php echo $p_id;?>">
      <h1 class="font-weight-600 mt-3 text-dark">
        <?php echo substr($p_title,0,30);?>
      </h1>
   </a>
  <p class="fs-15 font-weight-normal">
    <?php echo substr($p_desc,0,200);?>
  </p>
</div>
<?php
}
?>

<div class="col-lg-6  mb-5 mb-sm-2">
  <div class="row">

<?php
$select_post1="SELECT * FROM post ORDER BY p_image LIMIT 4";
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

<div class="col-sm-6  mb-5 mb-sm-2">
  <div class="position-relative image-hover">
    <img
      src="admin/p_img/<?php echo $p_image;?>"
      class="img-fluid"
      alt="world-news"
      style="height:150px;border-radius:10px;"
    />
    <span class="thumb-title">POLITICS</span>
  </div>
    <a href="single.php?id=<?php echo $p_id;?>">
      <h5 class="font-weight-600 mt-3">
      <?php echo substr($p_title,0,50);?>
     </h5>
    </a>
  <p class="fs-15 font-weight-normal">
    <?php echo substr($p_desc,0,50);?>
  </p>
</div>
<?php
}
?>

</div>
<div class="row mt-3">    
  </div>
</div>
  </div>
</div>

<div class="popular-news">
  <div class="row">
    <div class="col-lg-3">
      <div class="d-flex position-relative float-left">
        <h3 class="section-title">Editor choice</h3>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-lg-9">
      <div class="row">

<?php
$select_post1="SELECT * FROM post ORDER BY p_image";
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
<div class="col-sm-4  mb-5 mb-sm-2">
  <div class="position-relative image-hover">
    <img
      src="admin/p_img/<?php echo $p_image;?>"
      class="img-fluid"
      alt="world-news"
      style="height:200px;width:220px"
    />
    <span class="thumb-title">LIFESTYLE</span>
  </div>
   <a href="single.php?id=<?php echo $p_id;?>">
    <h5 class="font-weight-600 mt-3">
      <?php echo substr($p_title,0,50);?>
    </h5>
   </a>
</div>
<?php
}
?>
</div>
<div class="row mt-3">
  </div>
</div>
<div class="col-lg-3">

<div class="row">
<div class="col-sm-12">
  <div class="d-flex position-relative float-left">
    <h3 class="section-title">Latest News</h3>
  </div>
</div>
<?php
$select_post1="SELECT * FROM post ORDER BY p_image";
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
  <div class="border-bottom pb-3">
     <a href="single.php?id=<?php echo $p_id;?>">
        <h5 class="font-weight-600 mt-0 mb-0">
           <?php echo substr($p_title,0,60);?>
        </h5>
     </a>
    <p class="text-color m-0 d-flex align-items-center">
      <span class="fs-10 mr-1"><?php echo $p_date;?></span>
      <i class="mdi mdi-bookmark-outline mr-3"></i>
      <span class="fs-10 mr-1"><?php echo $p_comment;?></span>
      <i class="mdi mdi-comment-outline"></i>
    </p>
  </div>
</div>
<?php
}
?>

        </div>
      </div>
    </div>
  </div>
</div>
        <!-- main-panel ends -->
<?php
include("src/footer.php");
?>