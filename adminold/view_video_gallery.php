<?php require_once 'common/header.php'; ?>

			<!-- Main content -->
			<div class="content">
<?php 
require_once 'classes/Gallery.php';
$gallery = new Gallery();
?>
						<!-- Video grid -->
					<h6 class="content-group text-semibold">
						Video grid
					</h6>

					<div class="row">
						<?php
						$getData = $gallery->getAllVideoData();
						if ($getData) {
							while ($res = $getData->fetch_assoc()) {
						?>
						<div class="col-lg-3 col-sm-6">
							<div class="thumbnail">
								<div class="video-container">
									<iframe allowfullscreen="" frameborder="0" mozallowfullscreen="" src="<?php echo $res['video']; ?>" webkitallowfullscreen=""></iframe>
					            </div>
							</div>
						</div>
						<?php }} ?>

					</div>
					<!-- /video grid -->
			<div>
				<a class="btn btn-info" href="gallery_library_video.php"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit video gallery</a>
			</div>

			<?php include('common/footer.php'); ?>		
