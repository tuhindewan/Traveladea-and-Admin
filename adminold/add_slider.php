<?php include('common/header.php'); ?>
<?php 
require_once 'classes/Slider.php';
$slider = new Slider();
?>

<?php 
if ($_SERVER['REQUEST_METHOD']==='POST' && isset($_POST['Submit'])) {
 	$headline_one  = $_POST['headline_one'];
 	$headline_two  = $_POST['headline_two'];
 	$headline_three  = $_POST['headline_three'];
 	$upload = $slider->imageUpload($_FILES,$headline_one,$headline_two,$headline_three);
   }
?>

	<div class="content-wrapper">

		<!-- Page header -->
		<div class="page-header page-header-default">
			<div class="page-header-content">
				<div class="page-title">
					<h4><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold">Slider</span> - Add</h4>
				</div>
			</div>

			<div class="breadcrumb-line">
				<ul class="breadcrumb">
					<li><a href="index-2.html"><i class="icon-home2 position-left"></i> Home</a></li>
					<li><a href="form_validation.html">Gallery</a></li>
					<li class="active">Add slider</li>
				</ul>
			</div>
		</div>
		<!-- /page header -->

		<!-- Content area -->
		<div class="content">

			<!-- Form validation -->
			<div class="panel panel-flat">
				<div class="panel-heading">
					<h5 class="panel-title">Add Slider</h5>
					<div class="heading-elements">
						<ul class="icons-list">
	                		<li><a data-action="collapse"></a></li>
	                		<li><a data-action="reload"></a></li>
	                		<li><a data-action="close"></a></li>
	                	</ul>
                	</div>
				</div>

				<?php if (isset($upload)) {
					echo $upload;
				} ?>

				<div class="panel-body">
					
					<form class="form-horizontal form-validate-jquery" action="#" method="POST" enctype="multipart/form-data">
						<fieldset class="content-group">
							
							
							<div class="form-group">
								<label class="control-label col-sm-3">Headline One<span class="text-danger"></span></label>
								<div class="col-sm-9">
									<input type="text" name="headline_one" class="form-control"  placeholder="Write here" required>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-sm-3">Headline Two<span class="text-danger"></span></label>
								<div class="col-sm-9">
									<input type="text" name="headline_two" class="form-control"  placeholder="Write here" required>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-sm-3">Headline Three<span class="text-danger"></span></label>
								<div class="col-sm-9">
									<input type="text" name="headline_three" class="form-control"  placeholder="Write here" required>
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
							<button type="submit" class="btn btn-primary" name="Submit">Submit <i class="icon-arrow-right14 position-right"></i></button>
						</div>
					</form>
				</div>
			</div>
			<!-- /form validation -->

<?php include('common/footer.php'); ?>