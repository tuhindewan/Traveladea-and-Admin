<?php require_once 'partials/header.php'; ?>
<?php require_once 'partials/sidebar.php'; ?>		
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
    
   }
?>
	
		
		<!-- begin #content -->
		<div id="content" class="content">
			<!-- begin breadcrumb -->
			<ol class="breadcrumb pull-right">
				<li class="breadcrumb-item"><a href="">Home</a></li>
				<li class="breadcrumb-item"><a href="">Gallery</a></li>
				<li class="breadcrumb-item active">Add Photo/Video</li>
			</ol>
			<!-- end breadcrumb -->
			<!-- begin page-header -->
			<h1 class="page-header">Dashboard</h1>
			<!-- end page-header -->
			<!-- begin row -->
			<div class="row">
                <!-- begin col-6 -->
			    <div class="col-lg-12">
			        <!-- begin panel -->
                    <div class="panel panel-inverse" data-sortable-id="form-validation-1">
                        <!-- begin panel-heading -->
                        <div class="panel-heading">
                            <div class="panel-heading-btn">
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-redo"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
                            </div>
                            <h4 class="panel-title">Add Photo/Video</h4>
                        </div>
                        <?php if (isset($upload)) {
                        	echo $upload;
                        } ?>
                        <!-- end panel-heading -->
                        <!-- begin panel-body -->
                        <div class="panel-body">
                            <form class="form-horizontal" data-parsley-validate="true" action="#" method="POST" enctype="multipart/form-data">
								<div class="form-group row m-b-15">
									<label class="col-md-4 col-sm-4 col-form-label" for="fullname" style="text-align:right">File Title * :</label>
									<div class="col-md-8 col-sm-8">
										<input class="form-control" type="text" id="fullname" name="image_title" placeholder="Write here" required data-parsley-required="true" />
									</div>
								</div>

								<div class="form-group row m-b-15">
									<label class="col-md-4 col-sm-4 col-form-label" for="fullname" style="text-align:right">Image * :</label>
									<div class="col-md-8 col-sm-8">
										<input type="file" name="files[]" multiple  class="form-control">
									</div>
								</div>

								<div class="form-group row m-b-15">
									<label class="col-md-4 col-sm-4 col-form-label" for="fullname" style="text-align:right">Video * :</label>
									<div class="col-md-8 col-sm-8">
										<input type="file" name="videos[]" multiple  class="form-control">
									</div>
								</div>

								<div class="text-right">
									<button type="reset" class="btn btn-default" id="reset">Reset <i class="icon-reload-alt position-right"></i></button>
									<button type="submit" class="btn btn-primary" name="gallerySubmit">Submit <i class="icon-arrow-right14 position-right"></i></button>
								</div>
                            </form>
                        </div>
                        <!-- end panel-body -->
                        <!-- begin hljs-wrapper -->
                        <div class="hljs-wrapper">
						</div>
                        <!-- end hljs-wrapper -->
                    </div>
                    <!-- end panel -->
                </div>

			</div>
		</div>
		<!-- end #content -->
		
<?php require_once 'partials/footer.php'; ?>

<script>
	$(document).ready(function() {
		App.init();
		GalleryV2.init();
	});
</script>