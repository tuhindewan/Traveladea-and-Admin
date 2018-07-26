<?php require_once 'partials/header.php'; ?>
<?php require_once 'classes/Gallery.php'; ?>
<?php
$gallery = new Gallery();
$videos  = $gallery->getAllVideoData();
?>
    <!-- page-->
    <div class="content-body">
      <div class="container page">
        <div class="row">
          <?php
          if ($videos) {
            while ($result = $videos->fetch_assoc()) {
          ?>
          <div class="col-md-3 col-lg-3 col-sm-6">
            <div class="thumbnail">
              <div class="video-container">
                <iframe allowfullscreen="" frameborder="0" mozallowfullscreen="" src="admin/<?php echo $result['video']; ?>" webkitallowfullscreen="" style="width: 100%;margin-top: 0px;margin-bottom: -5px;"></iframe>
                    </div>
            </div>
          </div>
          <?php }} ?>

        </div>
        <!-- /video grid -->
      </div>
    </div>
    <!-- ! page -->
<?php require_once 'partials/footer.php'; ?>