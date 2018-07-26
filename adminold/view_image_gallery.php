<?php require_once 'common/header.php'; ?>

<!-- Main content -->
<div class="content">
<?php 
require_once 'classes/Gallery.php';
$gallery = new Gallery();
?>
					<!-- Image grid -->
					<h6 class="content-group text-semibold">
						Image grid
					</h6>

					<div class="row">

					<?php
					$getData = $gallery->getAllData();
					if ($getData) {
						while ($res = $getData->fetch_assoc()) {
					?>
						<div class="col-lg-3 col-sm-6">
							<div class="thumbnail">
								<div class="thumb">
									<img src="<?php echo $res['image']; ?>" alt="">
									<div class="caption-overflow">
										<span>
											<a href="<?php echo $res['image']; ?>" data-popup="lightbox" rel="gallery" class="btn border-white text-white btn-flat btn-icon btn-rounded"><i class="icon-plus3"></i></a>
											<a href="gallery_library_image.php" class="btn border-white text-white btn-flat btn-icon btn-rounded ml-5"><i class="icon-link2"></i></a>
										</span>
									</div>
								</div>
							</div>
						</div>
						<?php }} ?>

					</div>



					<!-- /image grid -->


					<!-- Footer -->
<?php include('common/footer.php'); ?>