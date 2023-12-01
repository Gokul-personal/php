<?php
session_start();
include('includes/config.php');
error_reporting(0);

?>

<!DOCTYPE HTML>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta name="keywords" content="">
  <meta name="description" content="">
  <title>Farm Management</title>
  <!--Bootstrap -->
  <link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css">
  <link rel="stylesheet" href="assets/css/style.css" type="text/css">
  <link rel="stylesheet" href="assets/css/owl.carousel.css" type="text/css">
  <link rel="stylesheet" href="assets/css/owl.transitions.css" type="text/css">
  <link href="assets/css/slick.css" rel="stylesheet">
  <link href="assets/css/bootstrap-slider.min.css" rel="stylesheet">
  <link href="assets/css/font-awesome.min.css" rel="stylesheet">
  <!-- Fav and touch icons -->
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/images/favicon-icon/logo.png">
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/images/favicon-icon/logo.png">
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/images/favicon-icon/logo.png">
  <link rel="apple-touch-icon-precomposed" href="assets/images/favicon-icon/logo.png">
  <link rel="shortcut icon" href="assets/images/favicon-icon/logo.png">
  <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
</head>

<body>
  <!--Header-->
  <?php include('includes/header.php'); ?>
  <!-- /Header -->

  <!-- Banners -->
  <section id="banner" class="banner-section">
    <div class="container">
      <div class="div_zindex">
        <div class="row">
          <div class="col-md-5 col-md-push-7">
            <div class="banner_content">
              <h1>Learn the farm details</h1>
              <p>Without agriculture it is not possible to have a city, stock market, banks, university, church or army</p>
              <a href="#" class="btn">Read More <span class="angle_arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></span></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- /Banners -->

  <!-- Resent Cat-->
  <section class="section-padding gray-bg">
    <div class="container">
      <div class="row">
        <!-- Recently Listed New Cars -->
        <div class="tab-content">
          <!-- <div role="tabpanel" class="tab-pane active" id="resentnewcar">
            <div class="col-list-3">
              <div class="recent-car-list">
                <div class="car-info-box"> <a href="fruits.php?vhid=1"><img src="admin/img/vehicleimages/<?php echo htmlentities($result->Vimage1); ?>" class="img-responsive" alt="image"></a></div>
                <div class="car-title-m">
                  <h6><a href="fruits.php?vhid=1">Mango</h6>
                </div>
                <div class="inventory_info_m">
                  <p>The mango is a stone fruit which belongs to the Anacardiaceae family, which are flowering
                    plants that produce fruits. Mango (Mangifera indica) is a tropical fruit known for its delicious
                    taste, vibrant color, and rich nutritional profile. mango cultivated in many tropical and
                    subtropical regions around the world.</p>
                </div>
              </div>
            </div>
            <div class="col-list-3">
              <div class="recent-car-list">
                <div class="car-info-box"> <a href="fruits.php?vhid=2"><img src="admin/img/vehicleimages/<?php echo htmlentities($result->Vimage1); ?>" class="img-responsive" alt="image"></a></div>
                <div class="car-title-m">
                  <h6><a href="fruits.php?vhid=2">Watermelon</h6>
                </div>
                <div class="inventory_info_m">
                  <p>Watermelon (Citrullus lanatus) is a warm-season crop in the Cucurbit family. Watermelons are
                    grown across the state, including larger areas in Casey County, Lin- coln County, Hart County, Allen County
                    and Daviess County.</p>
                </div>
              </div>
            </div>
            <div class="col-list-3">
              <div class="recent-car-list">
                <div class="car-info-box"> <a href="fruits.php?vhid=3"><img src="admin/img/vehicleimages/<?php echo htmlentities($result->Vimage1); ?>" class="img-responsive" alt="image"></a></div>
                <div class="car-title-m">
                  <h6><a href="fruits.php?vhid=3">Jackfruit</a></h6>
                </div>
                <div class="inventory_info_m">
                  <p>Jackfruit (Artocarpus heterophyllus) is a large tropical fruit that is gaining popularity
                    worldwide due to its versatility and various health benefits.Jackfruit tree can reach he
                    evergreen, latex-produc-up to 80 feet in height, with a straight stem that branches
                    near the base.ends on environmental conditions such as photoperiod, temperature,
                    etc.</p>
                </div>
              </div>
            </div>
          </div>
        </div> -->
      </div>


      <div class="row">
        <!-- Recently Listed New Cars -->
        <div class="tab-content">
          <div role="tabpanel" class="tab-pane active" id="resentnewcar">
            <div class="col-list-3">
              <div class="recent-car-list">
                <div class="car-info-box"> <a href="veg.php?vhid=1"><img src="image/veg/brinjal.jpg<?php echo htmlentities($result->Vimage1); ?>" width="367px" height="245px"  alt="image"></a></div>
                <div class="car-title-m">
                  <h6><a href="veg.php?vhid=1">Brinjal</h6>
                </div>
                <div class="inventory_info_m">
                  <p>Brinjal is the most common, popular and principal vegetable
                    crop grown widely in india for its varied shape, size and
                    colour of fruits.This vegetable grows only in India and it has been cultivated</p>
                </div>
              </div>
            </div>
            <div class="col-list-3">
              <div class="recent-car-list">
                <div class="car-info-box"> <a href="veg.php?vhid=2"><img src="image/veg/Chilli.jpg<?php echo htmlentities($result->Vimage1); ?>" width="367px" height="245px" alt="image"></a></div>
                <div class="car-title-m">
                  <h6><a href="veg.php?vhid=2">Chilli</h6>
                </div>
                <div class="inventory_info_m">
                  <p>Chilli is one of the most valuable crops grown in north eastern region.
                    Fruits are long or small with high pungency. In Meghalaya, it is used as a
                    principal ingredient of various curries and chutneys.</p>
                </div>
              </div>
            </div>
            <div class="col-list-3">
              <div class="recent-car-list">
                <div class="car-info-box"> <a href="veg.php?vhid=3"><img src="image/veg/onion.jpg<?php echo htmlentities($result->Vimage1); ?>" class="img-responsive" alt="image"></a></div>
                <div class="car-title-m">
                  <h6><a href="veg.php?vhid=3">Onion</a></h6>
                </div>
                <div class="inventory_info_m">
                  <p>Onion has gained the importance of a cash crop in recent years because
                    of its very high export potential. Its cultivation is highly technical and
                    depends on environmental conditions such as..</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
  </section>

  <!--Footer -->
  <?php include('includes/footer.php'); ?>
  <!-- /Footer-->

  <!--Login-Form -->
  <?php include('includes/login.php'); ?>
  <!--/Login-Form -->

  <!--Register-Form -->
  <?php include('includes/registration.php'); ?>

  <!--/Register-Form -->

  <!--Forgot-password-Form -->
  <?php include('includes/forgotpassword.php'); ?>
  <!--/Forgot-password-Form -->

  <!-- Scripts -->
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <script src="assets/js/interface.js"></script>

  <!--bootstrap-slider-JS-->
  <script src="assets/js/bootstrap-slider.min.js"></script>
  <!--Slider-JS-->
  <script src="assets/js/slick.min.js"></script>
  <script src="assets/js/owl.carousel.min.js"></script>

</body>

</html>