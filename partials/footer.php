<?php
  require_once 'classes/Blog.php';
  $Blog = new Blog();
  $tags = $Blog->getAllTags();
?>
  <script type="text/javascript">function add_chatinline(){var hccid=28376773;var nt=document.createElement("script");nt.async=true;nt.src="https://mylivechat.com/chatinline.aspx?hccid="+hccid;var ct=document.getElementsByTagName("script")[0];ct.parentNode.insertBefore(nt,ct);}
    add_chatinline();</script>
    <!-- footer-->
    <footer style="background: #fff ;height: 375px;"  class="footer footer-fixed hidden-sm hidden-xs">
      <div class="container">
        <div class="row pb-5 pb-md-40">
          <!-- widget footer-->
          <div class="col-md-6 col-sm-12 mb-sm-30">
            <div class="logo-soc clearfix">
              <div class="footer-logo"><a href="index.php"><img src="pic/travelsadealogo.png" style="height:100px;" data-at2x="pic/travelsadealogo.pngg" alt></a></div>
            </div>
            <p class="color-g2 mt-10">Vestibulum tincidunt venenatis scelerisque. Proin quis enim lacinia, vehicula massa et, mollis urna. Proin nibh mauris, blandit vitae convallis at, tincidunt vel tellus. Praesent posuere nec lectus non.</p>
            <!-- social-->
            <div class="social-link dark"><a href="#" class="cws-social fa fa-twitter"></a><a href="#" class="cws-social fa fa-facebook"></a><a href="#" class="cws-social fa fa-google-plus"></a><a href="#" class="cws-social fa fa-linkedin"></a></div>
            <!-- ! social-->
          </div>
          <!-- ! widget footer-->
          <!-- widget footer-->
          <div class="col-md-3 col-sm-6 mb-sm-30 ">
            <div class="widget-footer">
              <h4 style="color:#a9b5c1">Latest Tweets</h4>
              <div class="twitter-footer align-left" style="color:#a9b5c1"></div>
            </div>
          </div>
          <!-- end widget footer-->
          <!-- widget footer-->
          <div class="col-md-3 col-sm-6">
            <div class="widget-footer">
              <h4 style="color:#a9b5c1">Tag cloud</h4>
              <div class="widget-tags-wrap">
              <?php
                if ($tags) {
                  while ($result = $tags->fetch_assoc()) {
              ?>
                <a href="tag_blog_list.php?tag=<?php echo $result['name']; ?>&&page=1" rel="tag" class="tag"><?php echo $result['name']; ?></a>
              <?php } } ?>  
              </div>
            </div>
          </div>
          <!-- end widget footer-->
        </div>
      </div>
      <!-- copyright-->
      <div class="copyright" style="margin-top: 25px;"> 
        <div class="container">
          <div class="row">
            <div class="col-sm-6">
              <p>© Copyright <?php echo date("Y"); ?> <span>Traveladea</span> &nbsp;&nbsp;|&nbsp;&nbsp; All Rights Reserved</p>
            </div>
            <div class="col-sm-6 text-right">
              <a href="index.php" class="footer-nav">Home</a>
              <a href="packages.php" class="footer-nav">Packages</a>
              <a href="services.php" class="footer-nav">Services</a>
              <a href="all_blogs.php?page=1" class="footer-nav">Our Blog</a>
              <a href="contact.php" class="footer-nav">Contacts</a>
            </div>
          </div>
        </div>
      </div>
      <!-- end copyright-->
      <!-- scroll top-->
    </footer>
    <!-- <div id="scroll-top"><i class="fa fa-angle-up"></i></div> -->
    <!-- ! footer-->
    <?php
      require_once 'classes/Blog.php';
      $Blog = new Blog();
      $tags = $Blog->getAllTags();
    ?>
    <!--responsive footer-->
    <footer style="background: #fff ;height: 100%"  class="footer footer-fixed hidden-md hidden-lg">
      <div class="container">
        <div class="row pb-5 pb-md-40">
          <!-- widget footer-->
          <div class="col-md-6 col-sm-12 mb-sm-30">
            <div class="logo-soc clearfix">
              <div class="footer-logo"><a href="index.php"><img src="pic/travelsadealogo.png" style="height:60px;" data-at2x="pic/travelsadealogo.pngg" alt></a></div>
            </div>
            <p class="color-g2 mt-10" style="font-size: 13px;text-align: justify;">Vestibulum tincidunt venenatis scelerisque. Proin quis enim lacinia, vehicula massa et, mollis urna. Proin nibh mauris, blandit vitae convallis at, tincidunt vel tellus. Praesent posuere nec lectus non.</p>
          </div>
          <!-- ! widget footer-->
          <!-- widget footer-->
          <div class="col-md-3 col-sm-6 mb-sm-30">
            <div class="widget-footer">
              <h4 style="color:#a9b5c1;font-size:20px" >Latest Tweets</h4>
              <div class="twitter-footer align-left" style="color:#a9b5c1;font-size:13px"></div>
            </div>
          </div>
          <!-- end widget footer-->
          <!-- widget footer-->
          <div class="col-md-3 col-sm-6">
            <div class="widget-footer">
              <h4 style="color:#a9b5c1;font-size:20px">Tag cloud</h4>
              <div class="widget-tags-wrap">
              <?php
                if ($tags) {
                  while ($result = $tags->fetch_assoc()) {
              ?>
                <a style="font-size:12px" href="tag_blog_list.php?tag=<?php echo $result['name']; ?>&&page=1" rel="tag" class="tag"><?php echo $result['name']; ?></a>
              <?php } } ?>  
              </div>
            </div>
          </div>
          <!-- end widget footer-->
        </div>
      </div>
      <!-- copyright-->
      <div class="copyright" style="margin-top: 25px;"> 
        <div class="container">
          <div class="row">
            <div class="col-sm-6">
              <p>© Copyright <?php echo date("Y"); ?> <span>Traveladea</span> &nbsp;&nbsp;|&nbsp;&nbsp; All Rights Reserved</p>
            </div>
            <div class="col-sm-6 text-right">
              <a href="index.php" class="footer-nav">Home</a>
              <a href="packages.php?page=1" class="footer-nav">Packages</a>
              <a href="services.php" class="footer-nav">Services</a>
              <a href="all_blogs.php?page=1" class="footer-nav">Our Blog</a>
              <a href="contact.php" class="footer-nav">Contacts</a>
            </div>
            <!-- social-->
            <div class="social-link dark"><a href="#" class="cws-social fa fa-twitter"></a><a href="#" class="cws-social fa fa-facebook"></a><a href="#" class="cws-social fa fa-google-plus"></a><a href="#" class="cws-social fa fa-linkedin"></a></div>
            <!-- ! social-->

          </div>
        </div>
      </div>
      <!-- end copyright-->
      <!-- scroll top-->
    </footer>
    <div class="hidden-xs hidden-sm" id="scroll-top"><i class="fa fa-angle-up"></i></div>
    <!-- ! footer-->
    
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/jquery-ui.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script type="text/javascript" src="js/owl.carousel.js"></script>
    <script type="text/javascript" src="js/jquery.sticky.js"></script>
    <script type="text/javascript" src="js/TweenMax.min.js"></script>
    <script type="text/javascript" src="js/cws_parallax.js"></script>
    <script type="text/javascript" src="js/jquery.fancybox.pack.js"></script>
    <script type="text/javascript" src="js/jquery.fancybox-media.js"></script>
    <script type="text/javascript" src="js/isotope.pkgd.min.js"></script>
    <script type="text/javascript" src="js/imagesloaded.pkgd.min.js"></script>
    <script type="text/javascript" src="js/masonry.pkgd.min.js"></script>
    <script type="text/javascript" src="rs-plugin/js/jquery.themepunch.tools.min.js"></script>
    <script type="text/javascript" src="rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
    <script type="text/javascript" src="rs-plugin/js/extensions/revolution.extension.slideanims.min.js"></script>
    <script type="text/javascript" src="rs-plugin/js/extensions/revolution.extension.layeranimation.min.js"></script>
    <script type="text/javascript" src="rs-plugin/js/extensions/revolution.extension.navigation.min.js"></script>
    <script type="text/javascript" src="rs-plugin/js/extensions/revolution.extension.parallax.min.js"></script>
    <script type="text/javascript" src="rs-plugin/js/extensions/revolution.extension.video.min.js"></script>
    <script type="text/javascript" src="rs-plugin/js/extensions/revolution.extension.actions.min.js"></script>
    <script type="text/javascript" src="rs-plugin/js/extensions/revolution.extension.kenburn.min.js"></script>
    <script type="text/javascript" src="rs-plugin/js/extensions/revolution.extension.migration.min.js"></script>
    <script type="text/javascript" src="js/jquery.validate.min.js"></script>
    <script type="text/javascript" src="js/jquery.form.min.js"></script>
    <script type="text/javascript" src="js/script.js"></script>
    <script type="text/javascript" src="js/bg-video/cws_self_vimeo_bg.js"></script>
    <script type="text/javascript" src="js/bg-video/jquery.vimeo.api.min.js"></script>
    <script type="text/javascript" src="js/bg-video/cws_YT_bg.js"></script>
    <script type="text/javascript" src="js/jquery.tweet.js"></script>
    <script type="text/javascript" src="js/jquery.scrollTo.min.js"></script>
    <script type="text/javascript" src="js/jquery.flexslider.js"></script>
    <script type="text/javascript" src="js/retina.min.js"></script>
  </body>

<!-- Mirrored from html.creaws.com/suntour/page-contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 03 Jul 2018 04:45:05 GMT -->
</html>