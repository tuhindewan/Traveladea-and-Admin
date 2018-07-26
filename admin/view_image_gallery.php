<?php require_once 'partials/header.php'; ?>
<?php require_once 'partials/sidebar.php'; ?>
<?php 
require_once 'classes/Gallery.php';
$gallery = new Gallery();
?>

		
		<!-- begin #content -->
		<div id="content" class="content">
			<!-- begin breadcrumb -->
			<ol class="breadcrumb pull-right">
				<li class="breadcrumb-item"><a href="javascript:;">Home</a></li>
				<li class="breadcrumb-item"><a href="javascript:;">Gallery</a></li>
				<li class="breadcrumb-item active">View Photo Gallery</li>
			</ol>
			<!-- end breadcrumb -->
			<!-- begin page-header -->
			<h1 class="page-header">View Photo Gallery<small></small></h1>
			<!-- end page-header -->
			
			<!-- begin superbox -->
			<div class="superbox " data-offset="50">
				<?php
				$getData = $gallery->getAllData();
				if ($getData) {
					while ($res = $getData->fetch_assoc()) {
				?>
			    <div class="superbox-list">
			    	<a href="javascript:;" class="superbox-img">
						<img data-img="<?php echo $res['image']; ?>" />
						<span style="background: url(<?php echo $res['image']; ?>);"></span>
			    	</a>
				</div>
				<?php }} ?>
			</div>
			<!-- end superbox -->
		</div>
		<!-- end #content -->

		
<?php require_once 'partials/footer.php'; ?>
<script>
	$(document).ready(function() {
		App.init();
		GalleryV2.init();
	});
</script>