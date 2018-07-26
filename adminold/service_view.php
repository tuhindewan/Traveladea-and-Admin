<!DOCTYPE html>
<html lang="en">

<!-- TravelAdea -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Traveladea admin</title>

	<!-- Global stylesheets -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
	<link href="assets/css/icons/icomoon/styles.css" rel="stylesheet" type="text/css">
	<link href="assets/css/bootstrap.css" rel="stylesheet" type="text/css">
	<link href="assets/css/core.css" rel="stylesheet" type="text/css">
	<link href="assets/css/components.css" rel="stylesheet" type="text/css">
	<link href="assets/css/colors.css" rel="stylesheet" type="text/css">
	<!-- /global stylesheets -->

	<!-- Core JS files -->
	<script type="text/javascript" src="assets/js/plugins/loaders/pace.min.js"></script>
	<script type="text/javascript" src="assets/js/core/libraries/jquery.min.js"></script>
	<script type="text/javascript" src="assets/js/core/libraries/bootstrap.min.js"></script>
	<script type="text/javascript" src="assets/js/plugins/loaders/blockui.min.js"></script>
	
	<!-- /core JS files -->

	<!-- Theme JS files -->
	<script type="text/javascript" src="assets/js/plugins/tables/datatables/datatables.min.js"></script>
	<script type="text/javascript" src="assets/js/plugins/tables/datatables/extensions/select.min.js">
	</script>
	<script type="text/javascript" src="assets/js/plugins/tables/datatables/extensions/buttons.min.js"></script>
	<script type="text/javascript" src="assets/js/plugins/forms/selects/select2.min.js"></script>

	<script type="text/javascript" src="assets/js/core/app.js"></script>
	<script type="text/javascript" src="assets/js/pages/datatables_extension_select.js"></script>
	<script type="text/javascript" src="assets/js/pages/dashboard.js"></script>
	<!-- /theme JS files -->

</head>

<body>

	<!-- Main navbar -->
<?php include('common/nav_bar.php'); ?>
				<!-- /main navbar -->
				<!-- Page container -->
					<div class="page-container">
				<!-- Page content -->
					<div class="page-content">
				<!-- Page container -->
					<div class="page-container">
				<!-- Page content -->
					<div class="page-content">
				<!-- Main sidebar -->
					<div class="sidebar sidebar-main">
					<div class="sidebar-content">
				<!-- User menu -->
					<div class="sidebar-user">
						<div class="category-content">
							<div class="media">
								<a href="#" class="media-left"><img src="assets/images/demo/users/face11.jpg" class="img-circle img-sm" alt=""></a>
								<div class="media-body">
									<span class="media-heading text-semibold">Admin</span>
									<div class="text-size-mini text-muted">
										<i class="icon-pin text-size-small"></i> &nbsp;Santa Ana, CA
									</div>
								</div>

								<div class="media-right media-middle">
									<ul class="icons-list">
										<li>
											<a href="#"><i class="icon-cog3"></i></a>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<!-- /user menu -->
					<!-- Main navigation -->
					<div class="sidebar-category sidebar-category-visible">
						<div class="category-content no-padding">
							<ul class="navigation navigation-main navigation-accordion">
								<!-- Main -->
								<li class="navigation-header"><span>Main</span> <i class="icon-menu" title="Main pages"></i></li>
								<li class="active"><a href="index.php"><i class="icon-home4"></i> <span>Dashboard</span></a></li>
								<li>
									<a href="index.php"><i class="icon-stack2"></i> <span>Service</span></a>
									<ul>
										<li><a href="service_add.php">Service add</a></li>
										<li><a href="service_list.php">Service list</a></li>
										<li><a href="service_type_add.php">Service type add</a></li>
								
									</ul>
								</li>

                                <li>
									<a href="index.php"><i class="icon-stack2"></i> <span>Gallery</span></a>
									<ul>
										<li><a href="add_gallery.php">Add gallery</a></li>
										<li><a href="view_video_gallery.php">view video gallery</a></li>
										<li><a href="view_image_gallery.php">view image gallery</a></li>
								
									</ul>

								</li>
								<li>
									<a href="index.php"><i class="icon-stack2"></i> <span>Services</span></a>
									<ul>	
										<li><a href="service_add.php">service add</a></li>
										<li><a href="service_list.php">service list</a></li>
									</ul>

								</li>
							</ul>
						</div>
					</div>
					<!-- /main navigation -->
				</div>
			</div>




		
			<!-- /main sidebar -->
			<!-- Main content -->
			<div class="content-wrapper">

				<!-- Page header -->
				<div class="page-header page-header-default">
					<div class="page-header-content">
						<div class="page-title">
							<h4><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold">Service</span> - List</h4>
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
							<li><a href="datatable_extension_select.html">Service</a></li>
							<li class="active">Service View</li>
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

<?php 
if (isset($_GET['service_id'])) {
	$service_id = $_GET['service_id'];
}
require_once 'classes/Service.php';
$service = new Service();

?>
				<!-- /page header -->
				<!-- Content area -->
				<div class="content">
					<div class="row">
						<div class="col-md-12">
							<div class="panel panel-default panel-shadow">
							<?php 
							$getData = $service->getServiceById($service_id);
							if ($getData) {
								while ($res = $getData->fetch_assoc()) {
							?>
								<div class="panel-heading">
									<div class="row">
										<div class="col-md-10">
											<?php echo $res['title']; ?>
										</div>
										<div class="col-md-2">
											<?php if($res['status'] == '1'){ ?>
											<span class="label label-success">Active</span>
											<?php }else { ?>
											<span class="label label-danger">Inactive</span>
											<?php } ?>
										</div>
									</div>		
								</div>

								<div class="panel-body">
								<ul style="list-style:none;padding-left:0px;">
									<li>Service Type : <?php echo $res['type_name']; ?></li>
									<li>Position   : <?php echo $res['position']; ?></li>
								</ul>
									<?php echo $res['description']; ?>
								</div>
							<?php }} ?>
							</div>    
						</div>
					</div>
				</div>
					<!-- /Basic initialization -->


					<!-- Single item selection -->
					
					<!-- /control buttons -->


					<!-- Footer -->
<?php include('common/footer.php'); ?>