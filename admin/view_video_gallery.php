<?php require_once 'partials/header.php'; ?>
<?php require_once 'partials/sidebar.php'; ?>
<?php 
require_once 'classes/Gallery.php';
$gallery = new Gallery();
?>
<style type="text/css">
	.thumbnail {
	    
	    box-shadow: 0 1px 1px rgba(0, 0, 0, .05)
	}
	.video-container {
	    position: relative;
	    padding-bottom: 56.25%;
	    height: 0;
	    overflow: hidden;
	}
	.video-container embed, .video-container iframe, .video-container object {
	    position: absolute;
	    top: 0;
	    left: 0;
	    width: 100%;
	    height: 100%;
	}
</style>
		
		<!-- begin #content -->
		<div id="content" class="content">
			<!-- begin breadcrumb -->
			<ol class="breadcrumb pull-right">
				<li class="breadcrumb-item"><a href="javascript:;">Home</a></li>
				<li class="breadcrumb-item"><a href="javascript:;">Gallery</a></li>
				<li class="breadcrumb-item active">View Video Gallery</li>
			</ol>
			<!-- end breadcrumb -->
			<!-- begin page-header -->
			<h1 class="page-header">View Video Gallery<small></small></h1>
			<!-- end page-header -->
			
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
		</div>
		<!-- end #content -->

		

<?php require_once 'partials/footer.php'; ?>
<script>
	$(document).ready(function() {
		App.init();
		DashboardV2.init();
	});
</script>