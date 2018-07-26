<?php include('common/header.php'); ?>

	<div class="content-wrapper">

		<!-- Page header -->
		<div class="page-header page-header-default">
			<div class="page-header-content">
				<div class="page-title">
					<h4><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold">Package</span></h4>
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
		<!-- /page header -->


		<!-- Content area -->
		<div class="content">

			<!-- Form validation -->
			<div class="panel panel-flat">
				<div class="panel-heading">
					<h5 class="panel-title">Package</h5>
					<div class="heading-elements">
						<ul class="icons-list">
	                		<li><a data-action="collapse"></a></li>
	                		<li><a data-action="reload"></a></li>
	                		<li><a data-action="close"></a></li>
	                	</ul>
                	</div>
				</div>

				<div class="panel-body">
					
					<form class="form-horizontal form-validate-jquery" action="#">
						<fieldset class="content-group">
							
							<div class="form-group">
								<label class="control-label col-lg-3">Package Status <span class="text-danger">
								</span></label>
								<div class="col-lg-9">
									<div class="checkbox checkbox-switch">
										<label>
											<input type="checkbox" name="switch_single" data-on-text="Yes" data-off-text="No" class="switch" required="required">Active</label>			
									</div>
								</div>
							</div>
			<div class="form-group">
				<label class="control-label col-lg-3">Package Title <span class="text-danger"></span></label>
								<div class="col-lg-9">
									<input type="text" name="basic" class="form-control" required="required" placeholder="Package Title">
								</div>
							</div>
			<label class="control-label col-lg-3">Start date-end date<span class="text-danger"></span></label>
			<div class="form-group">
				<div class="input-group">
					<span class="input-group-addon"><i class="icon-calendar22"></i></span>
						<input type="text" class="form-control daterange-basic" value="01/01/2015 - 01/31/2015"> 
				</div>
			</div>

<?php include('common/footer.php'); ?>