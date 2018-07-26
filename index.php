<?php require_once 'partials/header.php'; ?>
<?php
  require_once 'classes/Slider.php';
  $slider = new Slider();
  $sliders  = $slider->getAllSliders();
?>

<?php
  require_once 'classes/Package.php';
  $package = new Package();
  $packages = $package->getEightPackages();
?>

<?php 
require_once 'classes/Service.php';
$service = new Service();
$count = $service->getCountData();
?>
<?php
require_once 'classes/Blog.php';
$Blog = new Blog();
$blogs  = $Blog->getAllBlogs();
?>
    <div class="content-body">
      <div class="tp-banner-container">
        <div class="tp-banner-slider">
          <ul>
          <?php
            if ($sliders) {
              while ($result = $sliders->fetch_assoc()) {
          ?>

            <li data-masterspeed="700" data-slotamount="7" data-transition="fade"><img src="rs-plugin/assets/loader.gif" data-lazyload="admin/<?php echo $result['image']; ?>" data-bgposition="center" alt="" data-kenburns="on" data-duration="30000" data-ease="Linear.easeNone" data-scalestart="100" data-scaleend="120" data-rotatestart="0" data-rotateend="0" data-offsetstart="0 0" data-offsetend="0 0" data-bgparallax="10">
              <div data-x="['center','center','center','center']" data-y="center" data-transform_in="x:-150px;opacity:0;s:1500;e:Power3.easeInOut;" data-transform_out="x:150px;opacity:0;s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" data-start="400" class="tp-caption sl-content">
                <div class="sl-title-top"><?php echo $result['headline_one']; ?></div>
                <div class="sl-title"><?php echo $result['headline_two']; ?></div>
                <div class="sl-title-bot"><?php echo $result['headline_three']; ?></div>
              </div>
              
            </li>
           <?php }} ?>
          </ul>
        </div>
        
      </div>
      <!-- page section-->
      <section class="page-section pb-0">
        <div class="container">
          <div class="row">
            <div class="col-md-8">
              <h2 class="title-section"><span>Popular</span> Packages</h2>
              <div class="cws_divider mb-25 mt-5"></div>
              <p class="res-text-center">Nullam ac dolor id nulla finibus pharetra. Sed sed placerat mauris. Pellentesque lacinia imperdiet interdum. Ut nec nulla in purus consequat lobortis. Mauris lobortis a nibh sed convallis.</p>
            </div>
            <div class="col-md-4"><img src="pic/promo-1.png" data-at2x="pic/promo-1@2x.png" alt class="mt-md-0 mt-minus-70 res-img-w-60"></div>
          </div>
        </div>
        <div class="features-tours-full-width">
          <div class="features-tours-wrap clearfix">

          <?php
            if ($packages) {
              while ($result = $packages->fetch_assoc()) {
              $package_id = $result['package_id'];
          ?>
            <div class="features-tours-item">
              <div class="features-media">
              <?php
                $images = $package->getPackageImageByIdLast($package_id);
                if ($images) {
                  while ($value = $images->fetch_assoc()) {
                 
              ?>
                <img src="admin/<?php echo $value['image']; ?>" data-at2x="pic/tours/1@2x.jpg" alt>
              <?php
                }
              }
              ?>   
                <div class="features-info-top">
                  <div class="info-price font-4"><span>start per night</span> $<?php echo $result['price']; ?></div>
                  
                </div>
                <div class="features-info-bot">
                  <h4 class="title"><span class="font-4"><?php echo $result['title']; ?></span> <?php echo $result['country']; ?></h4><a href="package_details.php?package=<?php echo $result['package_id']; ?>" class="button">Details</a>
                </div>
              </div>
            </div>
            <?php }} ?>

          </div>
        </div>
      </section>
      <!-- ! page section-->
      <!-- counter section -->
      <section class="small-section">
        <div class="container">

        <?php
          if ($count) {
            while ($result = $count->fetch_assoc()) {

        ?>
          <div class="row">
            <div class="col-md-2 col-xs-6 mb-md-30">
              <div class="counter-block"><i class="counter-icon flaticon-suntour-world"></i>
                <div class="counter-name-wrap">
                  <div data-count="<?php echo $result['tours']; ?>" class="counter">0</div>
                  <div class="counter-name">Tours</div>
                </div>
              </div>
            </div>
            <div class="col-md-2 col-xs-6 mb-md-30">
              <div class="counter-block with-divider"><i class="counter-icon flaticon-suntour-fireworks"></i>
                <div class="counter-name-wrap">
                  <div data-count="<?php echo $result['holiday']; ?>" class="counter">0</div>
                  <div class="counter-name">Holidays</div>
                </div>
              </div>
            </div>
            <div class="col-md-2 col-xs-6 mb-md-30">
              <div class="counter-block with-divider"><i class="counter-icon flaticon-suntour-hotel"></i>
                <div class="counter-name-wrap">
                  <div data-count="<?php echo $result['hotel']; ?>" class="counter">0</div>
                  <div class="counter-name">Hotels</div>
                </div>
              </div>
            </div>
            <div class="col-md-2 col-xs-6 mb-md-30">
              <div class="counter-block with-divider"><i class="counter-icon flaticon-suntour-ship"></i>
                <div class="counter-name-wrap">
                  <div data-count="<?php echo $result['cruise']; ?>" class="counter">0</div>
                  <div class="counter-name">Cruises</div>
                </div>
              </div>
            </div>
            <div class="col-md-2 col-xs-6">
              <div class="counter-block with-divider"><i class="counter-icon flaticon-suntour-airplane"></i>
                <div class="counter-name-wrap">
                  <div data-count="<?php echo $result['flight']; ?>" class="counter">0</div>
                  <div class="counter-name">Flights</div>
                </div>
              </div>
            </div>
            <div class="col-md-2 col-xs-6">
              <div class="counter-block with-divider"><i class="counter-icon flaticon-suntour-car"></i>
                <div class="counter-name-wrap">
                  <div data-count="<?php echo $result['car']; ?>" class="counter">0</div>
                  <div class="counter-name">Cars</div>
                </div>
              </div>
            </div>
          </div>
          <?php }} ?>

        </div>
      </section>
      <!-- ! counter section-->
      <!-- page section parallax-->
      <section class="small-section cws_prlx_section bg-gray-40 res-pt-25"><img src="pic/parallax-1.jpg" alt class="cws_prlx_layer">
        <div class="container">
          <div class="row">
            <div class="col-md-5">
              <!-- <h2 class="hidden-lg hidden-md" style="font-size: 30px;color: #fff;text-transform: uppercase;font-weight: 300;text-align:center">About <span style="color:#ffc107"> Travel</span>Adea</h2> -->
              <h2 class="title-section-top alt ">About </h2>
              <h2 class="title-section alt mb-20 res-traveladea"><span>Travel</span>adea</h2>
              <div class="cws_divider short mb-30 mt-30 hidden-md hidden-lg"></div>
              <p class="color-white">Vestibulum tincidunt venenatis scelerisque. Proin quis enim lacinia, vehicula massa et, mollis urna. Proin nibh mauris, blandit vitae convallis at, tincidunt vel tellus. Praesent posuere nec lectus non cursus. Sed commodo odio et ipsum sagittis tincidunt non eget felis.</p>
              <div class="cws_divider short mb-30 mt-30 hidden-sm hidden-xs"></div>
            </div>
            <div class="col-md-7">
              <div class="embed-responsive embed-responsive-16by9">
                <iframe src="https://www.youtube.com/embed/yib7tvIrL6k" class="embed-responsive-item"></iframe>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- ! page section parallax-->


      <!-- latest news-->
      <section class="small-section cws_prlx_section bg-blue-40"><img src="pic/parallax-3.jpg" alt class="cws_prlx_layer">
        <div class="container">
          <div class="row mb-50">
            <div class="col-md-8">
              <h6 class="title-section-top font-4">Latest News</h6>
              <h2 class="title-section alt-2 res-ourblog"><span>Our</span> Blog</h2>
              <div class="cws_divider mb-25 mt-5"></div>
              <p class="color-white">Vestibulum feugiat vitae tortor ut venenatis. Sed cursus, purus eu euismod bibendum, diam nisl suscipit odio, vitae ultrices mauris dolor quis mauris. Curabitur ac metus id leo maxim.</p>
            </div>
            <div class="col-md-4"><i class="flaticon-suntour-calendar title-icon alt"></i></div>
          </div>
          <div class="carousel-container">
            <div class="row">
              <div class="owl-two-pag pagiation-carousel mb-20">
              <?php
                if ($blogs) {
                  while ($result = $blogs->fetch_assoc()) {

              ?>
                <!-- Blog item-->
                <div class="blog-item clearfix">
                  <!-- Blog Image-->
                  <div class="blog-media"><a href="blog_single.php?blog=<?php echo $result['blog_id']; ?>">
                      <div class="pic"><img   src="admin/<?php echo $result['image']; ?>" data-at2x="admin/<?php echo $result['image']; ?>" class="res_blog_img" alt style="height:180px;width:180px;"></div></a></div>
                  <!-- blog body-->
                  <div class="blog-item-body clearfix">
                    <!-- title--><a href="blog_single.php?blog=<?php echo $result['blog_id']; ?>">
                      <h6 class="blog-title"><?php echo $result['title']; ?></h6></a>
                    <div class="blog-item-data"><?php echo date('M j Y g:i A', strtotime($result['created_at'])); ?></div>
                    <!-- Text Intro-->
                    <p><?php echo substr($result['description'], 0,90);  ?><?php if (strlen($result['description']) > 90) { ?>.... <?php } ?></p><a href="blog_single.php?blog=<?php echo $result['blog_id']; ?>" class="blog-button">Read more</a>
                  </div>
                </div>
                <!-- ! Blog item-->
               <?php }} ?> 
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- ! latest news-->
    </div>
<?php require_once 'partials/footer.php'; ?>