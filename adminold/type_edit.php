<?php include('common/header.php'); ?>
<?php 
require_once 'classes/Service.php';
$service = new Service();
?>

<?php 
if ($_SERVER['REQUEST_METHOD']==='POST' && isset($_POST['add_type'])) {
   $type_add = $service->typeAdd($_POST);
}
?>

<?php
if (isset($_GET['type_id'])) {
	$type_id = $_GET['type_id'];
}
$getData = $service->getTypeById($type_id);
?>

<?php 
if ($_SERVER['REQUEST_METHOD']==='POST' && isset($_POST['submit_edit'])) {
   $type_edit = $service->typeNameEdit($_POST , $type_id);
}
?>

	<div class="content-wrapper">

		<!-- Page header -->
		<div class="page-header page-header-default">
			<div class="page-header-content">
				<div class="page-title">
					<h4><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold">Service</span> -Type-Edit</h4>
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
					<li class="active">Service type edit</li>
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
		<?php 
		if (isset($type_edit)) {
			echo $type_edit;
		}

		?>
		<div class="content" style="min-height: 460px;">
			<div class="panel panel-flat">
				<div class="panel-heading">
					<h5 class="panel-title">Edit</h5>
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
				if ($getData) {
					while ($res = $getData->fetch_assoc()) {
				?>
					<form class="form-horizontal form-validate-jquery" action="#" method="POST">
						<fieldset class="content-group">
							<div class="form-group">
								<label class="control-label col-lg-3">Type Name <span class="text-danger"></span></label>
								<div class="col-lg-9">
									<input type="text" name="type_name" value="<?php echo $res['type_name']; ?>" class="form-control" required="required" placeholder="Service Type Name">
								</div>
							</div>
					</fieldset>
						<div class="text-right">
							<button type="reset" class="btn btn-default" id="reset">Reset <i class="icon-reload-alt position-right"></i></button>
							<button type="submit" class="btn btn-primary" name="submit_edit">Submit <i class="icon-arrow-right14 position-right"></i></button>
						</div>
					</form>
				<?php }} ?>	
				</div>
			</div>
		</div>
				
	<?php include('common/footer.php'); ?>

