<?php 
include('common/header.php');
require_once 'classes/Package.php';
$package = new Package();
?>

<?php 
if ($_SERVER['REQUEST_METHOD']==='POST' && isset($_POST['submit'])) {
   $packs_id = $package->packageAdd($_POST);

   if ($packs_id) {
     while ($value = $packs_id->fetch_assoc()) {
       $pack_id = $value['package_id'];
     }
   }
   	$upPacImg = $package->uploadPackageImage($_FILES,$pack_id);

   	

   
}
?>


	<div class="content-wrapper">

		<!-- Page header -->
		<div class="page-header page-header-default">
			<div class="page-header-content">
				<div class="page-title">
					<h4><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold">Package</span> -Add</h4>
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
					<li><a href="form_validation.html">Package</a></li>
					<li class="active">Package add</li>
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
		


		<!-- Content area -->
		<div class="content">


			<!-- Form validation -->
			<div class="panel panel-flat">
				<div class="panel-heading">
					<h5 class="panel-title">Package Add</h5>
					<div class="heading-elements">
						<ul class="icons-list">
	                		<li><a data-action="collapse"></a></li>
	                		<li><a data-action="reload"></a></li>
	                		<li><a data-action="close"></a></li>
	                	</ul>
                	</div>
				</div>

				<div class="panel-body">
					<?php 
					    if (isset($upPacImg)) {
					      echo $upPacImg;
					    }
					?>
					<form class="form-horizontal form-validate-jquery" action="#" method="POST" enctype="multipart/form-data">
						<fieldset class="content-group">
							
							<div class="form-group">
								<label class="control-label col-lg-3">Package Status <span class="text-danger"></span></label>
								<div class="col-lg-9">
									<div class="checkbox checkbox-switch">
										<label>
											<input type="checkbox" name="status" value="1" data-on-text="Yes" data-off-text="No" class="switch">
											Active
										</label>
									</div>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-lg-3">Package Title <span class="text-danger"></span></label>
								<div class="col-lg-9">
									<input type="text" name="title" class="form-control" required="required" placeholder="Package Title">
								</div>
							</div>


							<div class="form-group">
								<label class="control-label col-lg-3">Description <span class="text-danger"></span></label>
								<div class="col-lg-9">
									<textarea rows="5" cols="5" name="description" class="form-control" required="required" placeholder="Description"></textarea>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-lg-3">Package Price <span class="text-danger"></span></label>
								<div class="col-lg-9">
									<input type="number" name="price" class="form-control" required="required" placeholder="Package price">
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-sm-3">Add Images</label>
								<div class="col-sm-9">
									<input type="file" name="files[]" multiple  class="form-control">
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-lg-3">Country <span class="text-danger"></span></label>
								<div class="col-lg-9">
									<select id="second" data-placeholder="Choose a Country..." class="chosen-select" name="country"  style="width:350px;" tabindex="4">
							          <option value=""></option> 
							          <option value="United States">United States</option> 
							          <option value="United Kingdom">United Kingdom</option> 
							          <option value="Afghanistan">Afghanistan</option> 
							          <option value="Albania">Albania</option> 
							          <option value="Algeria">Algeria</option> 
							          <option value="American Samoa">American Samoa</option> 
							          <option value="Andorra">Andorra</option> 
							          <option value="Angola">Angola</option> 
							          <option value="Anguilla">Anguilla</option> 
							        </select>
								</div>
							</div>

						</fieldset>

						

						<div class="text-right">
							<button type="reset"  class="btn btn-default" id="reset">Reset <i class="icon-reload-alt position-right"></i></button>
							<button type="submit" name="submit" class="btn btn-primary">Submit <i class="icon-arrow-right14 position-right"></i></button>
						</div>
					</form>
				</div>
			</div>
			<!-- /form validation -->
			<!-- <script type="text/javascript" src="assets/js/plugins/forms/selects/select2.min.js"></script> -->
			<script type="text/javascript">
				$(".chosen-select").chosen();
			</script>
<?php include('common/footer.php'); ?>