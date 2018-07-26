<?php
header("Expires: Tue, 01 Jan 2000 00:00:00 GMT");
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
?>
<?php session_start(); ?>

<!DOCTYPE html>
<html>
<head>
    <title>Traveladea | Tours and Travels</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="no-cache">
    <meta http-equiv="Expires" content="-1">
    <meta http-equiv="Cache-Control" content="no-cache">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/font-awesome.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/jquery.fancybox.css">
    <link rel="stylesheet" href="fonts/fi/flaticon.css">
    <link rel="stylesheet" href="css/flexslider.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="css/indent.css">
    <link rel="stylesheet" href="rs-plugin/css/settings.css">
    <link rel="stylesheet" href="rs-plugin/css/layers.css">
    <link rel="stylesheet" href="rs-plugin/css/navigation.css">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
  <body>
    <!-- header page-->
    <header class="navbar-fixed-top ">
      <!-- site top panel-->
      <div class="site-top-panel">
        <div class="container p-relative">
          <div class="row">
            <div class="col-md-6 col-sm-7">
              <!-- lang select wrapper-->
              <div class="top-left-wrap font-3">
                <div class="mail-top"><a href=""> <i class="flaticon-suntour-email"></i>contact@traveladea.com</a></div><span>/</span>
                <div class="tel-top"><a href=""> <i class="flaticon-suntour-phone"></i>+88029564935</a></div>
              </div>
              <!-- ! lang select wrapper-->
            </div>
          </div>
        </div>
      </div>
      <!-- ! site top panel-->
      <!-- Navigation panel-->
<?php
  require_once 'classes/Package.php';
  $package = new Package();
  $packages = $package->getFivePackages();
?>      
      <nav class="main-nav js-stick">
        <div class="full-wrapper relative clearfix container">
          <!-- Logo ( * your text or image into link tag *)-->
          <div class="nav-logo-wrap local-scroll">
          <a href="index.php" class="logo"><img class="hidden-sm hidden-xs " src="pic/travelsadealogo.png" data-at2x="pic/travelsadealogo.png" alt></a></div>
          <!-- Main Menu-->
          <div class="inner-nav desktop-nav hidden-sm hidden-xs">
            <ul class="clearlist">
              <li><a href="index.php?p=home" class="mn-has-sub">Home</a></li>
              <li class="slash">/</li>
              <li><a href="packages.php?page=1" class="mn-has-sub">Packages <i class="fa fa-angle-down button_open"></i></a>
                <!-- Sub-->
                <ul class="mn-sub" style="left: -290px;">
                  <li>
                    <div class="four_item">
                      <?php
                        if ($packages) {
                          while ($result = $packages->fetch_assoc()) {
                          $package_id = $result['package_id'];
                      ?>

                        <div class="item">
                            <figure>
                              <a href="package_details.php?package=<?php echo $result['package_id']; ?>">
                              <?php
                                $images = $package->getPackageImageByIdLast($package_id);
                                if ($images) {
                                  while ($value = $images->fetch_assoc()) {
                                 
                              ?>
                                <img src="admin/<?php echo $value['image']; ?>"  />
                              <?php
                                }
                              }
                              ?>    
                              </a>
                            </figure>
                            <ul>
                              <li><a href="package_details.php?package=<?php echo $result['package_id']; ?>"><?php echo $result['title']; ?></a></li>
                              <li><a href="package_details.php?package=<?php echo $result['package_id']; ?>">Country - <?php echo $result['country']; ?> </a></li>
                              <li><a href="package_details.php?package=<?php echo $result['package_id']; ?>l">start per night</span> $<?php echo $result['price']; ?></a></li>
                            </ul>
                        </div>
                        <?php }} ?>
                      </div>  
                  </li>
                </ul>
                <!-- End Sub-->
              </li>
              <li class="slash">/</li>
              <li><a href="services.php " class="mn-has-sub">Services </a></li>
              <li class="slash">/</li>
              <li><a href="#" class="mn-has-sub">Custom Tour <i class="fa fa-angle-down button_open"></i></a>
                <!-- Sub-->
                <ul class="mn-sub">
                  <li><a href="visa_custom_tour.php">Visa</a></li>
                  <li><a href="flight_custom_tour.php">Flight</a></li>
                  <li><a href="package_custom_tour.php">Package</a></li>
                </ul>
                <!-- End Sub-->
              </li>

              <li class="slash">/</li>
              <!-- Item With Sub-->
              <li><a href="#" class="mn-has-sub">Gallery <i class="fa fa-angle-down button_open"></i></a>
                <!-- Sub-->
                <ul class="mn-sub">
                  <li><a href="photo-gallery.php">Photos</a></li>
                  <li><a href="video-gallery.php">Videos</a></li>
                </ul>
                <!-- End Sub-->
              </li>
              <li class="slash">/</li>
              <li><a href="all_blogs.php?page=1" class="mn-has-sub">Our Blog </a></li>
              <li class="slash">/</li>
              <li><a href="contact.php">Contact</a></li>
              <li class="search"><a href="#" class="mn-has-sub">Search</a>
                <ul class="search-sub">
                  <li>
                    <div class="container">
                      <div class="mn-wrap">
                        <form method="post" class="form">
                          <div class="search-wrap">
                            <input type="text" placeholder="Where will you go next?" class="form-control search-field"><i class="flaticon-suntour-search search-icon"></i>
                          </div>
                        </form>
                      </div>
                      <div class="close-button"><span>Search</span></div>
                    </div>
                  </li>
                </ul>
              </li>
              <!-- End Search-->
            </ul>
          </div>
          <!-- End Main Menu-->
        </div>
      </nav>
      <!-- End Navigation panel-->
    </header>
    <!-- ! header page-->

        <!-- resposive header -->
        <nav class="navbar navbar-fixed-top  hidden-md hidden-lg">
          <div class="container-fluid">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>                        
              </button>
              <a class="navbar-brand" href="index.php"><img class="res_logo" src="pic/travelsadealogo.png" data-at2x="pic/travelsadealogo.png" alt></a>
              
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
              <ul class="nav navbar-nav">
                <li class="active"><a href="index.php">Home</a></li>
                <li><a href="packages.php">Package</a></li>
                <li><a href="services.php">Service</a></li>
                <li><a href="#" class="dropdown-toggle" data-toggle="dropdown">Custom Tour <i class="fa fa-angle-down button_open"></i></a>
                  <!-- Sub-->
                  <ul class="dropdown-menu">
                    <li><a href="visa_custom_tour.php">Visa</a></li>
                    <li><a href="flight_custom_tour.php">Flight</a></li>
                    <li><a href="package_custom_tour.php">Package</a></li>
                  </ul>
                  <!-- End Sub-->
                </li>

                <li><a href="#" class="dropdown-toggle" data-toggle="dropdown">Gallery <i class="fa fa-angle-down button_open"></i></a>
                  <!-- Sub-->
                  <ul class="dropdown-menu">
                    <li><a href="photo-gallery.php">Photos</a></li>
                    <li><a href="video-gallery.php">Videos</a></li>
                  </ul>
                  <!-- End Sub-->
                </li>
                <li><a href="all_blogs.php">Our Blog </a></li>
                <li><a href="contact.php">Contact</a></li>
              </ul>
            </div>
          </div>
        </nav>
        <!-- end resposive header -->