<?php
include("admin/src/config.php");

?>
<!DOCTYPE html>
<html lang="zxx">
  <head>
    <!-- Required meta tags -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>World Vision</title>
    <!-- plugin css for this page -->
    <link
      rel="stylesheet"
      href="./assets/vendors/mdi/css/materialdesignicons.min.css"
    />
    <link rel="stylesheet" href="./assets/vendors/aos/dist/aos.css/aos.css" />
    <link
      rel="stylesheet"
      href="./assets/vendors/owl.carousel/dist/assets/owl.carousel.min.css"
    />
    <link
      rel="stylesheet"
      href="./assets/vendors/owl.carousel/dist/assets/owl.theme.default.min.css"
    />
    <!-- End plugin css for this page -->
    <link rel="shortcut icon" href="assets/images/favicon.png" />
    <!-- inject:css -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- endinject -->
  </head>

  <body>
    <div class="container-scroller">
      <div class="main-panel">
        <header id="header">
          <div class="container">
            <!-- partial:partials/_navbar.html -->
            <nav class="navbar navbar-expand-lg navbar-light">
              <div class="d-flex justify-content-between align-items-center navbar-top">
                <ul class="navbar-left">
                  <li><?php echo  date("Y-m-d h:i:sa");?></li>
                  <li>30°C,London</li>
                </ul>
                <div>
                  <a class="navbar-brand" href="index.php"
                    ><img src="assets/images/logo.svg" alt=""
                  /></a>
                </div>
                <div class="d-flex">
                  <ul class="navbar-right">
                    <li>
                      <a href="#">ENGLISH</a>
                    </li>
                    <li>
                      <a href="#">ESPAÑOL</a>
                    </li>
                  </ul>
                  <ul class="social-media">
                    <li>
                      <a href="#">
                        <i class="mdi mdi-instagram"></i>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="mdi mdi-facebook"></i>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="mdi mdi-youtube"></i>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="mdi mdi-linkedin"></i>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="mdi mdi-twitter"></i>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>

              <div class="navbar-bottom-menu">
                <button
                  class="navbar-toggler"
                  type="button"
                  data-target="#navbarSupportedContent"
                  aria-controls="navbarSupportedContent"
                  aria-expanded="false"
                  aria-label="Toggle navigation"
                >
                  <span class="navbar-toggler-icon"></span>
                </button>

                <div
                  class="navbar-collapse justify-content-center collapse"
                  id="navbarSupportedContent"
                >
                  <ul
                    class="navbar-nav d-lg-flex justify-content-between align-items-center"
                  >
                    <li>
                      <button class="navbar-close">
                        <i class="mdi mdi-close"></i>
                      </button>
                    </li>

<li class="nav-item active">
    <a class="nav-link active p-2"style="text-transform:capitalize; background:#bbb;" href="index.php">Home</a>
</li>
<?php
global $conn;

$select_category="SELECT * FROM category WHERE is_sub='0'";
$category_result=mysqli_query($conn,$select_category);
while($row=mysqli_fetch_assoc($category_result)){
$c_name=$row['c_name'];
$c_id=$row['c_id'];
?>

<li class="nav-item">
    <a class="nav-link p-2" style="text-transform:capitalize;" href="category.php?c_id=<?php echo $c_id;?>"><?php echo $c_name;?></a>
</li>
<?php
}
?>

<!-- 
                    
                    <li class="nav-item">
                      <a class="nav-link" href="pages/author.html">Magazine</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="pages/news-post.html">Blog</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="pages/business.html">Business</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="pages/sports.html">Sports</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="pages/art.html">Art</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="pages/politics.html">Politics</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="pages/real-estate.html">Real estate</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="pages/travel.html">Travel</a>
                    </li> -->
            <li class="nav-item">
                <a class="nav-link" href="#"><i class="mdi mdi-magnify"></i></a>
            </li>
            </ul>
        </div>
        </div>
    
    
    </nav>
    </div>
</header>