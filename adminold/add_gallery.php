<?php include('common/header.php'); ?>
<?php 
require_once 'classes/Gallery.php';
$gallery = new Gallery();
?>

<?php 
if ($_SERVER['REQUEST_METHOD']==='POST' && isset($_POST['gallerySubmit'])) {
 	$image_title  = $_POST['image_title'];
 	if(isset($_FILES["videos"]["tmp_name"])){
 		$upload = $gallery->videoUpload($_FILES,$image_title);	
 	}
 	//print_r($_FILES["files"]["tmp_name"][0]);exit;
 	
 	if(isset($_FILES["files"]["tmp_name"]) && $_FILES["files"]["tmp_name"][0] !=null){
 		
 		$upload = $gallery->imageUpload($_FILES,$image_title);
 	}
 	/*$video_tmp  =  $_FILES["videos"]["tmp_name"];
 	if (!empty($video_tmp)){
 	 	$upload = $gallery->videoUpload($_POST,$image_title);
 	 }else{
 	 	$upload = $gallery->imageUpload($_POST,$image_title);
 	 }*/ 
    
   }
?>

	<div class="content-wrapper">

		<!-- Page header -->
		<div class="page-header page-header-default">
			<div class="page-header-content">
				<div class="page-title">
					<h4><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold">Gallery</span> - Add</h4>
				</div>

				<div class="heading-elements">
					<div class="heading-btn-group">
						<a href="#" class="btn btn-link btn-float has-text"><i class="icon-bars-alt text-primary"></i><span>Statistics</span></a>
						<a href="#" class="btn btn-link btn-float has-text"><i class="icon-calculator text-primary"></i> <span>Invoices</span></a>
						<a href="#" class="btn btn-link btn-float has-text"><i class="icon-calendar5 text-primary"></i> <span>Schedule</span></a>
					</div>
				</div>
			</div>

			<div class="breadcrumb-line">
				<ul class="breadcrumb">
					<li><a href="index-2.html"><i class="icon-home2 position-left"></i> Home</a></li>
					<li><a href="form_validation.html">Gallery</a></li>
					<li class="active">Add gallery</li>
				</ul>

				<ul class="breadcrumb-elements">
					<li><a href="#"><i class="icon-comment-discussion position-left"></i> Support</a></li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							<i class="icon-gear position-left"></i>
							Settings
							<span class="caret"></span>
						</a>

						<ul class="dropdown-menu dropdown-menu-right">
							<li><a href="#"><i class="icon-user-lock"></i> Account security</a></li>
							<li><a href="#"><i class="icon-statistics"></i> Analytics</a></li>
							<li><a href="#"><i class="icon-accessibility"></i> Accessibility</a></li>
							<li class="divider"></li>
							<li><a href="#"><i class="icon-gear"></i> All settings</a></li>
						</ul>
					</li>
				</ul>
			</div>
		</div>
		<!-- /page header -->

		<!-- Content area -->
		<div class="content">

			<!-- Form validation -->
			<div class="panel panel-flat">
				<div class="panel-heading">
					<h5 class="panel-title">Add Gallery</h5>
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
								<label class="control-label col-sm-3">Title<span class="text-danger"></span></label>
								<div class="col-sm-9">
									<input type="text" name="image_title" class="form-control"  placeholder="Title" required>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-sm-3">Image</label>
								<div class="col-sm-9">
									<input type="file" name="files[]" multiple  class="form-control">
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-sm-3">Video</label>
								<div class="col-sm-4">
									<input type="url" class="form-control">
								</div>
								
								<div class="col-sm-4">
									<div class="row">
										<div class="col-sm-1">
											Or
										</div>
										<div class="col-sm-11">
											<input type="file" name="videos[]" multiple  class="form-control">
										</div>
									</div>
								</div>
							</div>
						</fieldset>
						<div class="text-right">
							<button type="reset" class="btn btn-default" id="reset">Reset <i class="icon-reload-alt position-right"></i></button>
							<button type="submit" class="btn btn-primary" name="gallerySubmit">Submit <i class="icon-arrow-right14 position-right"></i></button>
						</div>
					</form>
				</div>
			</div>
			<!-- /form validation -->

<?php include('common/footer.php'); ?>