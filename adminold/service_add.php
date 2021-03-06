<?php include('common/header.php');
 ?>
 <?php 
 require_once 'classes/Service.php';
 $service = new Service();
 ?>
 <?php 
 if ($_SERVER['REQUEST_METHOD']==='POST' && isset($_POST['add_service'])) {
    $ser_add = $service->serviceAdd($_POST);
 }
 ?>

	<div class="content-wrapper">

		<!-- Page header -->
		<div class="page-header page-header-default">
			<div class="page-header-content">
				<div class="page-title">
					<h4><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold">Services</span> -Add</h4>
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
					<li><a href="form_validation.html">services</a></li>
					<li class="active">services add</li>
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
					<h5 class="panel-title">Services Add</h5>
					<div class="heading-elements">
						<ul class="icons-list">
	                		<li><a data-action="collapse"></a></li>
	                		<li><a data-action="reload"></a></li>
	                		<li><a data-action="close"></a></li>
	                	</ul>
                	</div>
                	<?php if (isset($ser_add)){echo $ser_add;}?>
				</div>

				<div class="panel-body">
					
					<form class="form-horizontal form-validate-jquery" action="#" method="POST">
						<fieldset class="content-group">
							
							<div class="form-group">
								<label class="control-label col-lg-3">Service Status <span class="text-danger"></span></label>
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
								<label class="control-label col-lg-3">Service Title <span class="text-danger"></span></label>
								<div class="col-lg-9">
									<input type="text" name="title" class="form-control" required="required" placeholder="Service Title">
								</div>
							</div>


							<div class="form-group">
								<label class="control-label col-lg-3">Description <span class="text-danger"></span></label>
								<div class="col-lg-9">
									<textarea rows="5" cols="5" name="description" class="form-control" required="required" placeholder="Description"></textarea>
								</div>
							</div>
						</fieldset>
						<div class="text-right">
							<button type="reset" class="btn btn-default" id="reset">Reset <i class="icon-reload-alt position-right"></i></button>
							<button type="submit" class="btn btn-primary" name="add_service">Submit <i class="icon-arrow-right14 position-right"></i></button>
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