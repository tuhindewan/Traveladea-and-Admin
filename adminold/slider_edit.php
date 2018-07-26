<?php include('common/header.php'); ?>
<?php 
require_once 'classes/Slider.php';
$slider = new Slider();
?>
<?php
	if (isset($_GET['slider'])) {
		$slider_id = $_GET['slider'];
		$sliders = $slider->getSliderById($slider_id);
	}
?>

<?php 
if ($_SERVER['REQUEST_METHOD']==='POST' && isset($_POST['Update'])) {
 	$headline_one  = $_POST['headline_one'];
 	$headline_two  = $_POST['headline_two'];
 	$headline_three  = $_POST['headline_three'];
 	$update = $slider->updateSlider($_FILES,$headline_one,$headline_two,$headline_three,$slider_id);
   }
?>

	<div class="content-wrapper">

		<!-- Page header -->
		<div class="page-header page-header-default">
			<div class="page-header-content">
				<div class="page-title">
					<h4><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold">Slider</span> - Edit</h4>
				</div>
			</div>

			<div class="breadcrumb-line">
				<ul class="breadcrumb">
					<li><a href="index-2.html"><i class="icon-home2 position-left"></i> Home</a></li>
					<li><a href="form_validation.html">Gallery</a></li>
					<li class="active">Edit slider</li>
				</ul>
			</div>
		</div>
		<!-- /page header -->

		<!-- Content area -->
		<div class="content">

			<!-- Form validation -->
			<div class="panel panel-flat">
				<div class="panel-heading">
					<h5 class="panel-title">Edit Slider</h5>
					<div class="heading-elements">
						<ul class="icons-list">
	                		<li><a data-action="collapse"></a></li>
	                		<li><a data-action="reload"></a></li>
	                		<li><a data-action="close"></a></li>
	                	</ul>
                	</div>
				</div>

				<?php if (isset($update)) {
					echo $update;
				} ?>

				<div class="panel-body">
					
					<?php 
						if ($sliders) {
							while ($result = $sliders->fetch_assoc()) {
					?>
					<form class="form-horizontal form-validate-jquery" action="#" method="POST" enctype="multipart/form-data">
						<fieldset class="content-group">
							
							
							<div class="form-group">
								<label class="control-label col-sm-3">Headline One<span class="text-danger"></span></label>
								<div class="col-sm-9">
									<input type="text" name="headline_one" value="<?php echo $result['headline_one']; ?>" class="form-control"  placeholder="Write here" required>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-sm-3">Headline Two<span class="text-danger"></span></label>
								<div class="col-sm-9">
									<input type="text" name="headline_two" value="<?php echo $result['headline_two']; ?>" class="form-control"  placeholder="Write here" required>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-sm-3">Headline Three<span class="text-danger"></span></label>
								<div class="col-sm-9">
									<input type="text" name="headline_three" value="<?php echo $result['headline_three']; ?>" class="form-control"  placeholder="Write here" required>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-sm-3">Image</label>
								<div class="col-sm-9">
									<input type="file" name="files"  class="form-control">
								</div>
							</div>
						</fieldset>
						<div class="text-right">
							<button type="reset" class="btn btn-default" id="reset">Reset <i class="icon-reload-alt position-right"></i></button>
							<button type="submit" class="btn btn-primary" name="Update">Submit <i class="icon-arrow-right14 position-right"></i></button>
						</div>
					</form>
					<?php }} ?>
				</div>
			</div>
			<!-- /form validation -->

<?php include('common/footer.php'); ?>