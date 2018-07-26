<?php require_once 'partials/header.php'; ?>
<?php require_once 'classes/Gallery.php'; ?>
<?php
$gallery = new Gallery();
$images  = $gallery->getAllPhotoData();
?>
    <!-- page-->
    <div class="content-body">
      <div class="container page">
        <div id="filter-grid" class="row portfolio-grid gallery">
        <?php 

          if ($images) {
            while ($result = $images->fetch_assoc()) {
              
        ?>
          <div class="col-md-3 col-sm-6 col-xs-6 all adventure wildlife beach">
            <div class="portfolio-item big">
              <a href="admin/<?php echo $result['image']; ?>" class="fancy">
                <div class="portfolio-media"><img src="admin/<?php echo $result['image']; ?>" data-at2x="pic/portfolio/580x285-1@2x.jpg" alt></div>
              </a>
              <div class="links"><a href="admin/<?php echo $result['image']; ?>" class="fancy"><i class="fa fa-expand"></i></a></div>
            </div>
          </div>
        <?php
            }
          }
        ?>  
        </div>
      </div>
    </div>
    <!-- ! page -->
<?php require_once 'partials/footer.php'; ?>